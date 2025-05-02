<?php

use App\Http\Controllers\DjurnalController;
use App\Http\Controllers\HjurnalController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\MigrationController;
use App\Http\Controllers\PerkiraanController;
use App\Http\Controllers\AnotherTableController;
use App\Http\Controllers\TUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('djurnal', DjurnalController::class);
Route::resource('hjurnal', HjurnalController::class);
Route::resource('kelompok', KelompokController::class);
Route::resource('migration', MigrationController::class);
Route::resource('perkiraan', PerkiraanController::class);
Route::resource('users', TUserController::class);

Route::get('/another-table', [AnotherTableController::class, 'index'])->name('anotherTable.index');










