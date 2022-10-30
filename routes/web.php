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
    return redirect()->route('home');
});

Auth::routes([
    'register' => false
]);

Route::get('/home',function (){
    return 'nothing';
})->middleware('redirect')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
Route::get('dashboard',[\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::resource('vendor',\App\Http\Controllers\VendorsController::class);
Route::resource('location',\App\Http\Controllers\LocationsController::class);
Route::resource('book',\App\Http\Controllers\BooksController::class);
Route::resource('plan',\App\Http\Controllers\PlansController::class);
Route::resource('member',\App\Http\Controllers\MembersController::class);
Route::resource('membership',\App\Http\Controllers\Membershipcontroller::class);
Route::resource('purchases',\App\Http\Controllers\PurchasesController::class);
Route::resource('rented',\App\Http\Controllers\RentedbooksController::class);
Route::resource('sales',\App\Http\Controllers\SalesController::class);
Route::resource('inventory',\App\Http\Controllers\inventory::class);
});
