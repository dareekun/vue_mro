<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\HomeController;

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


Route::get('/test', [HomeController::class, 'test']);

Route::get('/', function () { return redirect(route('dashboard'));});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/supplier', [HomeController::class, 'supplier'])->name('supplier');
Route::get('/request', [HomeController::class, 'request'])->name('request');
Route::get('/invoice', [HomeController::class, 'invoice'])->name('invoice');
Route::get('/inventory', [HomeController::class, 'inventory'])->name('inventory');
Route::get('/options', [HomeController::class, 'options'])->name('options');
