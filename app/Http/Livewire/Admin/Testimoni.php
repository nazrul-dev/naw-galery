<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Base;
use App\Models\Media;
use App\Models\Testimoni as ModelsTestimoni;


class Testimoni extends Base
{

    public $mode = 'data';
    public $content = '';
    public $Ids = '';

    public function changeMode($mode)
    {
        $this->mode = $mode;
        $this->content = '';
    }



    public function edit($id)
    {
        $testimoni = ModelsTestimoni::find($id);
        $this->content = $testimoni->content;
        $this->mode = 'edit';
        $this->Ids = $testimoni->id;
    }

    public function update()
    {
        $models = ModelsTestimoni::find($this->Ids);
        $this->validate([
            'content' => 'required',
        ]);

        $models->update([
            'content' => $this->content
        ]);


        $this->alert('success', 'Testimoni Berhasil Diubah');

        $this->content = '';
        $this->Ids = '';
        $this->mode = 'data';
    }

    public function store()
    {
        $this->validate([
            'content' => 'required',
        ]);

        ModelsTestimoni::create([
            'content' => $this->content
        ]);

        $this->alert('success', 'Testimoni Berhasil Diupload');
        $this->start_at = '';
        $this->content = '';
        $this->title = '';
        $this->mode = 'data';
    }

    public function destroy(ModelsTestimoni $testimoni)
    {
        $testimoni->delete();
        $this->alert('success', 'Testimoni Berhasil Dihapus');
    }


    public function render()
    {

        $testimonies = ModelsTestimoni::latest()->get();
        return view('livewire.admin.testimoni', compact([
            'testimonies'
        ]))->layout('layouts.admin');
    }
}
