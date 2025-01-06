<?php

use App\Http\Controllers\HelicopterController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/helicopters');
Route::resource('helicopters', HelicopterController::class);
