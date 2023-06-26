<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserRoleController;
use App\Http\Controllers\Admin\RolePermissionController;
use App\Http\Controllers\Admin\UserPermissionController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware(['auth', 'permission:view admin dashboard'])->name('admin.')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    Route::post('/user/{user}/roles', UserRoleController::class)->name('users.roles.assign');
    Route::post('/users/{user}/permissions', UserPermissionController::class)->name('users.permissions.assign');
    Route::resource('/users', UserController::class);
    Route::post('/roles/{role}/permissions', RolePermissionController::class)->name('roles.permissions.assign');
    Route::resource('/roles', RoleController::class);
});
