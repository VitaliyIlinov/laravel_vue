<?php

use App\Http\Controllers\Admin\CustomerController;
use Illuminate\Routing\Router;
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

Route::prefix('customers')->group(function (Router $router) {
    $router->get('/', [CustomerController::class,'index'])->name('customer_list');
});
