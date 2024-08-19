<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DoaController extends Controller
{
    public function doa() 
    {
            $client = new Client();
            $url = "https://doa-doa-api-ahmadramadhan.fly.dev/api";
            $response = $client->request('GET', $url);
            $content = $response->getBody()->getContents();
            $listdoa = json_decode($content, true);

            return view('doa', ['listdoa' => $listdoa]);
    }

    public function doadetail($id) 
    {
        $client = new Client();
        $url = "https://doa-doa-api-ahmadramadhan.fly.dev/api/$id";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $doadetail = json_decode($content, true);

        // Pastikan data doa ada dalam respons
        // if (!isset($contentArray['data'])) {
        //     abort(404, 'Doa not found');
        // }

        // dd($contentArray);


        return view('doadetail', ['doadetail' => $doadetail]);
    }

}