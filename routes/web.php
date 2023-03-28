<?php
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

// Route::get('/', function () {
//     return view('welcome');
// });

/* FRONT END */
// Home
Route::get('/', 'App\Http\Controllers\Home@index');
Route::get('home', 'App\Http\Controllers\Home@index');
Route::get('kontak', 'App\Http\Controllers\Home@kontak');
Route::get('keclowokwaru', 'App\Http\Controllers\Home@keclowokwaru');
Route::get('struktur_organisasi', 'App\Http\Controllers\Home@struktur');
Route::get('pelayanan', 'App\Http\Controllers\Home@pelayanan');

// Login
Route::get('login', 'App\Http\Controllers\Login@index');
Route::post('login/check', 'App\Http\Controllers\Login@check');
Route::get('login/lupa', 'App\Http\Controllers\Login@lupa');
Route::get('login/logout', 'App\Http\Controllers\Login@logout');
// Berita
Route::get('berita', 'App\Http\Controllers\Berita@index');
Route::get('berita/read/{par1}', 'App\Http\Controllers\Berita@read');
Route::get('berita/layanan/{par1}', 'App\Http\Controllers\Berita@layanan');
Route::get('berita/terjadi/{par1}', 'App\Http\Controllers\Berita@terjadi');
Route::get('berita/kategori/{par1}', 'App\Http\Controllers\Berita@kategori');

// galeri
Route::get('galeri', 'App\Http\Controllers\Galeri@index');
Route::get('galeri/detail/{par1}', 'App\Http\Controllers\Galeri@detail');


// dasbor
Route::get('admin/dasbor', 'App\Http\Controllers\Admin\Dasbor@index');
Route::get('admin/dasbor/konfigurasi', 'App\Http\Controllers\Admin\Dasbor@konfigurasi');

// user
Route::get('admin/user', 'App\Http\Controllers\Admin\User@index');
Route::post('admin/user/tambah', 'App\Http\Controllers\Admin\User@tambah');
Route::get('admin/user/edit/{par1}', 'App\Http\Controllers\Admin\User@edit');
Route::post('admin/user/proses_edit', 'App\Http\Controllers\Admin\User@proses_edit');
Route::get('admin/user/delete/{par1}', 'App\Http\Controllers\Admin\User@delete');
Route::post('admin/user/proses', 'App\Http\Controllers\Admin\User@proses');


// konfigurasi
Route::get('admin/konfigurasi', 'App\Http\Controllers\Admin\Konfigurasi@index');
Route::get('admin/konfigurasi/logo', 'App\Http\Controllers\Admin\Konfigurasi@logo');
Route::get('admin/konfigurasi/profil', 'App\Http\Controllers\Admin\Konfigurasi@profil');
Route::get('admin/konfigurasi/icon', 'App\Http\Controllers\Admin\Konfigurasi@icon');
Route::get('admin/konfigurasi/gambar', 'App\Http\Controllers\Admin\Konfigurasi@gambar');
Route::post('admin/konfigurasi/proses', 'App\Http\Controllers\Admin\Konfigurasi@proses');
Route::post('admin/konfigurasi/proses_logo', 'App\Http\Controllers\Admin\Konfigurasi@proses_logo');
Route::post('admin/konfigurasi/proses_icon', 'App\Http\Controllers\Admin\Konfigurasi@proses_icon');
Route::post('admin/konfigurasi/proses_gambar', 'App\Http\Controllers\Admin\Konfigurasi@proses_gambar');
Route::post('admin/konfigurasi/proses_profil', 'App\Http\Controllers\Admin\Konfigurasi@proses_profil');
// berita
Route::get('admin/berita', 'App\Http\Controllers\Admin\Berita@index');
Route::get('admin/berita/cari', 'App\Http\Controllers\Admin\Berita@cari');
Route::get('admin/berita/status_berita/{par1}', 'App\Http\Controllers\Admin\Berita@status_berita');
Route::get('admin/berita/kategori/{par1}', 'App\Http\Controllers\Admin\Berita@kategori');
Route::get('admin/berita/jenis_berita/{par1}', 'App\Http\Controllers\Admin\Berita@jenis_berita');
Route::get('admin/berita/author/{par1}', 'App\Http\Controllers\Admin\Berita@author');
Route::get('admin/berita/tambah', 'App\Http\Controllers\Admin\Berita@tambah');
Route::get('admin/berita/edit/{par1}', 'App\Http\Controllers\Admin\Berita@edit');
Route::get('admin/berita/delete/{par1}/{par2}', 'App\Http\Controllers\Admin\Berita@delete');
Route::post('admin/berita/tambah_proses', 'App\Http\Controllers\Admin\Berita@tambah_proses');
Route::post('admin/berita/edit_proses', 'App\Http\Controllers\Admin\Berita@edit_proses');
Route::post('admin/berita/proses', 'App\Http\Controllers\Admin\Berita@proses');
Route::get('admin/berita/add', 'App\Http\Controllers\Admin\Berita@add');

