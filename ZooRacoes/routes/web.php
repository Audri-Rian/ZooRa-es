<?php

use App\Http\Controllers\BrowseCategoryController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingPageController::class, 'index']);

//Route::get('/LandingPage', [BrowseCategoryController::class, 'alterTable']);