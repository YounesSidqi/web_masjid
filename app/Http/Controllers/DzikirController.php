<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DzikirController extends Controller
{
    public function dzikir_after_salah() 
    {
        $client = new Client();
        $url = "https://raw.githubusercontent.com/fitrahive/dua-dhikr/main/data/dua-dhikr/dhikr-after-salah/id.json";
        $response = $client->request('GET',$url);
        $content = $response->getBody()->getContents();
        $dzikiraftersalah = json_decode($content,true);
        return view('dzikir.dzikir_after_salah', ['dzikiraftersalah' => $dzikiraftersalah]);
        // $listdoa = $contentArray['https://doa-doa-api-ahmadramadhan.fly.dev/api'];
        // return view('doa', [
        //     'id',
        //     'doa',
        //     'ayat',
        //     'latin',
        //     'artinya' => $listdoa]);
        // dd($contentArray);
    }

    public function dzikir_pagi() 
    {
        $client = new Client();
        $url = "https://raw.githubusercontent.com/fitrahive/dua-dhikr/main/data/dua-dhikr/morning-dhikr/id.json";
        $response = $client->request('GET',$url);
        $content = $response->getBody()->getContents();
        $dzikirpagi = json_decode($content,true);
        return view('dzikir.dzikir_pagi', ['dzikirpagi' => $dzikirpagi]);
        // $listdoa = $contentArray['https://doa-doa-api-ahmadramadhan.fly.dev/api'];
        // return view('doa', [
        //     'id',
        //     'doa',
        //     'ayat',
        //     'latin',
        //     'artinya' => $listdoa]);
        // dd($contentArray);
    }

    public function dzikir_petang() 
    {
        $client = new Client();
        $url = "https://raw.githubusercontent.com/fitrahive/dua-dhikr/main/data/dua-dhikr/evening-dhikr/id.json";
        $response = $client->request('GET',$url);
        $content = $response->getBody()->getContents();
        $dzikirpetang = json_decode($content,true);
        return view('dzikir.dzikir_petang', ['dzikirpetang' => $dzikirpetang]);
        // $listdoa = $contentArray['https://doa-doa-api-ahmadramadhan.fly.dev/api'];
        // return view('doa', [
        //     'id',
        //     'doa',
        //     'ayat',
        //     'latin',
        //     'artinya' => $listdoa]);
        // dd($contentArray);
    }
}
