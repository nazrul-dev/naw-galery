<?php

namespace App\Http\Livewire\Reseller;

use App\Http\Livewire\Base;
use Vinkla\Hashids\Facades\Hashids;
class Dashboard extends Base
{


    public function render()
    {
        $user = auth()->user();
        $active = auth()->user()->referrals()->where('active', '=', true)->get();
        $deactive = auth()->user()->referrals()->where('active', '=', false)->get();
        $referral = 'http://127.0.0.1:8000/register/?ref=' . Hashids::encode(auth()->user()->id);
        return view('livewire.reseller.dashboard', compact([
            'active',
            'deactive',
            'referral',
            'user',
        ]))->layout('layouts.reseller');
    }
}
