<?php

use Illuminate\Support\Facades\Route;
use Modules\Customer\Http\Controllers\ProvinceController;

Route::prefix('provinces')->group(function () {
    Route::controller(ProvinceController::class)->group(function () {
        Route::get('/list', 'listAll');
    });
});
