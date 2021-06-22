<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Base;
use App\Models\Media;

class Video extends Base
{
    public $mode = 'data';
    public $path =  '';

    public function changeMode($mode)
    {
        $this->path = '';
        $this->mode = $mode;
    }

    public function store()
    {
        $this->validate([
            'path' => 'required',
        ]);

        Media::create([
            'path' => 'https://www.youtube.com/embed/'.$this->path,
            'tipe' => 'videos',
        ]);

        $this->alert('success', 'Video Berhasil Diupload');
        $this->mode = 'data';
    }

    public function destroy(Media $media){

        $media->delete();
        $this->alert('success', 'Video Berhasil Dihapus');
    }

    public function render()
    {
        $videos = Media::where('tipe', 'videos')->latest()->get();
        return view('livewire.admin.video', compact([
            'videos'
        ]))->layout('layouts.admin');
    }
}
