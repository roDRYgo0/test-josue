<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\DeviceResource;
use App\Http\Controllers\UserController;

Route::apiResource('users', UserController::class);

Route::get('users/{user}/devices/{device:id}', [DeviceController::class, 'show']);
Route::apiResource('users/{user}/devices', DeviceController::class)->except('show');
