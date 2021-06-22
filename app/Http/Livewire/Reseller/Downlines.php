<?php

namespace App\Http\Livewire\Reseller;

use App\Http\Livewire\Base;
use App\Models\User;
use Illuminate\Database\QueryException;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;
class Downlines extends Base
{
    public $status;

    public function mount($status = ''){
      
        if($status === 'deactive'){
            $this->status = 0;
        }else{
            $this->status = 1;
        }
        
    }

    public function activated(User $user){
        try {
            $user->update([
                'active' => true
            ]);
            $this->alert('success', 'Berhasil Mengaktifkan Akun Reseller '.$user->name);
        } catch (QueryException $th) {
            $this->alert('error', $th->getMessage());
        }
        
    }

  
  
    public function destroyed(User $user){
        try {
           
            $user->delete();
            $this->alert('success', 'Berhasil Mereject Akun Reseller '.$user->name);
        } catch (QueryException $th) {
            $this->alert('error', $th->getMessage());
        } 
    }

    public function render()
    {
        $referrer = auth()->user()->referrer;
        $referrals = auth()->user()->referrals()->where('active', '=', $this->status)->get();
        $referral = url('register/').'?ref=' . Hashids::encode(auth()->user()->id);
        return view('livewire.reseller.downlines', compact([
            'referrer',
            'referrals',
            'referral'
        ]))->layout('layouts.reseller');
    }
}
