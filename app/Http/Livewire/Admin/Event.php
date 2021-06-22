<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Base;
use App\Models\Event as Models;

class Event extends Base
{

    public $mode = 'data';
    public $start_at = '', $title , $content, $Ids;

    public function changeMode($mode)
    {
        $this->resetFields($mode);
    }

    function resetFields($mode){
        $this->start_at = '';
        $this->title = '';
        $this->content = '';
        $this->mode = $mode;
    }



    public function edit($id)
    {
        $event = Models::find($id);
        $this->resetFields('edit');
        $this->start_at = $event->start_at->format('Y-m-d');
        $this->title = $event->title;
        $this->content = $event->content;
        $this->Ids = $event->id;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'start_at' => 'required'
        ]);
        $event = Models::find($this->Ids);
        $event->update([
            'title' => $this->title,
            'content' => $this->content,
            'start_at' => $this->start_at
        ]);

        $this->alert('success', 'Event Berhasil Diupdate');
        $this->resetFields('data');

    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'start_at' => 'required'
        ]);


        Models::create([
            'title' => $this->title,
            'content' => $this->content,
            'start_at' => $this->start_at
        ]);

        $this->alert('success', 'Event Berhasil Ditambah');
        $this->resetFields('data');
    }

    public function destroy(Models $event)
    {
        $event->delete();
        $this->alert('success', 'Event Berhasil Dihapus');
        $this->resetFields('data');
    }


    public function render()
    {

        $events = Models::latest()->get();
        return view('livewire.admin.event', compact([
            'events'
        ]))->layout('layouts.admin');
    }
}
