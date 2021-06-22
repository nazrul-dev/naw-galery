<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Base;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class Akses extends Base
{
    public $name, $email, $password, $roles = [];
    public $passwordConfirmation = '';
    public $updateMode = false;
    public $modal = false;
    public $ids;

    public function default()
    {
        $this->updateMode  = false;
        $this->name        = '';
        $this->password    = '';
        $this->roles       = [];
        $this->email       = '';
        $this->ids         = '';
    }


    public function edit($id)
    {
        $admin = Admin::find($id);
        if ($admin) {
            $this->default();
            $this->modal = true;
            $this->name = $admin->name;
            $this->roles       = json_decode($admin->roles);
            $this->email       = $admin->email;
            $this->ids         = $admin->id;
            $this->updateMode  = true;
        }
    }

    public function update()
    {
        $admin =  Admin::find($this->ids);
        $this->validate([
            'name'          => ['required'],
            'email'         => ['required', 'email', 'unique:admins,email,' . $admin->id],
        ]);
        
        $admin->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' =>  $this->password ?  Hash::make($this->password) : $admin->password,
            'roles' => json_encode($this->roles),
        ]);

        $this->alert('success', 'Pengguna Berhasil Diupdate');
        $this->modal = false;
    }

    public function create()
    {
        $this->default();
        $this->modal = true;
        $this->updateMode  = false;
    }


    public function submit()
    {
        $this->validate([
            'name'          => ['required'],
            'email'         => ['required', 'email', 'unique:admins'],
            'password'      => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);

        Admin::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'roles' => json_encode($this->roles),
        ]);

       
        $this->alert('success', 'Pengguna Berhasil Ditambahkan');
        $this->modal = false;
    }

    public function render()
    {
        $users = Admin::all();

        return view('livewire.admin.akses', compact('users'))->layout('layouts.admin');
    }
}
