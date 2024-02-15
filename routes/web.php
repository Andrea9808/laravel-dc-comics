<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\comicController;

//index
Route::get('/', [comicController::class, 'index'])
    -> name('comic.index');

//create
Route::get('/comic', [comicController::class, 'create'])
    -> name('comic.create');

//store
Route::post('/comic',[comicController::class, 'store'])
    -> name('comic.store');

//show
Route::get('/comic/{id}', [ComicController::class, 'show'])
    -> name('comic.show');
