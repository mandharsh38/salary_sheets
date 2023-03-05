<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SheetController;
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

Route::get('/', [ SheetController::class, 'index' ] )->name('sheet.ndex');
Route::post('save_sheet', [SheetController::class, 'save'])->name('sheet.save');