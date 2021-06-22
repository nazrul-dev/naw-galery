<?php


use App\Http\Livewire\{Dashboard,Galery, Home, Event, Video,Team,Reward, Mydownline, Testimoni};
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
Route::get('/cookie', function () {
    return Cookie::get('referral');
});

Route::get('/', Home::class)->name('home');
Route::get('/galeries', Galery::class)->name('galeries');
Route::get('/rewards', Reward::class)->name('rewards');
Route::get('/videos', Video::class)->name('videos');
Route::get('/testimonies', Testimoni::class)->name('testimonies');
Route::get('/events', Event::class)->name('events');
Route::get('/teams', Team::class)->name('teams');


// Route::middleware(['auth'])->group(function () {
//     Route::get('dashboard', Dashboard::class)->name('dashboard');
//     Route::get('profil/{user:username}', Mydownline::class)->name('mydownline');
// });



require_once __DIR__.'/auth.php';
require_once __DIR__.'/reseller.php';
require_once __DIR__.'/admin.php';
