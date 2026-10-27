<?php

use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\ProdiController;
use App\Models\Matakuliah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/coba', function () {
    return view('coba');
});


// Route::get('/matakuliah', function () {
//     return view('matakuliah.index');
// });

// Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::view('/tables', 'tables')->name('tables');
Route::view('/edit', 'edit')->name('edit');
Route::view('/datatables', 'datatables')->name('datatables');

Route::resource('matakuliah', MatakuliahController::class);
Route::get('report',[MatakuliahController::class, 'report'])->name('matakuliah.report');

Route::resource('prodi', ProdiController::class);

Route::get('/dosen', function () {
    return view('dosen.index');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa.index');
});
