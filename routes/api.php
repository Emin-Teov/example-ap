<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//İstiqrazların faiz ödəmə tarixlərini  əldə etmək
Route::get("/{id}/payouts", [ApiController::class, 'payouts']);
// İstiqrazların alış sifarişinin yaradılması
//POST metodu vasitəsi ilə istiqrazın identifikasiya kodu və alınan istiqrazların sayını daxil edin!.
Route::post("/{id}/bonds", [ApiController::class, 'bonds']);
// İstiqrazların sifarişinin faiz ödənişlərini
Route::get("order/{id}", [ApiController::class, 'orders']);