// kategori
Route::get('admin/kategori', 'App\Http\Controllers\Admin\Kategori@index');
Route::post('admin/kategori/tambah', 'App\Http\Controllers\Admin\Kategori@tambah');
Route::post('admin/kategori/edit', 'App\Http\Controllers\Admin\Kategori@edit');
Route::get('admin/kategori/delete/{par1}', 'App\Http\Controllers\Admin\Kategori@delete');
// status
Route::get('admin/status_site', 'App\Http\Controllers\Admin\Status_site@index');
Route::post('admin/status_site/tambah', 'App\Http\Controllers\Admin\Status_site@tambah');
Route::post('admin/status_site/edit', 'App\Http\Controllers\Admin\Status_site@edit');
Route::get('admin/status_site/delete/{par1}', 'App\Http\Controllers\Admin\Status_site@delete');
// status
Route::get('admin/heading', 'App\Http\Controllers\Admin\Heading@index');
Route::post('admin/heading/tambah', 'App\Http\Controllers\Admin\Heading@tambah');
Route::post('admin/heading/edit', 'App\Http\Controllers\Admin\Heading@edit');
Route::get('admin/heading/delete/{par1}', 'App\Http\Controllers\Admin\Heading@delete');

// kategori_galeri
Route::get('admin/kategori_galeri', 'App\Http\Controllers\Admin\Kategori_galeri@index');
Route::post('admin/kategori_galeri/tambah', 'App\Http\Controllers\Admin\Kategori_galeri@tambah');
Route::post('admin/kategori_galeri/edit', 'App\Http\Controllers\Admin\Kategori_galeri@edit');
Route::get('admin/kategori_galeri/delete/{par1}', 'App\Http\Controllers\Admin\Kategori_galeri@delete');
// kategori_staff
Route::get('admin/kategori_staff', 'App\Http\Controllers\Admin\Kategori_staff@index');
Route::post('admin/kategori_staff/tambah', 'App\Http\Controllers\Admin\Kategori_staff@tambah');
Route::post('admin/kategori_staff/edit', 'App\Http\Controllers\Admin\Kategori_staff@edit');
Route::get('admin/kategori_staff/delete/{par1}', 'App\Http\Controllers\Admin\Kategori_staff@delete');

// galeri
Route::get('admin/galeri', 'App\Http\Controllers\Admin\Galeri@index');
Route::get('admin/galeri/cari', 'App\Http\Controllers\Admin\Galeri@cari');
Route::get('admin/galeri/status_galeri/{par1}', 'App\Http\Controllers\Admin\Galeri@status_galeri');
Route::get('admin/galeri/kategori/{par1}', 'App\Http\Controllers\Admin\Galeri@kategori');
Route::get('admin/galeri/tambah', 'App\Http\Controllers\Admin\Galeri@tambah');
Route::get('admin/galeri/edit/{par1}', 'App\Http\Controllers\Admin\Galeri@edit');
Route::get('admin/galeri/delete/{par1}', 'App\Http\Controllers\Admin\Galeri@delete');
Route::post('admin/galeri/tambah_proses', 'App\Http\Controllers\Admin\Galeri@tambah_proses');
Route::post('admin/galeri/edit_proses', 'App\Http\Controllers\Admin\Galeri@edit_proses');
Route::post('admin/galeri/proses', 'App\Http\Controllers\Admin\Galeri@proses');
// staff
Route::get('admin/staff', 'App\Http\Controllers\Admin\Staff@index');
Route::get('admin/staff/cari', 'App\Http\Controllers\Admin\Staff@cari');
Route::get('admin/staff/status_staff/{par1}', 'App\Http\Controllers\Admin\Staff@status_staff');
Route::get('admin/staff/kategori/{par1}', 'App\Http\Controllers\Admin\Staff@kategori');
Route::get('admin/staff/detail/{par1}', 'App\Http\Controllers\Admin\Staff@detail');
Route::get('admin/staff/tambah', 'App\Http\Controllers\Admin\Staff@tambah');
Route::get('admin/staff/edit/{par1}', 'App\Http\Controllers\Admin\Staff@edit');
Route::get('admin/staff/delete/{par1}', 'App\Http\Controllers\Admin\Staff@delete');
Route::post('admin/staff/tambah_proses', 'App\Http\Controllers\Admin\Staff@tambah_proses');
Route::post('admin/staff/edit_proses', 'App\Http\Controllers\Admin\Staff@edit_proses');
Route::post('admin/staff/proses', 'App\Http\Controllers\Admin\Staff@proses');
