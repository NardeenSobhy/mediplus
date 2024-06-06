<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;

/*Route::get('/', function () {
    return view('test');
});*/

Route::get('/', [Frontpages::class, 'home'])->name('home');