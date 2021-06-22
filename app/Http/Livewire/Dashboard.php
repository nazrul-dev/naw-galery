<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Database\QueryException;
use Livewire\Component;

class Dashboard extends Component
{

    public $selectReseler = true;

    public function  activatedAccount($id)
    {
        $user = User::find($id);
        if ($user) {
            try {

                $user->update(['active' => 1]);
                $this->alert('info', 'Kesalahan', [
                    'position' =>  'center',
                    'timer' =>  3000,
                    'toast' =>  true,
                    'text' =>  'Berhasil Mengaktifkan Akun',
                    'confirmButtonText' =>  'Ok',
                    'cancelButtonText' =>  'Cancel',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  false,
                ]);
            } catch (QueryException $th) {
                $this->alert('info', 'Kesalahan', [
                    'position' =>  'center',
                    'timer' =>  3000,
                    'toast' =>  true,
                    'text' =>  'Referal Yang Anda Masukan Tidak Ditemukan',
                    'confirmButtonText' =>  'Ok',
                    'cancelButtonText' =>  'Cancel',
                    'showCancelButton' =>  false,
                    'showConfirmButton' =>  false,
                ]);
            }
        }

        return;
    }

    public function deletedAccount($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }

        return redirect()->to('dashboard');
    }

    function changeReseler($value)
    {

        $this->selectReseler = $value;
    }


    public function render()
    {
        $user = User::with(['profil', 'downlines'])->find(auth()->id());
        $downliness = User::where(function ($q) use($user) {
            $q->where('referal', $user->username);
            $q->where('id', '!=', $user->id);
            $q->where('active', $this->selectReseler);
        })->orderBy('id', 'DESC')->get();
        return view('livewire.dashboard', compact([
            'user',
            'downliness'
        ]));
    }
}
