<?php

use App\Http\Controllers\LufixController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ScriptController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\TutorialController;

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


<<<<<<< HEAD
//---------------Account Controller--------------//
Route::get('/account', [AccountController::class, 'accountIndex'])->name('account.index');

//---------------Script Controller--------------//
Route::get('/script', [ScriptController::class, 'scriptIndex'])->name('script.index');

//---------------Letter Controller--------------//
Route::get('/letter', [LetterController::class, 'letterIndex'])->name('letter.index');

//---------------Tutorial Controller--------------//
Route::get('/tutorial', [TutorialController::class, 'tutorialIndex'])->name('tutorial.index');
=======
Route::get('/lufus', [LufixController::class, 'index'])->name('lufix.index');
>>>>>>> 62c7084b71c0944af3d3490bf647bc839bed297a
