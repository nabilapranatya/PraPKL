<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffBranchController;

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

Route::get('/welcome', function () {
    echo '<center>';
    echo '<u>Hello Semuanya, apakabar?</u><br>';
    echo '<u>Pada kali ini kita sedang belajar route basic</u>';
    echo '</center>';
    
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pages1', function () {
    return view('pages1.index');
});

Route::get('/pages2', function () {
    return view('pages2.index');
});

Route::get('/pages3', function () {
    return view('pages3.index');
});

Route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{hobby}', function ($nama,$umur,$alamat,$jk,$hobby) {
    return view('pages1.biodata', compact('nama','umur','alamat','jk','hobby'));
});

Route::get('/bangunan/{material?}/{material2?}', function ($material = 'Tidak Tersedia',$material2 = 'Tidak Tersedia') {
    return view('pages1.bangunan', compact('material','material2'));
});

Route::get('/intro/{nama}/{alamat}/{umur}',[PengenalanController::class, 'intro']);

Route::get('/pengenalan2',[App\Http\Controllers\PengenalanController::class, 'siswa']);

Route::get('/menu',[LatihanController::class, 'menu']);

Route::get('/dosen',[LatihanController::class, 'dosen']);

Route::get('/tv',[App\Http\Controllers\LatihanController::class, 'tv']);

Route::get('/belanja',[LatihanController::class, 'belanja']);

Route::get('/post',[PostController::class, 'index']);

Route::get('/StaffBranch',[StaffBranchController::class, 'index']);