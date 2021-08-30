<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class KharkivController extends Controller
{
    public function KhaWeather()
    {
    $response = Http::withHeaders([
        'Content-type' => 'application/json',
        'x-api-key'    => '5056f203fa2841fa75f1d35be420902347ea2dce746c42892612a059e1c4a047'

    ])->get('https://api.ambeedata.com/weather/latest/by-lat-lng?lat=49.9935&lng=36.2304');

        return view('Kharkiv', compact('response'));
    }
}
