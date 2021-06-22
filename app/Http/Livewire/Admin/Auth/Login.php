<?php

namespace App\Http\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ];

    public function authenticate()
    {
        $this->validate();

        if (Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            return redirect(route('admin.galery'));
        } else {
            $this->alert('error', trans('auth.failed'), [
                'position' =>  'top-right',
                'timer' =>  3000,
                'toast' =>  true,
                'confirmButtonText' =>  'Ok',
                'cancelButtonText' =>  'Cancel',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  false,
            ]);
            return;
        }
    }


    public function render()
    {
        return view('livewire.admin.auth.login')->extends('layouts.auth');
    }
}
