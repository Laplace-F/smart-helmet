<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HelmetController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Di sinilah Anda dapat mendaftarkan rute API untuk aplikasi Anda.
|
*/

// Endpoint untuk menerima data telemetri dari helm
Route::post('/telemetry', [HelmetController::class, 'storeTelemetry']);

// Endpoint untuk menerima data peringatan (jatuh atau SOS)
Route::post('/alert', [HelmetController::class, 'storeAlert']);



// testtttt