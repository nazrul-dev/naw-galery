<?php

namespace App\Http\Livewire\Admin;

use App\Models\Packet as Models;
use App\Http\Livewire\Base;

class Paket extends Base
{
    public $inputs = [];
    public $i = 1;
    public $mode = 'data';
    public $name, $keunggulan = [], $price, $Ids;

    public function addInput($i)
    {
        $i = $i + 1;
        $this->i = $i;
        if ($this->mode == 'edit') {
            array_push($this->keunggulan, '');
        } else {
            array_push($this->inputs, $i);
        }
    }

    public function delInput($i)
    {

        if ($this->mode == 'edit') {
            unset($this->keunggulan[$i]);
            $this->i = array_key_last($this->keunggulan);
        } else {
            unset($this->inputs[$i]);
        }
    }

    function resetFields($mode)
    {
        $this->mode = $mode;
        $this->name = '';
        $this->price = '';
        $this->Ids = '';
        $this->i = 1;
        $this->keunggulan = [];
        $this->inputs = [];
    }


    public function render()
    {
        $pakets = Models::get();
        return view('livewire.admin.paket', compact([
            'pakets'
        ]))->layout('layouts.admin');
    }

    public function changeMode($mode)
    {
        $this->resetFields($mode);
    }


    public function edit($id)
    {

        $this->resetFields('edit');
        $paket = Models::find($id);
        $this->name = $paket->name;
        $this->Ids = $paket->id;
        $this->price = $paket->price;

        $keunggulan = json_decode($paket->keunggulan, true);

        foreach ($keunggulan as $i => $val) {
            $this->keunggulan[$i] = $val;
        }

        $this->i = array_key_last($keunggulan);
    }

    public function update()
    {

        $models = Models::find($this->Ids);

        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'keunggulan.*' => 'required',
        ]);

        $models->update([
            'name' => $this->name,
            'price' => $this->price,
            'keunggulan' => json_encode($this->keunggulan)
        ]);


        $this->alert('success', 'Paket Berhasil Diubah');
        $this->resetFields('data');
    }

    public function store()
    {

        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'keunggulan.*' => 'required',
        ]);

        Models::create([
            'name' => $this->name,
            'price' => $this->price,
            'keunggulan' => json_encode($this->keunggulan)
        ]);

        $this->alert('success', 'Paket Berhasil Diupload');
        $this->resetFields('data');
    }

    public function destroy(Models $paket)
    {
        $paket->delete();
        $this->alert('success', 'Paket Berhasil Dihapus');
    }
}
