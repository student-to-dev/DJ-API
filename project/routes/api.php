<?php

use App\Http\Controllers\NameController as nameCon;
use App\Http\Controllers\StatsController as statsCon;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/stats', statsCon::class, 'showStats');

Route::get('/stats/name', statsCon::class, 'showNameStats');
Route::post('/name?name={nameSurname}', nameCon::class, 'store');

Route::get('/stats/email', statsCon::class, 'showEmailStats');
Route::post('/email?email={email}', emailCon::class, 'store');

Route::get('/stats/phone', statsCon::class, 'showPhoneStats');
Route::post('/phone?phone={phone}', phoneCon::class, 'store');
