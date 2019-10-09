<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\UKM;
use Log;

class UKMController extends Controller
{
    public function getAllUKM() {
        $ukm = UKM::all();

        return response()->json($ukm);
    }

    public function crawler() {
        $client = new Client();
        $request = $client->request('GET', 'http://localhost:8000/api/ukm');
        return $request;
        $response = $request->getBody();

        // dd($response);
    }
}
