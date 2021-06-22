<?php

namespace App\Http\Livewire\Auth;

use App\Models\Packet;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;
use Illuminate\Http\Request;

class Register extends Component
{
    /** @var string */

    public $name = '';
    public $nik, $telpon, $gender, $alamat, $username, $paket;

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    public $referred_by = '';


    /** @var string */
    public $passwordConfirmation = '';

    public function mount(Request $request)
    {

        if ($request->ref) {
            $referral = \Hashids::decode($request->ref)[0] ?? '';
            $user = User::where([
                'active' => true,
                'id' => $referral
            ])->firstOrFail();

            $this->referred_by = $user;
        }
    }

    public function register()
    {


        $this->validate([
            'paket' => ['required'],
            'telpon' => ['required', 'numeric', 'unique:profils'],
            'nik' => ['required', 'numeric', 'unique:profils'],
            'gender' => ['required', 'in:male,female'],
            'alamat' => ['required'],
            'username' => ['required',  'unique:users', 'alpha_dash', 'max:15'],
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);



        $user = User::create([
            'packet_id' => $this->paket,
            'username' => $this->username,
            'referred_by' => $this->referred_by->id,
            'email' => $this->email,
            'name' => $this->name,
            'password' => Hash::make($this->password),

        ]);

        $user->profil()->create([
            'user_id' => $user->id,
            'nik' => $this->nik,
            'alamat' => $this->alamat,
            'telpon' => $this->telpon,
            'gender' => $this->gender,
        ]);



        event(new Registered($user));

        // Auth::login($user, false);

        return redirect()->intended(route('login'));
    }

    public function render()
    {
        $packets = Packet::get();
        return view('livewire.auth.register', compact([
            'packets'
        ]))->extends('layouts.auth');
    }
}
