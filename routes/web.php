<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PDFController;
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

Route::get('merge-pdf', [PDFController::class, 'index']);
Route::post('merge-pdf', [PDFController::class, 'store'])->name('merge.pdf.post');