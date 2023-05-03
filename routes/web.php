<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Inicio;
use App\Http\Livewire\Edificios;
use App\Http\Livewire\Servicios;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio',Inicio::class);
Route::get('/edificios',Edificios::class)->name('edificios');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   Route::get('/dashboard', inicio::class)->name('dashboard');
   Route::get('/servicios', servicios::class)->name('servicios');
});
