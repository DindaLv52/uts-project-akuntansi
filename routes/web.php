<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DjurnalController;
use App\Http\Controllers\HjurnalController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\PerkiraanController;
use App\Http\Controllers\TabelAkuntansiHistoryBackupController;
use App\Http\Controllers\TabelAkuntansiHistoryTutupBukuController;
use App\Http\Controllers\TabelAkuntansiJurnalMasukController;
use App\Http\Controllers\TabelAkuntansiJurnalUmumController;
use App\Http\Controllers\TabelAkuntansiMasterController;
use App\Http\Controllers\TabelAkuntansiTransaksiController;
use App\Http\Controllers\TabelIndukUserController;
use App\Http\Controllers\TPeriodeController;
use App\Http\Controllers\TPerkiraanController;
use App\Http\Controllers\TUserController;
use App\Models\TabelAkuntansiJurnalKeluar;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});




Route::resource("djurnal", DjurnalController::class);
Route::resource("hjurnal", HjurnalController::class);
Route::resource("kelompok", KelompokController::class);
Route::resource("perkiraan", PerkiraanController::class);

Route::resource("tabelakuntansihistorybackup", TabelAkuntansiHistoryBackupController::class);
Route::resource("tabelakuntansihistorytutupbuku", TabelAkuntansiHistoryTutupBukuController::class);
Route::resource('tabelakuntansijurnalkeluar', TabelAkuntansiJurnalKeluar::class);
Route::resource('tabelakuntansijurnalmasuk', TabelAkuntansiJurnalMasukController::class);
Route::resource('tabelakuntansijurnalumum', TabelAkuntansiJurnalUmumController::class);
Route::resource('tabelakuntansimaster', TabelAkuntansiMasterController::class);
Route::resource('tabelakuntansitransaksi', TabelAkuntansiTransaksiController::class);

Route::resource('tperiode', TPeriodeController::class);
Route::resource('tperkiraan', TPerkiraanController::class);
Route::resource('tabelindukuser', TabelIndukUserController::class);
Route::resource('tuser', TUserController::class);

Route::get('/', function () {
    return view('home');
});