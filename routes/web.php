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
    return view('client.home');
});

Route::get('/adminPanel', function(){
    return view('Admin.dashboard');
});
// Artists
Route::controller(\App\Http\Controllers\Admin\ArtistController::class)->group(function(){
    Route::get('/artists', 'index')->name('list.artists');
    Route::post('/artists/store', 'store')->name('store.artists');
    Route::get('/artists/edit/{slug}', 'show')->name('edit.artist');
    Route::patch('/artists/update/{slug}', 'update')->name('update.artist');
    Route::delete('/artists/delete/{slug}', 'destroy')->name('delete.artist');
});
// Styles
Route::controller(\App\Http\Controllers\Admin\StyleController::class)->group(function(){
    Route::get('/styles', 'index')->name('list.styles');
    Route::post('/styles/store', 'store')->name('store.styles');
    Route::get('/styles/edit/{slug}', 'edit')->name('edit.style');
    Route::patch('/styles/update/{slug}', 'update')->name('update.style');
    Route::delete('/styles/delete/{slug}', 'destroy')->name('delete.style');
});


