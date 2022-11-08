<?php

use Illuminate\Support\Facades\Route;
use Laymont\Shicontstand\Http\Controllers\ShicontstandController;

Route::group(['prefix' => 'scs', 'middleware' => 'web'], function () {
    Route::get('get_type_group', [ShicontstandController::class, 'getIsoTypeGroup']);
    Route::get('get_size_type', [ShicontstandController::class, 'getIsoSizeType']);
    Route::get('get_length_code', [ShicontstandController::class, 'getIsoLengthCode']);
    Route::get('get_size_code', [ShicontstandController::class, 'getIsoSizeCode']);
    Route::get('get_size_code', [ShicontstandController::class, 'getIsoSizeCode']);
    Route::get('get_type_code', [ShicontstandController::class, 'getIsoTypeCode']);
});
