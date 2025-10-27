<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pages.dashboard'));
Route::get('/charts', fn() => view('pages.statistik'))->name('pages.statistik');
Route::get('/tables', fn() => view('pages.histori'))->name('pages.history-sensor');
Route::get('/aktivitas', fn() => view('pages.aktivitas'))->name('pages.history-aktivitas');
Route::get('/relay', fn() => view('pages.relay'))->name('pages.relay');
