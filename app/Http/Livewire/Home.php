<?php

namespace App\Http\Livewire;
use App\Models\{Packet, Media, Team};
use Livewire\Component;
class Home extends Component
{



    public function render()
    {

        $galeries = Media::where([

            'tipe' => 'galery'
        ])->limit(6)->latest()->get();
        $teams = Team::get();
        $packets = Packet::get();

        return view('livewire.home', compact([
            'galeries',
            'teams',
            'packets'
        ]));
    }
}
