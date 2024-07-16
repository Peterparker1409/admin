<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
//? CRUD Role
Route::get('pages/role', [RoleController::class, 'list']);

Route::get('pages/role/add', [RoleController::class, 'add']);
Route::post('pages/role/add', [RoleController::class, 'insert']);

Route::get('pages/role/edit/{id}', [RoleController::class, 'add']);
Route::post('pages/role/edit/{id}', [RoleController::class, 'insert']);

Route::get('pages/role/delete/{id}', [RoleController::class, 'delete']);
//? ---------------------------------------------------------------------

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';