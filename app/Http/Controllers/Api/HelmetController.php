<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Telemetry; // 1. Impor model Telemetry
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator; // 2. Impor Validator

class HelmetController extends Controller
{
    public function storeTelemetry(Request $request)
    {
        // 3. Validasi data yang masuk
        $validator = Validator::make($request->all(), [
            'helmet_id' => 'required|string',
            'location.latitude' => 'required|numeric',
            'location.longitude' => 'required|numeric',
            'battery_level' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422); // Kirim error jika validasi gagal
        }

        // 4. Simpan data ke database
        $telemetry = Telemetry::create([
            'helmet_id' => $request->helmet_id,
            'latitude' => $request->location['latitude'],
            'longitude' => $request->location['longitude'],
            'battery_level' => $request->battery_level,
        ]);

        // 5. Kirim balasan sukses
        return response()->json([
            'status' => 'success',
            'message' => 'Telemetry data saved successfully.',
            'data' => $telemetry // Opsional: kirim kembali data yang tersimpan
        ], 201); // 201 artinya "Created"
    }
}