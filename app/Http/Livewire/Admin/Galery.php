<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Base;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Galery extends Base
{
    use WithFileUploads;

    public $mode = 'data';
    public $photos = [];

    public function changeMode($mode)
    {
        unset($this->photos);
        $this->mode = $mode;
    }

    public function removePhoto($id){
        unset($this->photos[$id]);
    }

    public function store()
    {
        $this->validate([
            'photos.*' => 'image|mimes:jpg,png,jpeg,gif',
        ]);

        foreach ($this->photos as $photo) {
            $path = $photo->store('galeries', 'public');
            Media::create([
                'path' => $path,
                'tipe' => 'galery',
            ]);
        }

        $this->alert('success', 'Gambar Berhasil Diupload');
        unset($this->photos);
        $this->mode = 'data';
    }

    public function destroy(Media $media){
        Storage::disk('public')->delete($media->path);
        $media->delete();
        $this->alert('success', 'Gambar Berhasil Dihapus');
    }


    public function render()
    {

        $galeries = Media::where('tipe', 'galery')->latest()->get();
        return view('livewire.admin.galery', compact([
            'galeries'
        ]))->layout('layouts.admin');
    }
}
