<?php

namespace App\Http\Livewire\Reseller;

use App\Http\Livewire\Base;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Account extends Base
{
    public $user;
    public $nik, $telpon, $alamat, $gender, $name, $new_password, $current_password;
    public $passwordConfirmation = '';
    public function mount()
    {
        $user = auth()->user();
        $this->nik = $user->profil->nik;
        $this->name = $user->name;
        $this->telpon = $user->profil->telpon;
        $this->alamat = $user->profil->alamat;
        $this->gender = $user->profil->gender;
        $this->user = $user;
    }

    public function saveProfile()
    {

        $this->validate([
            'telpon' => ['required', 'numeric', 'unique:profils,telpon,' . $this->user->profil->id],
            'nik' => ['required', 'numeric', 'unique:profils,nik,' . $this->user->profil->id],
            'gender' => ['required', 'in:male,female'],
            'alamat' => ['required'],
            'name' => ['required'],
        ]);

        try {
            $this->user->update([
                'name' => $this->name,
            ]);

            $this->user->profil()->update([
                'nik' => $this->nik,
                'alamat' => $this->alamat,
                'telpon' => $this->telpon,
                'gender' => $this->gender,
            ]);
            $this->new_password  = '';
            $this->current_password = '';
            $this->passwordConfirmation = '';
            $this->alert('success', 'Berhasil Mengupdate Profil ');
           
        } catch (QueryException $th) {
            $this->alert('error', $th->getMessage());
        }
    }

    public function changePassword()
    {

        $this->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required', 'min:8', 'same:passwordConfirmation'],

        ]);

        try {
            $this->user->update([
                ['password' => Hash::make($this->new_password)],
            ]);


            $this->alert('success', 'Berhasil Mengupdate Password ');
        } catch (QueryException $th) {
            $this->alert('error', $th->getMessage());
        }
    }

    public function render()
    {

        return view('livewire.reseller.account')->layout('layouts.reseller');
    }
}
