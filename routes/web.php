<?php

use App\Http\Controllers\adminviewscontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\viewscontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//normal user said
Route::get('/', function () {
    return view('welcome');
})->name('landingpage');

Route::get('/aboute',[viewscontroller::class,'index1'])->name('aboutpage');
Route::get('/service',[viewscontroller::class,'index2'])->name('service');
Route::get('/project',[viewscontroller::class,'index3'])->name('project');
Route::get('/feature',[viewscontroller::class,'index4'])->name('feature');
Route::get('/freeqoute',[viewscontroller::class,'index5'])->name('freeqoute');
Route::get('/ourteam',[viewscontroller::class,'index6'])->name('ourteam');
Route::get('/testimonial',[viewscontroller::class,'index7'])->name('testimonial');
Route::get('/404',[viewscontroller::class,'index8'])->name('404');

// contactus form

Route::get('/contact', [contactcontroller::class, 'index'])->name('contactus');

Route::get('/dashboard',[adminviewscontroller::class,'index1']);

//front end

