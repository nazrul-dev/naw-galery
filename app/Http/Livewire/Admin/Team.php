<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Base;
use App\Models\Team as ModelsTeam;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Team extends Base
{
    use WithFileUploads;

    public $name,$avatar,$jabatan, $avatar_old, $Ids;
    public $mode = 'data';

    public function changeMode($mode)
    {
        $this->resetFields($mode);

    }

    function resetFields($mode)
    {

        $this->mode = $mode;
        $this->avatar_old = '';
        $this->name = '';
        $this->avatar = '';
        $this->jabatan = '';
        $this->Ids = '';
    }

    public function edit($id)
    {

        $team = ModelsTeam::find($id);
        if($team){
            $this->resetFields('edit');
            $this->avatar = '';
            $this->name = $team->name;
            $this->avatar_old = $team->pathimages;
            $this->jabatan = $team->jabatan;
            $this->Ids = $team->id;
        }

    }

    public function update()
    {
        $team = ModelsTeam::find($this->Ids);
        if ($team) {
            if ($this->avatar) {
                Storage::disk('public')->delete($team->avatar);
                $path = $this->avatar->store('teams', 'public');
            }
            try {
                $team->update([
                    'avatar'    => $path ?? $team->avatar,
                    'name'      => $this->name,
                    'jabatan'   => $this->jabatan,
                ]);
                $this->alert('success', 'Team Berhasil Diupdate');
                $this->mode = 'data';
            } catch (QueryException $e) {
                $this->alert('error', $e->getMessage());
            }
        }else{
            $this->alert('error', 'Team Tidak Ditemukan');
        }
    }


    public function store()
    {
        $this->validate([
            'avatar'    => 'required|image|mimes:jpg,png,jpeg,gif',
            'name'      => 'required',
            'jabatan'   => 'required',
        ]);

        $path = $this->avatar->store('teams', 'public');

        ModelsTeam::create([
            'avatar'    => $path,
            'name'      => $this->name,
            'jabatan'   => $this->jabatan,
        ]);

        $this->alert('success', 'Team Berhasil Diupload');
        $this->resetFields('data');
    }

    public function destroy(ModelsTeam $team){
        Storage::disk('public')->delete($team->path);
        $team->delete();
        $this->alert('success', 'Gambar Berhasil Dihapus');
    }


    public function render()
    {

        $teams = ModelsTeam::latest()->get();
        return view('livewire.admin.team', compact([
            'teams'
        ]))->layout('layouts.admin');
    }
}
