<?php

use App\Http\Controllers\Admin_Controller;
use App\Http\Controllers\DellymanController;
use GuzzleHttp\Middleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DellymanController::class, 'homePage']);

Route::get('/how_it_works', [DellymanController::class, 'howItWorksPage']);

Route::match(['get', 'post'], '/contact_us', [Admin_Controller::class, 'contactForm']);

Route::match(['get', 'post'], '/register', [DellymanController::class, 'registerPage']);

Route::get('/faq', [DellymanController::class, 'faqPage'])->middleware('auth');

Route::match(['get', 'post'], '/dashboard', [DellymanController::class, 'showDashboard'])->middleware('auth');

// Route::match(['get'], '/login', [DellymanController::class, 'adminLoginCheck']);

Route::match(['get', 'post'], '/login', [DellymanController::class, 'adminLogin'])->name('login');//->middleware('adminpassword');

Route::match(['post'], '/addNew', [Admin_Controller::class, 'addNew']);

Route::get('/dashfaq', [DellymanController::class, 'dashfq']);

Route::get('/cont', [DellymanController::class, 'dashcont']);

Route::match(['get', 'post'], '/confirm', [DellymanController::class, 'conf']);



