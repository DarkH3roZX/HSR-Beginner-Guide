<?php

use App\Http\Controllers\MetaController;
use App\Http\Controllers\WarpController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\MistakesController;
use Illuminate\Support\Facades\Route;

// Laravel View Route
Route::get('/', function () {
    return view('welcome');
});

// Home Route
Route::get('/home', [HomeController::class, 'gotoHome'])->name('home');
Route::post('/home', [HomeController::class, 'gotoHome']);

// Characters Route
Route::get('/characters', [CharactersController::class, 'gotoCharacters'])->name('characters');
Route::post('/characters', [CharactersController::class, 'gotoCharacters']);

// Meta Route
Route::get('/meta-current', [MetaController::class, 'gotoMeta'])->name('meta-current');
Route::post('/meta-current', [MetaController::class, 'gotoMeta']);

Route::get('/meta-past', [MetaController::class, 'gotoMetaPast'])->name('meta-past');
Route::post('/meta-past', [MetaController::class, 'gotoMetaPast']);

Route::get('/meta-future', [MetaController::class, 'gotoMetaFuture'])->name('meta-future');
Route::post('/meta-future', [MetaController::class, 'gotoMetaFuture']);

// Warp Route
Route::get('/warp-current', [WarpController::class, 'gotoWarpCurrent'])->name('warp-current');
Route::post('/warp-current', [WarpController::class, 'gotoWarpCurrent']);

Route::get('/warp-history', [WarpController::class, 'gotoWarpHistory'])->name('warp-history');
Route::post('/warp-history', [WarpController::class, 'searchVersion']);

Route::get('/warp-tips', [WarpController::class, 'gotoWarpTips'])->name('warp-tips');
Route::post('/warp-tips', [WarpController::class, 'gotoWarpTips']);

// Beginner Mistakes Route
Route::get('/mistakes', [MistakesController::class, 'gotoMistakes'])->name('mistakes');
Route::post('/mistakes', [MistakesController::class, 'gotoMistakes']);

// About Us Route
Route::get('/about-us', [AboutUsController::class, 'gotoAboutUs'])->name('about-us');
Route::post('/about-us', [AboutUsController::class, 'gotoAboutUs']);