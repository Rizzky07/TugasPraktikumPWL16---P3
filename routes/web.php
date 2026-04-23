<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BukuController; 

Route::get('/', function () {
    return view('welcome');
});

// 🔥 Route Profile
Route::get('/profile', function () {
    $users = DB::table('users')->get();
    return view('profile', compact('users'));
});

Route::get('/books', [BukuController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BukuController::class, 'show'])->name('books.show');