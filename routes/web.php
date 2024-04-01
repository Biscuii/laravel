<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserList;


// route pour crud user :
Route::get('user/list', [UserList::class, 'show'])->name('user.show');
Route::get('user/list/{id}/edit', [UserList::class,'edit'])->name('user.edit');
Route::post('user/list/{id}/update', [UserList::class,'update'])->name('user.update');
Route::get('user/add', [UserList::class,'add'])->name('user.add');
Route::post('user/check', [UserList::class,'checkAdd'])->name('user.check');
Route::get('user/list/{id}/delete', [UserList::class,'delete'])->name('user.delete');
