<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

use App\Http\Controllers\WebhookController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/home', function (Request $request) {
//     return view('welcome');
// })->name('home');


Route::get('/projects',[ProjectController::class, 'index'])->name('projects');

// Route::get('/projects', function(Request $request){
//     return view('partials.project');
// })->name('projects');

// Route::get('/contact', [ContactController::class, 'sendMessage'])->name('contact');


Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');

Route::get('/contact', function(Request $request){
    return view('partials.contact');

})->name('contact');

// Routes::resource('jobs');