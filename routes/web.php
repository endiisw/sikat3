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

Route::prefix('admin')->middleware(['auth', 'role:Developer'])->name('admin.')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    // Route::post('/user/{user}/roles', UserRoleController::class)->name('users.roles.assign');
    // Route::post('/users/{user}/permissions', UserPermissionController::class)->name('users.permissions.assign');
    // Route::post('/roles/{role}/permissions', RolePermissionController::class)->name('roles.permissions.assign');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/{id}/update', [UserController::class, 'update'])->name('users.update');
    Route::post('/{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    //Route Role Resource
    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/store', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::post('/{id}/update', [RoleController::class, 'update'])->name('roles.update');
    Route::post('/{id}/destroy', [RoleController::class, 'destroy'])->name('roles.destroy');
});
