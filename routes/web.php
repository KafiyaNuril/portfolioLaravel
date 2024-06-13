<?php

use App\Http\Controllers\portofolio;
use Illuminate\Support\Facades\Route;

Route::get('/', [portofolio::class, 'home']);
Route::get('/project', [portofolio::class, 'project']);
Route::get('/contact', [portofolio::class, 'contact']);
