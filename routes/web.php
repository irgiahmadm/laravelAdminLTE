<?php

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

Route::auth();

Route::group(['middleware'=>'auth'],function() {
    
//index kelas
Route::get('/','KelasController@index');
    
//tambahkelas
Route::get('kelas/add','KelasController@create');
Route::post('kelas/add','KelasController@store');

//update kelas
Route::get('kelas/{id}/edit','KelasController@edit');
Route::patch('kelas/{id}/edit','KelasController@update');

//delete kelas
Route::delete('kelas/{id}/delete','KelasController@destroy');

//index siswa
Route::get('siswa','SiswaController@index');

//tambahsiswa
Route::get('siswa/add','SiswaController@create');
Route::post('siswa/add','SiswaController@store');

//udpate siswa
Route::get('siswa/{id}/edit','SiswaController@edit');
Route::patch('siswa/{id}/edit','SiswaController@update');

//delete siswa
Route::delete('siswa/{id}/delete','SiswaController@destroy');


});
