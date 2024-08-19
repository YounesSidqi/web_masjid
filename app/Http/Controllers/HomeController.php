<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function home() 
    {
        // URL untuk data surah
        $surahUrl = "https://equran.id/api/v2/surat";
        // URL untuk data doa
        $doaUrl = "https://doa-doa-api-ahmadramadhan.fly.dev/api";
        // URL untuk jadwal sholat
        $jadwalSholatUrl = 'https://raw.githubusercontent.com/lakuapik/jadwalsholatorg/master/adzan/balikpapan/2024/08.json';
        // URL untuk mendapatkan waktu saat ini di Asia/Makassar
        $timeUrl = 'http://worldtimeapi.org/api/timezone/Asia/Makassar';

        // Mengambil data surah
        $surahResponse = Http::get($surahUrl);
        $surahData = $surahResponse->json();
        $surahs = $surahData['data'] ?? [];

        // Mengambil data doa
        $doaResponse = Http::get($doaUrl);
        $doaData = $doaResponse->json();
        $doa = $doaData ?? [];

        // Mengambil data jadwal sholat
        $jadwalSholatResponse = Http::get($jadwalSholatUrl);
        $jadwalSholatData = $jadwalSholatResponse->json();
        
        // Mengambil tanggal hari ini
        $today = Carbon::now()->format('Y-m-d'); // Format tanggal sesuai dengan format data JSON

        // Filter jadwal sholat untuk tanggal hari ini
        $jadwalSholat = $jadwalSholatData ?? [];
        $todayJadwal = array_filter($jadwalSholat, function($item) use ($today) {
            return $item['tanggal'] == $today;
        });

        // Mengambil data waktu saat ini
        $timeResponse = Http::get($timeUrl);
        $timeData = $timeResponse->json();

        // Mengambil bagian utc_offset dari response
        $utcOffset = $timeData['utc_offset'] ?? null;

        // Mengacak data surah dan doa
        shuffle($surahs);
        shuffle($doa);

        // Mengembalikan data ke tampilan Blade
        return view('welcome', [
            'surahs' => $surahs,
            'doa' => $doa,
            'jadwalSholat' => $todayJadwal ? array_values($todayJadwal)[0] : [], // Ambil elemen pertama jika ada
            'utcOffset' => $utcOffset // Menyimpan UTC offset
        ]);
    }

    

    


    // public function surahdetail($id) 
    // {
    //     $client = new Client();
    // $url = "https://equran.id/api/v2/surat/$id"; // ID surah dinamis
    // $response = $client->request('GET', $url);
    // $content = $response->getBody()->getContents();
    // $contentArray = json_decode($content, true);

    // // Pastikan data surah ada dalam respons
    // if (!isset($contentArray['data'])) {
    //     abort(404, 'Surah not found');
    // }

    // // Ambil data surah
    // $data = $contentArray['data'];

    // // Ambil data ayat dari data surah
    // $surahdetail = isset($data['ayat']) ? $data['ayat'] : [];

    // // Mengembalikan data ke tampilan Blade
    // return view('surahdetail', ['ayah' => $surahdetail]);
    // }
}
