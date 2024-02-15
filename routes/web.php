<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\comicController;

//index
Route::get('/', [comicController::class, 'index'])
    -> name('comic.index');

//show
Route::get('/comic/{id}', [ComicController::class, 'show'])
    -> name('comic.show');
