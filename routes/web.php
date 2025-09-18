<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'index'])->name('public.index');
Route::get('/member/{id}', [PublicController::class, 'showMember'])->name('member.show');
Route::get('/berita/{id}', [PublicController::class, 'showBerita'])->name('berita.show');
Route::post('/comment', [PublicController::class, 'storeComment'])->name('comment.store');
