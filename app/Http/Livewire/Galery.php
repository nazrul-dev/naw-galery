<?php

namespace App\Http\Livewire;

use App\Models\Media;

class Galery extends Base
{
    public function render()
    {
        $galeries = Media::where('tipe', 'galery')->latest()->get();
        return view('livewire.galery', compact([
            'galeries'
        ]));
    }
}
