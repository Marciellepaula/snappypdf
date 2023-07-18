<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\WelcomeController;
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


Route::get('/send-welcome-email', [WelcomeController::class, 'sendWelcomeEmail']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('graphs', [PdfController::class, 'graphs']);
Route::get('graphPdf', [PdfController::class, 'graphPdf']);
