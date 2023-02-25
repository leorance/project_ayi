<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnameController;
use App\Http\Controllers\TalentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\ClassController;
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

Route::get('get-uname', [UnameController::class, 'getList']);
// Kelas A
// Kelas B
// Kelas C

Route::get('b', function () {
    return view("nonlogin.index");
});

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');


// cek, udah login belom?
Route::group(['middleware' => 'auth'], function () {
    // Authentication Routes...
    // General Setting

    // USER
    Route::get('users', [UnameController::class, 'index'])->name('users.index');
    Route::get('users-api', [UnameController::class, 'getAllUsers'])->name('getAllUsers');
    Route::get('users/edit/{id}', [UnameController::class, 'show']);
    Route::get('users/add', [UnameController::class, 'show']);
    Route::post('users/edit/{id}', [UnameController::class, 'edit']);

    // TALENT
    Route::get('talent', [TalentController::class, 'index'])->name('talent.index');
    Route::get('talent-api', [TalentController::class, 'getAllTalents'])->name('getAllTalents');
    Route::get('talent/edit/{id}', [TalentController::class, 'show']);
    Route::post('talent/edit/{id}', [TalentController::class, 'edit']);

    // PELAYANAN
    Route::get('pelayanan', [PelayananController::class, 'index'])->name('pelayananIndex');
    Route::get('pelayanan/add', [PelayananController::class, 'addForm'])->name("formPelayanan");
    Route::post('pelayanan/add', [PelayananController::class, 'store'])->name('storePelayanan');

    Route::get('pelayanan/kelasa', [PelayananController::class, 'kelasa']);
    Route::get('/', [PelayananController::class, 'idx'])->name("dashboard");

    // CLASS
});
