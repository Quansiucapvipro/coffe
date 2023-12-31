<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

Route::get("/",[HomeController::class, "index"]);



Route::get("/users",[AdminController::class, "users"]);

Route::get("/deleteproduct/{id}",[AdminController::class, "deleteproduct"]);


Route::get("/Products",[AdminController::class, "Products"]);

Route::post("/uploadproducts",[AdminController::class, "upload"]);

Route::get("/deleteuser/{id}",[AdminController::class, "deleteuser"]);

Route::get("/updateview/{id}",[AdminController::class, "updateview"]);

Route::post("/update/{id}",[AdminController::class, "update"]);



Route::get("/redirects",[HomeController::class, "redirects"]);

Route::post("/reservation",[AdminController::class, "reservation"]);

Route::get("/viewreservation",[AdminController::class, "viewreservation"]);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   
Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
