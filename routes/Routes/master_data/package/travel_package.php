<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Package\TravelPackageController;


Route::get('travel-package',[TravelPackageController::class, 'index']);