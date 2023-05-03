<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Users;
use App\Http\Livewire\BuscadorUsers;
use App\Http\Livewire\Department;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/users', Users::class);
    Route::get('/buscador', BuscadorUsers::class);
    Route::get('/departamentos', Department::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
