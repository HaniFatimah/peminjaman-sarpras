<?php

use App\PeminjamanBarangGuru;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('register_user', 'RegisterUserController');
Route::resource('user', 'UserController');

//pdf preview peminjaman siswa
Route::get('/peminjamanBarangSiswapdf', 'PDFController@peminjamanBarangSiswapdf')->name('peminjamanBarangSiswapdf');
Route::get('/peminjamanKunciSiswapdf', 'PDFController@peminjamanKunciSiswapdf')->name('peminjamanKunciSiswapdf');

//pdf preview peminjaman guru
Route::get('/peminjamanBarangGurupdf', 'PDFController@peminjamanBarangGurupdf')->name('peminjamanBarangGurupdf');
Route::get('/peminjamanKunciGurupdf', 'PDFController@peminjamanKunciGurupdf')->name('peminjamanKunciGurupdf');

//excel preview peminjaman siswa
Route::get('/peminjamanBarangSiswaexcel', 'ExcelController@peminjamanBarangSiswaexcel')->name('peminjamanBarangSiswaexcel');
Route::get('/peminjamanKunciSiswaexcel', 'ExcelController@peminjamanKunciSiswaexcel')->name('peminjamanKunciSiswaexcel');

//excel preview peminjaman guru
Route::get('/peminjamanBarangGuruexcel', 'ExcelController@peminjamanBarangGuruexcel')->name('peminjamanBarangGuruexcel');
Route::get('/peminjamanKunciGuruexcel', 'ExcelController@peminjamanKunciGuruexcel')->name('peminjamanKunciGuruexcel');

//data master
Route::resource('kategori_barang', 'KategoriBarangController');
Route::resource('kelas_ruang', 'KelasRuangController');
Route::resource('kunci', 'KunciController');
Route::resource('mapel', 'MapelController');
Route::resource('guru', 'GuruController');
Route::resource('barang', 'BarangController');
Route::resource('jabatan', 'JabatanController');

//peminjaman siswa
Route::resource('peminjaman_barang_siswa', 'PeminjamanBarangSiswaController');
Route::resource('peminjaman_kunci_siswa', 'PeminjamanKunciSiswaController');

//peminjaman guru
Route::resource('peminjaman_barang_guru', 'PeminjamanBarangGuruController');
Route::resource('peminjaman_kunci_guru', 'PeminjamanKunciGuruController');

//sort by month peminjaman guru
Route::get('peminjaman_barang_guru_sort_month', 'PeminjamanBarangGuruController@sortByMonth');
Route::get('peminjaman_kunci_guru_sort_month', 'PeminjamanKunciGuruController@sortByMonth');

//sort by month peminjaman siswa
Route::get('peminjaman_barang_siswa_sort_month', 'PeminjamanBarangSiswaController@sortByMonth');
Route::get('peminjaman_kunci_siswa_sort_month', 'PeminjamanKunciSiswaController@sortByMonth');

//sort by year peminjaman guru
Route::get('peminjaman_barang_guru_sort_year', 'PeminjamanBarangGuruController@sortByYear');
Route::get('peminjaman_kunci_guru_sort_year', 'PeminjamanKunciGuruController@sortByYear');

//sort by year peminjaman siswa
Route::get('peminjaman_barang_siswa_sort_year', 'PeminjamanBarangSiswaController@sortByYear');
Route::get('peminjaman_kunci_siswa_sort_year', 'PeminjamanKunciSiswaController@sortByYear');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
