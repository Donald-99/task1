<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExcelController;
use App\Http\Controllers\CsvFile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('csv_file', [CsvFile::class, 'index']);

//Route::get('csv_file/export', [CsvFile::class, 'csv_export']);

Route::get('csv_file/export', [CsvFile::class, 'csv_export'])->name('export');
Route::post('csv_file/import', [CsvFile::class, 'csv_import'])->name('import');
