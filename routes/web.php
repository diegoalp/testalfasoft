<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('contact.home');
Route::get('/contacts/{id}',[App\Http\Controllers\HomeController::class, 'showContact'])->name('contact.show');

Auth::routes();

Route::get('/contato/novo', [App\Http\Controllers\HomeController::class, 'newContact'])->name('contact.new')->middleware(['auth']);

Route::resource('contacts', App\Http\Controllers\ContactController::class)->middleware(['auth']);
