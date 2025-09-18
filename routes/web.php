<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'index'])->name('public.index');
Route::get('/galeri', [PublicController::class, 'galeri'])->name('galeri.index');
Route::get('/member/{id}', [PublicController::class, 'showMember'])->name('member.show');
Route::get('/berita/{id}', [PublicController::class, 'showBerita'])->name('berita.show');
Route::post('/comment', [PublicController::class, 'storeComment'])->name('comment.store');
Route::post('/comments/{id}/like', [PublicController::class, 'likeComment'])->name('comment.like');
