<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Base;
use App\Models\Packet;
use App\Models\User as Models;

class User extends Base
{

    public $search;
    public $packet = '';
    protected $queryString = ['search'];
    public $status;

    public function mount($status = ''){
      
        if($status === 'deactive'){
            $this->status = 0;
        }else{
            $this->status = 1;
        }
        
    }


    public function render()
    {
        $resellers = Models::where('active', '=', $this->status)->where(function ($q) {

            if ($this->packet) {
                $q->where('packet_id', $this->packet);
            }
            if ($this->search) {
                $q->where('name', 'like', '%' . $this->search . '%');
                $q->orWhere('username', 'like', '%' . $this->search . '%');
            }
        })->latest()->paginate(50);

        $packets = Packet::get();
        return view('livewire.admin.user', compact([
            'resellers',
            'packets'
        ]))->layout('layouts.admin');
    }
}
