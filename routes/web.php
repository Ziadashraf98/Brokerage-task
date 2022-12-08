<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

Auth::routes(['register'=>false]);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::controller(CustomerController::class)->group(function()
{
    Route::get('/customer_form' , 'customer_form')->name('customer.form');
    Route::post('/customer_create' , 'customer_create')->name('customer.create');
});

Route::controller(ActionController::class)->group(function()
{
    Route::get('/action_form' , 'action_form')->name('action.form');
    Route::post('/action_create' , 'action_create')->name('action.create');
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
