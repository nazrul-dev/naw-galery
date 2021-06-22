<?php

namespace App\Http\Livewire;

use App\Models\Media;
use Livewire\Component;

class Video extends Component
{
    public function render()
    {

        $videos = Media::where('tipe', 'videos')->latest()->get();
        return view('livewire.video', compact([
            'videos'
        ]));
    }
}
