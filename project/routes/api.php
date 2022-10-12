<?php

use App\Http\Controllers\EmailController as emailCon;
use App\Http\Controllers\NameController as nameCon;
use App\Http\Controllers\PhoneController as phoneCon;
use App\Http\Controllers\StatsController as statsCon;

use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/stats', [statsCon::class, 'showStats']);


Route::get('/stats/name', [statsCon::class, 'showNameStats']);
Route::get('/name', [nameCon::class, 'store']);


Route::get('/stats/email', [statsCon::class, 'showEmailStats']);
Route::get('/email', [emailCon::class, 'store']);


Route::get('/stats/phone', [statsCon::class, 'showPhoneStats']);
Route::get('/phone', [phoneCon::class, 'store']);