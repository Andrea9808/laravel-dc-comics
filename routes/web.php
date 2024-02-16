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

//destroy
Route::delete('/comic/{id}', [comicController::class, 'destroy'])
    ->name('comic.destroy');

//show
Route::get('/comic/{id}', [comicController::class, 'show'])
    -> name('comic.show');


