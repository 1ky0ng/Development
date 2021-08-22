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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('glaccounts', \App\Http\Controllers\GLAccountController::class);
Route::resource('genbusspostinggroups', \App\Http\Controllers\GenBusinessPostingGroupController::class);
Route::resource('genprodpostinggroups', \App\Http\Controllers\GenProductPostingGroupController::class);
Route::resource('vatbusspostinggroups', \App\Http\Controllers\VATBusinessPostingGroupController::class);
Route::resource('vatprodpostinggroups', \App\Http\Controllers\VATProductPostingGroupController::class);
Route::resource('whtbusspostinggroups', \App\Http\Controllers\WHTBusinessPostingGroupController::class);
Route::resource('whtprodpostinggroups', \App\Http\Controllers\WHTProductPostingGroupController::class);
