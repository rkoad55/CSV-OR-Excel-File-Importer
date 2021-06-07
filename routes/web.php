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

//ESG Weight
Route::get('esgweight', [App\Http\Controllers\ScriptController::class, 'esgWeightForm'])->name('esg.weight');
Route::post('esgweight', [App\Http\Controllers\ScriptController::class, 'esgweightPost'])->name('esg.weight.post');

//ESG Currency
Route::get('esgcurrency', [App\Http\Controllers\ScriptController::class, 'esgCurrencyForm'])->name('esg.currency');
Route::post('esgcurrency', [App\Http\Controllers\ScriptController::class, 'esgCurrencyPost'])->name('esg.currency.post');

//ESG Code Update
Route::get('esgcodeupdate', [App\Http\Controllers\ScriptController::class, 'esgCodeUpdateForm'])->name('esg.code.update');
Route::post('esgcodeupdate', [App\Http\Controllers\ScriptController::class, 'esgCodeUpdatePost'])->name('esg.code.update.post');

//ESG DATA
Route::get('esgdata', [App\Http\Controllers\ScriptController::class, 'esgDataForm'])->name('esg.data.form');
Route::post('esgdata', [App\Http\Controllers\ScriptController::class, 'esgDataPost'])->name('esg.data.post');

//ESG Companies
Route::get('esgpattren', [App\Http\Controllers\ScriptController::class, 'esgForm'])->name('esg.form');
Route::post('esgpattren', [App\Http\Controllers\ScriptController::class, 'esgPost'])->name('esg.post');

Route::get('getdata', [App\Http\Controllers\ScriptController::class, 'getData'])->name('get.data');
Route::get('commodity', [App\Http\Controllers\ScriptController::class, 'commodityForm'])->name('commodity.form');
Route::post('commodity', [App\Http\Controllers\ScriptController::class, 'commodityPost'])->name('commodity.post');

Route::get('vehicle', [App\Http\Controllers\ScriptController::class, 'vehicleForm'])->name('vehicle.form');
Route::post('vehicle', [App\Http\Controllers\ScriptController::class, 'vehiclePost'])->name('vehicle.post');

Route::get('/', function () {
    return view('welcome');
});
