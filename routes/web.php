<?php

use App\Http\Controllers\CreatorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/reset', function () {
    Artisan::call('db:wipe');
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
    return redirect('/');
});
Route::get('/c/{command}', function ($command) {
    Artisan::call($command);
});

Route::view('/','welcome')->name('welcome');

Route::get('/creator/messages',[CreatorController::class,'messages'])->name('creator.messages');
Route::get('/creator/videos',[CreatorController::class,'videos'])->name('creator.videos');
Route::get('/creator/calendar',[CreatorController::class,'calendar'])->name('creator.calendar');
Route::get('/creator/tasks',[CreatorController::class,'tasks'])->name('creator.tasks');
Route::get('/creator/chart',[CreatorController::class,'chart'])->name('creator.chart');
Route::get('/creator/settings',[CreatorController::class,'settings'])->name('creator.settings');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
