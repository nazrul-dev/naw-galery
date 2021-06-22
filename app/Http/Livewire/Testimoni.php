<?php

namespace App\Http\Livewire;

use App\Models\Testimoni as ModelsTestimoni;
use Livewire\Component;

class Testimoni extends Component
{
    public function render()
    {
        $testimonies = ModelsTestimoni::latest()->paginate(4);
        return view('livewire.testimoni', compact([
            'testimonies'
        ]));
    }
}
