<?php

use App\Http\Controllers\DjurnalController;
use App\Http\Controllers\HjurnalController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\MigrationController;
use App\Http\Controllers\PerkiraanController;
use App\Http\Controllers\AnotherTableController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TPerkiraanController;
use App\Http\Controllers\TPeriodeController;
use App\Http\Controllers\TUserController;
use App\Http\Controllers\TabelIndukUserController;

use App\Http\Controllers\TabelAkuntansiHistoryBackupController;
use App\Http\Controllers\TabelAkuntansiHistoryTutupBukuController;
use App\Http\Controllers\TabelAkuntansiJurnalKeluarController;
use App\Http\Controllers\TabelAkuntansiJurnalMasukController;
use App\Http\Controllers\TabelAkuntansiJurnalUmumController;
use App\Http\Controllers\TabelAkuntansiMasterController;
use App\Http\Controllers\TabelAkuntansiTransaksiController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::resource('dashboard', DashboardController::class);
Route::resource('djurnal', DjurnalController::class);
Route::resource('hjurnal', HjurnalController::class);
Route::resource('kelompok', KelompokController::class);
Route::resource('migration', MigrationController::class);
Route::resource('perkiraan', PerkiraanController::class);
Route::resource('users', TUserController::class);
Route::resource('tperiode', TPeriodeController::class);
Route::resource('tperkiraan', TPerkiraanController::class);
Route::resource('tabelindukuser', TabelIndukUserController::class);

Route::resource('tabelakuntansihistorybackup', TabelAkuntansiHistoryBackupController::class);
Route::resource('tabelakuntansihistorytutupbuku', TabelAkuntansiHistoryTutupBukuController::class);
Route::resource('tabelakuntansijurnalkeluar', TabelAkuntansiJurnalKeluarController::class);
Route::resource('tabelakuntansijurnalmasuk', TabelAkuntansiJurnalMasukController::class);
Route::resource('tabelakuntansijurnalumum', TabelAkuntansiJurnalUmumController::class);
Route::resource('tabelakuntansimaster', TabelAkuntansiMasterController::class);
Route::resource('tabelakuntansitransaksi', TabelAkuntansiTransaksiController::class);


Route::get('/another-table', [AnotherTableController::class, 'index'])->name('anotherTable.index');

Route::get('/tperkiraan', [TPerkiraanController::class, 'index'])->name('tperkiraan.index');
Route::post('/tperkiraan', [TPerkiraanController::class, 'store'])->name('tperkiraan.store');
Route::get('/tperkiraan/create', [TPerkiraanController::class, 'create'])->name('tperkiraan.create');











