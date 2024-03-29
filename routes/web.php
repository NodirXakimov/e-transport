<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\PlanePrice;

use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;
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
    Route::post('ways', [App\Http\Controllers\HomeController::class, 'ways'])->name('ways');


    Route::view('importRegions', 'admin.importRegions');
    Route::post('importRegions', [App\Http\Controllers\HomeController::class, 'importRegions'])->name('importRegions');
    
    Route::view('importDistricts', 'admin.importDistricts');
    Route::post('importDistricts', [App\Http\Controllers\HomeController::class, 'importDistricts'])->name('importDistricts');

    Route::view('importPlanePrice', 'admin.importPlanePrice');
    Route::post('importPlanePrice', [App\Http\Controllers\HomeController::class, 'importPlanePrice'])->name('importPlanePrice');

    Route::view('importTrainPrice', 'admin.importTrainPrice');
    Route::post('importTrainPrice', [App\Http\Controllers\HomeController::class, 'importTrainPrice'])->name('importTrainPrice');

    Route::view('importBusPrice', 'admin.importBusPrice');
    Route::post('importBusPrice', [App\Http\Controllers\HomeController::class, 'importBusPrice'])->name('importBusPrice');

    Route::view('aviaflights', 'admin.aviaflight')->name('aviaflights');
    Route::view('railways', 'admin.railway')->name('railways');
    Route::view('busways', 'admin.busway')->name('busways');

});
// Route::get('/test/{id}', function($id){
//     $region = Region::findOrFail(1);
//     $regions = $region->planePrice;
//     foreach ($regions as $key => $region) {
//         if($region->id == $id)
//         return $region->price;
//     }
//     return $price[$id].price;
//     // $planePrice = PlanePrice::findOrFail(1);
//     // return $planePrice;
// })->name('test');

Route::view('/test', "admin.result");
Route::get('/send-mail', function () {

    Mail::to('nodirxakimov@yandex.ru')->send(new MailtrapExample());

    // @finished
    //     @telegram('1700628743:AAEnXq6oyVWnwWBJ4UfAExYNqgX-O6_oOmk','1612234310')
    // @endfinished
    return 'A message has been sent to Mailtrap!';

});

Route::get('/telegram', function(){
    $response = Http::post('https://api.telegram.org/bot1700628743:AAEnXq6oyVWnwWBJ4UfAExYNqgX-O6_oOmk/sendMessage', [
        'chat_id' => '-1001579906510',
        'text' => 'It is just test text',
        'disable_notification' => true
    ]);
    return $response;
});

Route::get('/telegram/getUpdates', function(){
    $response = Http::get('https://api.telegram.org/bot1700628743:AAEnXq6oyVWnwWBJ4UfAExYNqgX-O6_oOmk/getUpdates', [
        'chat_id' => '1612234310'
    ]);
    return $response;
});