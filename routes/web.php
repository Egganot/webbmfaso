<?php

use App\Http\Controllers\ManageUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menus.sales.salesIndex');
})->name('sales');

Route::get('/analytics', function () {
    return view('menus.analytics.analyticsIndex');
})->name('analytics');

Route::resource('/manageUser', ManageUserController::class)->names('manageUser');

