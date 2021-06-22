<?php

namespace App\Http\Livewire;

use App\Models\Media;
use Livewire\Component;

class Reward extends Component
{
    public function render()
    {
        $rewards = Media::where('tipe', 'reward')->latest()->get();
        return view('livewire.reward', compact([
            'rewards'
        ]));
    }
}
