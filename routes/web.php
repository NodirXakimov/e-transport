<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Region;
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
})->name('main');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/regions', [App\Http\Controllers\RegionController::class, 'index'])->name('regions');
    Route::get('/regions/{id}/districts', [App\Http\Controllers\DistrictController::class, 'getDistrictsOfRegion'])->name('districts');
    // Route::post('bestway', [UserController::class, 'index'])->name('user.index');
});
Route::post('/test', function(Request $request){
    return $request;
})->name('test');
