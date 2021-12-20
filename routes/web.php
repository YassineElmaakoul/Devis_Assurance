<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PdfgenerateController;

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
    return view('welcome');
});
Route::get('accueil', function () {
    return view('accueil');
});

Route::get('clients',[ClientController::class, 'index']);
Route::get('generate-pdf','DeviController@view')->name('generatePDF');
Route::get('/devis/pdf', [DeviController::class, 'generatePDF']);

Route::get('devis',[DeviController::class, 'index']);
Route::get('devis/{num_devis}/show',[DeviController::class, 'show']);
Route::get('devis/create',[DeviController::class, 'create']);
Route::post('/devis',[DeviController::class, 'store']);
Route::get('devis/{num_devis}/edit',[DeviController::class, 'edit']);
Route::put('devis/{num_devis}',[DeviController::class, 'update']);
Route::delete('devis/{num_devis}','App\Http\Controllers\DeviController@destroy');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('accueil');
})->name('dashboard');
