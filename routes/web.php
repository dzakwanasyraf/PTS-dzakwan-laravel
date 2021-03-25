<?php

use Illuminate\Support\Facades\Route;
$url = "App\Http\Controllers";
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



//

Route::get('home', $url . '\KaryawanController@index');
Route::get('addKaryawan', $url . '\KaryawanController@addData');
Route::post('saveKaryawan', $url . '\KaryawanController@saveData');
Route::get('editKaryawan/{id}', $url . '\KaryawanController@editData');
Route::post('updateKaryawan', $url . '\KaryawanController@updateData');
Route::get('deleteKaryawan/{id}', $url . '\KaryawanController@deleteData');



//export
Route::get('Karyawan/export/xlsx', $url . '\KaryawanController@exportXL');
Route::get('Karyawan/export/csv', $url . '\KaryawanController@exportCSV');
Route::get('Karyawan/export/pdf', $url . '\KaryawanController@exportPDF');



//import
Route::get('upload', $url . '\KaryawanController@upload');
Route::post('karyawan/upload/data', $url . '\KaryawanController@uploadData');