<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event as Models;
class Event extends Component
{
    public function render()
    {
        $events = Models::latest()->paginate(5);
        return view('livewire.event', compact([
            'events'
        ]));
    }
}
