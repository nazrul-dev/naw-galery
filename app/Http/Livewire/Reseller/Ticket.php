<?php

namespace App\Http\Livewire\Reseller;

use Livewire\Component;

class Ticket extends Component
{
    public function render()
    {
        return view('livewire.reseller.ticket')->layout('layouts.reseller');
    }
}
