<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPlaceController;

Route::get('/', [PlaceController::class, 'home']);

Route::get('/places', [PlaceController::class, 'index']);
Route::get('/places/search', [PlaceController::class, 'search']);
Route::get('/places/{id}', [PlaceController::class, 'show']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function () {
    if (!session('isLogin')) {
        return redirect('/login');
    }

    return view('dashboard');
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

Route::get('/admin/places', [AdminPlaceController::class, 'index']);
Route::get('/admin/places/create', [AdminPlaceController::class, 'create']);
Route::post('/admin/places/store', [AdminPlaceController::class, 'store']);
Route::get('/admin/places/edit/{id}', [AdminPlaceController::class, 'edit']);
Route::post('/admin/places/update/{id}', [AdminPlaceController::class, 'update']);
Route::get('/admin/places/delete/{id}', [AdminPlaceController::class, 'delete']);

Route::get('/admin/users', [AdminController::class, 'users']);