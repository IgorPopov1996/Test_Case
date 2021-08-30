<?php

namespace App\Http\Controllers;


class LvivController extends Controller
{
    public function CurlWeather ()

    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.ambeedata.com/weather/latest/by-lat-lng?lat=49.8397&lng=24.0297", //insert coordinates here
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Content-type: application/json",
                "x-api-key: 5056f203fa2841fa75f1d35be420902347ea2dce746c42892612a059e1c4a047"  //insert API token here
            ],
        ]);
        $response =json_decode(curl_exec($curl),true);    //added json_decode to transform string into array
        $err = curl_error($curl);
        curl_close($curl);




        return view('Lviv', compact('response'));

    }
}


