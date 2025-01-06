<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/helicopters');
Route::resource('helicopters', BookController::class);
