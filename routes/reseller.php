<?php

use App\Http\Livewire\Reseller\{Account, Dashboard, Downlines, Ticket};
use Illuminate\Support\Facades\Route;

Route::prefix('reseller')->name('reseller.')->group(function () {

    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
        Route::get('/downlines/{status?}', Downlines::class)->name('downlines');
        Route::get('/tickets',Ticket::class)->name('tickets');
        Route::get('/account', Account::class)->name('account');
    });
});
