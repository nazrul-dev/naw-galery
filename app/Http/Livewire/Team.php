<?php

namespace App\Http\Livewire;
use App\Models\Team as Models;
use Livewire\Component;

class Team extends Component
{
    public function render()
    {
        $teams = Models::latest()->get();
        return view('livewire.team', compact([
            'teams'
        ]));
    }
}
