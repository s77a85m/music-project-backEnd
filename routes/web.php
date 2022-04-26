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
// Dashboard
Route::controller(\App\Http\Controllers\Admin\DashbordController::class)->group(function (){
    Route::get('/adminPanel', 'index')->name('dashboard');
});
// Downloads
Route::controller(\App\Http\Controllers\Admin\DownloadController::class)->group(function (){
    Route::post('/download', 'addCount')->name('count.download');
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
// Albums
Route::controller(\App\Http\Controllers\Admin\AlbumController::class)->group(function(){
    Route::get('/albums', 'index')->name('list.albums');
    Route::post('/albums/store', 'store')->name('store.album');
    Route::get('/albums/edit/{slug}', 'show')->name('edit.album');
    Route::patch('/albums/update/{slug}', 'update')->name('update.album');
    Route::delete('/albums/delete/{slug}', 'destroy')->name('delete.album');
});
// Musics
Route::controller(\App\Http\Controllers\Admin\MusicController::class)->group(function(){
    Route::get('/musics', 'index')->name('list.musics');
    Route::post('/musics/store', 'store')->name('store.music');
    Route::get('/musics/edit/{slug}', 'show')->name('edit.music');
    Route::patch('/musics/update/{slug}', 'update')->name('update.music');
    Route::delete('/musics/delete/{slug}', 'destroy')->name('delete.music');
});
// Users
Route::controller(\App\Http\Controllers\Admin\UserController::class)->group(function (){
    Route::get('/users', 'index')->name('list.users');
    Route::get('/users/edit/{slug}', 'show')->name('edit.user');
    Route::patch('/users/update/{slug}', 'update')->name('update.user');
    Route::delete('/user/delete/{slug}', 'destroy')->name('delete.user');
});
// Comments
Route::controller(\App\Http\Controllers\Admin\CommentController::class)->group(function (){
    Route::get('/comments', 'index')->name('list.comments');
    Route::post('/comments/{slug}', 'store')->name('create.comment');
    Route::delete('/comments/delete/{comment}', 'destroy')->name('delete.comment');
});
// Roles
Route::controller(\App\Http\Controllers\Admin\RoleController::class)->group(function (){
    Route::get('/roles', 'index')->name('list.roles');
    Route::post('/roles/store', 'store')->name('create.role');
    Route::get('/roles/edit/{slug}', 'show')->name('edit.role');
    Route::patch('/roles/{slug}', 'update')->name('update.role');
    Route::delete('/roles/delete/{slug}', 'destroy')->name('delete.role');
});
// Permissions
Route::controller(\App\Http\Controllers\Admin\PermissionController::class)->group(function (){
    Route::get('/permissions', 'index')->name('list.permissions');
    Route::post('/permissions/store', 'store')->name('create.permission');
    Route::get('/permissions/edit/{slug}', 'show')->name('edit.permission');
    Route::patch('/permissions/{slug}', 'update')->name('update.permission');
    Route::delete('/permissions/delete/{slug}', 'destroy')->name('delete.permission');
});

//..............client

// Home
Route::controller(\App\Http\Controllers\Client\HomeController::class)->group(function (){
    Route::get('/', 'index')->name('home');
});
// Single Music
Route::controller(\App\Http\Controllers\Client\SingleMusicController::class)->group(function (){
    Route::get('/music/{slug}', 'show')->name('single.music');
});
// Register
Route::controller(\App\Http\Controllers\Client\RegisterController::class)->group(function (){
    Route::post('/register', 'store')->name('register');
    Route::delete('/logout', 'destroy')->name('logout');
    Route::post('/login', 'create')->name('login');
});
// Search
Route::controller(\App\Http\Controllers\Client\SearchController::class)->group(function (){
    Route::get('/search', 'index')->name('search');
});
// Beloved
Route::controller(\App\Http\Controllers\Client\BelovedController::class)->group(function (){
    Route::post('/beloved/{slug}', 'store')->name('beloved');
});
// Collect Email
Route::controller(\App\Http\Controllers\Client\ColectEmailController::class)->group(function(){
    Route::post('/submitEmail', 'store')->name('submit.email');
});
// All music artist
Route::controller(\App\Http\Controllers\Client\AllMusicController::class)->group(function (){
    Route::get('/all_musics/{slug}', 'index')->name('all.musics');
});