<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    toastr()->warning('My name is Inigo Montoya. You killed my father, prepare to die!');
    return view('backend.index');
})->name('dashboard');

Route::get('/form_inputs', function () {
    return view('backend.form_inputs');
})->name('form_inputs');

Route::get('/ck_editor', function () {
    return view('backend.ck_editor');
})->name('ckeditor');

Route::get('/uploader', function () {
    return view('backend.uploader');
})->name('uploader');
