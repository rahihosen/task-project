<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\PermissionController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/refresh', [AuthController::class, 'refreshToken']);

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('roles', RolesController::class);
    Route::resource('permission', PermissionController::class);
    Route::post('/assign-permission', [RolesController::class, 'assignPermission']);
});

Route::middleware(['auth:api', 'permission:product.store'])->group(function () {
    Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');
});
