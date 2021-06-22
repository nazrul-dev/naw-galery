<?php


use App\Http\Controllers\Admin\LogoutController;
use App\Http\Livewire\Admin\Auth\Login;

use App\Http\Livewire\Admin\{Galery, Akses, User, Event, Video, Team, Reward,  Testimoni, Paket, Setting};
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/login', Login::class)
        ->name('login');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/galery', Galery::class)->name('galery');
        Route::get('/reward', Reward::class)->name('reward');
        Route::get('/video', Video::class)->name('video');
        Route::get('/testimoni', Testimoni::class)->name('testimoni');
        Route::get('/event', Event::class)->name('event');
        Route::get('/team', Team::class)->name('team');
        Route::get('/paket', Paket::class)->name('paket');
        Route::get('/setting', Setting::class)->name('setting');
        Route::get('/reseller/{status?}', user::class)->name('reseller');
        Route::get('/akses', Akses::class)->name('akses');

        Route::post('logout', LogoutController::class)
            ->name('logout');
    });
});
