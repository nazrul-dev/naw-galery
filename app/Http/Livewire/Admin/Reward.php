<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Base;
use App\Models\Media;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Reward extends Base
{
    use WithFileUploads;
    public $mode = 'data';
    public $image_old = '';
    public $image = '';
    public $content = '';
    public $Ids = '';

    public function changeMode($mode)
    {
        $this->image = '';
        $this->content = '';
        $this->mode = $mode;
    }

    public function removePhoto()
    {
        $this->image = '';
    }

    public function edit($id)
    {
        $media = Media::find($id);
        $this->image = '';
        $this->image_old = $media->pathimages;
        $this->content = $media->content;
        $this->mode = 'edit';
        $this->Ids = $media->id;
    }

    public function update()
    {
        $media = Media::find($this->Ids);
        if ($media) {
            if ($this->image) {
                Storage::disk('public')->delete($media->path);
                $path = $this->image->store('rewards', 'public');
            }
            try {
                $media->update([
                    'path' => $path ?? $media->path,
                    'content' => $this->content
                ]);
                $this->alert('success', 'Reward Berhasil Diupdate');
                $this->mode = 'data';
            } catch (QueryException $e) {
                $this->alert('error', $e->getMessage());
            }
        }else{
            $this->alert('error', 'Reward Tidak Ditemukan');
        }
    }

    public function store()
    {
        $this->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif',
            'content' => 'required'
        ]);

        $path = $this->image->store('rewards', 'public');
        Media::create([
            'path' => $path,
            'tipe' => 'reward',
            'content' => $this->content
        ]);

        $this->alert('success', 'Reward Berhasil Diupload');
        $this->image = '';
        $this->content = '';
        $this->mode = 'data';
    }

    public function destroy(Media $media)
    {
        Storage::disk('public')->delete($media->path);
        $media->delete();
        $this->alert('success', 'Reward Berhasil Dihapus');
    }


    public function render()
    {

        $rewards = Media::where('tipe', 'reward')->latest()->get();
        return view('livewire.admin.reward', compact([
            'rewards'
        ]))->layout('layouts.admin');
    }
}
