<?php
use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\Portfolio;
use App\Http\Controllers\Service;
use App\Http\Controllers\Contact;
use App\Http\Controllers\loginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Home::class, "index"]);
Route::get('/about', [About::class, 'index']);
Route::get('/portfolio', [Portfolio::class, 'index']);
Route::get('/service', [Service::class. 'index']);
Route::get('/contact', [Contact::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
?>

