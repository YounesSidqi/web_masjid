<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client; // Pastikan ini ditambahkan

class SurahController extends Controller
{
    public function surah() 
    {
        $client = new Client();
        $url = "https://equran.id/api/v2/surat";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        
        // Debugging
        // dd($contentArray);
        
        $data = $contentArray['data'] ?? []; // Ensure $data is not undefined
        return view('surah', ['data' => $data]);
    }
    

    public function surahdetail($id) 
    {
        $client = new Client();
    $url = "https://equran.id/api/v2/surat/$id"; // ID surah dinamis
    $response = $client->request('GET', $url);
    $content = $response->getBody()->getContents();
    $contentArray = json_decode($content, true);

    // Pastikan data surah ada dalam respons
    if (!isset($contentArray['data'])) {
        abort(404, 'Surah not found');
    }

    // Ambil data surah
    $data = $contentArray['data'];

    // Ambil data ayat dari data surah
    $surahdetail = isset($data['ayat']) ? $data['ayat'] : [];

    // Mengembalikan data ke tampilan Blade
    return view('surahdetail', ['ayah' => $surahdetail]);
    }
}
