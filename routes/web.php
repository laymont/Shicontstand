<?php

use Illuminate\Support\Facades\Route;
use Laymont\Shicontstand\Http\Controllers\ShicontstandController;



Route::resource('type_group',\Laymont\Shicontstand\Http\Controllers\TypeGroupController::class)
    ->only(['index','show']);

//Route::get('get_type_group', [ShicontstandController::class, 'getTypeGroup'])->name('scs.type_group');
//Route::get('get_size_type', [ShicontstandController::class, 'getSizeType'])->name('scs.size_type');
//Route::get('get_length_code', [ShicontstandController::class, 'getLengthCode'])->name('scs.length_code');
//Route::get('get_size_code', [ShicontstandController::class, 'getSizeCode'])->name('scs.size_code');
//Route::get('get_type_code', [ShicontstandController::class, 'getTypeCode'])->name('scs.type_code');
