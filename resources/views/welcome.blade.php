<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="navbar" class="navbar bg-transparent fixed shadow-md top-0 left-0 flex items-center z-10 w-full justify-center transition-shadow duration-300">
    <div class="justify-center items-center">
        <a class="ml-2 text-xs text-center"></a>
    </div>
    <div class="justify-center items-center">
        <a class="ml-2 text-xs text-center">Masjid <br> Al - Muttaqin</a>
    </div>
    <!-- Optional Sign Up button -->
    <!-- <div class="border border-white rounded">
        <a href="#" class="text-xs m-2">Sign Up</a>
    </div> -->
</div>

<script>
        document.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.remove('shadow-md');
            } else {
                navbar.classList.add('shadow-md');
            }
        });
    </script>


<div class="container">

<section id="#home">
<div class="relative">

<div class="flex items-center justify-center">
    <img class="w-full" src="{{ asset('assets/img/background.svg') }}" alt="">
    <p class="absolute text-2xl top-30 text-white font-bold p-4 text-center"><a class="text-3xl"> Website resmi dari </a><br> Masjid Al - Muttaqin</p>

    <p class="absolute text-l text-center text-white font-normal top-80 mt-5">Waktu Sekarang <br>{{ $utcOffset }}</p>

    </section>

    <!-- Tabel Jadwal Sholat -->
    <div class="absolute top-96 mt-3 left-1/2 transform -translate-x-1/2 text-center w-10/12 h-8/12 justify-center items-center bg-white rounded-lg shadow-md">
        
        <div class="m-3 rounded-sm">
            @if(!empty($jadwalSholat))
            <h1 class="text-sm text-black font-bold mb-3" href="#">{{ $jadwalSholat['tanggal'] }}</h1>
        <h1 class="text-sm text-black font-bold" href="#">Jadwal Sholat</h1>
            <div class="justify-between flex mx-5 mt-2">
                
                <div class="">
                    <p class="text-sm text-black font-normal">Subuh</p>
                    <p class="text-sm text-black font-normal">{{ $jadwalSholat['shubuh'] }}</p>
                </div>
                <div class="">
                    <p class="text-sm text-black font-normal">Dzuhur</p>
                    <p class="text-sm text-black font-normal">{{ $jadwalSholat['dzuhur'] }}</p>
                </div>
                <div class="">
                    <p class="text-sm text-black font-normal">Ashar</p>
                    <p class="text-sm text-black font-normal">{{ $jadwalSholat['ashr'] }}</p>
                </div>
                <div class="">
                    <p class="text-sm text-black font-normal">Maghrib</p>
                    <p class="text-sm text-black font-normal">{{ $jadwalSholat['magrib'] }}</p>
                </div>
                <div class="">
                    <p class="text-sm text-black font-normal">Isya</p>
                    <p class="text-sm text-black font-normal">{{ $jadwalSholat['isya'] }}</p>
                </div>
                @else
                <p class="text-sm text-black font-normal">Data jadwal sholat tidak tersedia untuk hari ini.</p>
            
            </div>
            @endif
        </div>
        
    </div>
</div>

<div class="flex justify-center">
    <img class="w-full h-auto" src="{{ asset('assets/img/putih.svg') }}" alt="">
</div>

</div>


<div class="flex-wrap bg-white justify-center">
<section id="#surah">
<div class="grid grid-cols-9 gap-4 w-auto px-10">


    
        <p class="text-2xl mt-3 text-black font-bold px-4 pt-4 text-center col-span-9">Surah</p>
        <a href="" class="text-black text-sm text-center  col-span-6"></a>
        <a href="{{ route('surah')}}" class="text-gray-300 text-sm underline text-end align-bottom col-span-3">lihat semua</a>
        @if (isset($surahs[0]))
        <a href="{{ route('surahdetail', ['id' => $surahs[0]['nomor']]) }}" class="text-black text-sm text-center bg-blue-300 py-4 px-6 rounded-lg col-span-4">
            {{ $surahs[0]['namaLatin'] }}
        </a>
    @endif
    <a href="#" class=" col-span-1">
        
    </a>
    @if (isset($surahs[1]))
        <a href="{{ route('surahdetail', ['id' => $surahs[1]['nomor']]) }}" class="text-black text-sm text-center bg-blue-300 py-4 px-6 rounded-lg col-span-4">
            {{ $surahs[1]['namaLatin'] }}
        </a>
    @endif
    @if (isset($surahs[2]))
        <a href="{{ route('surahdetail', ['id' => $surahs[2]['nomor']]) }}" class="text-black text-sm text-center bg-blue-300 py-4 px-6 rounded-lg col-span-4">
            {{ $surahs[2]['namaLatin'] }}
        </a>
    @endif
    <a href="#" class="col-span-1">
    </a>
    @if (isset($surahs[3]))
        <a href="{{ route('surahdetail', ['id' => $surahs[3]['nomor']]) }}" class="text-black text-sm text-center bg-blue-300 py-4 px-6 rounded-lg col-span-4">
            {{ $surahs[3]['namaLatin'] }}
        </a>
    @endif


        
    </div>
    </section>

    <section id="#dzikir">
    <div class="grid grid-cols-9 gap-4 w-auto px-10">
        
        <p class="text-2xl mt-14 text-black font-bold px-4 pt-4 text-center col-span-9">Dzikir</p>
        <a href="" class="text-black text-sm text-center col-span-6"></a>
        <a href="{{ route('dzikir_pagi') }}" class="text-black text-center text-sm bg-blue-300 py-4 px-6 rounded-lg col-span-4">Dzikir Pagi</a>
        <a href="" class="text-black text-sm text-center  col-span-1"></a>
        <a href="{{ route('dzikir_petang') }}" class="text-black text-sm text-center items-center bg-blue-300 py-4 px-6 rounded-lg col-span-4">Dzikir Petang</a>
        <a href="" class="text-black text-sm text-center  col-span-2"></a>
        <a href="{{ route('dzikir_after_salah') }}" class="text-black text-sm text-center bg-blue-300 py-4 px-6 rounded-lg col-span-5">Dzikir Setelah Sholat</a>
        <a href="" class="text-black text-sm text-center  col-span-2"></a>
        
    </div>
    </section>

    <section id="doa">

    <div class="grid grid-cols-9 gap-4 w-auto px-10">
        <p class="text-2xl mt-14 text-black font-bold px-4 pt-4 text-center col-span-9">Doa</p>
        <a href="" class="text-black text-sm text-center  col-span-6"></a>
        <a href="{{ route('doa')}}" class="text-gray-300 text-sm underline text-end align-bottom col-span-3">lihat semua</a>
        @if (isset($doa[0]))
            <a href="{{ route('doadetail', ['id' => $doa[0]['id']]) }}" class="text-black text-sm text-center bg-blue-300 py-4 px-6 rounded-lg col-span-4">
                {{ $doa[0]['doa'] }}
            </a>
        @else
            <p>Data doa tidak tersedia.</p>
        @endif

        
        <a href="#" class="col-span-1">
        </a>

        

        @if (isset($doa[1]))
            <a href="{{ route('doadetail', ['id' => $doa[1]['id']]) }}" class="text-black text-sm text-center bg-blue-300 py-4 px-6 rounded-lg col-span-4">
                {{ $doa[1]['doa'] }}
            </a>
        @else
            <p>Data doa tidak tersedia.</p>
        @endif

        @if (isset($doa[2]))
            <a href="{{ route('doadetail', ['id' => $doa[2]['id']]) }}" class="text-black text-sm text-center bg-blue-300 py-4 px-6 rounded-lg col-span-4">
                {{ $doa[2]['doa'] }}
            </a>
        @else
            <p>Data doa tidak tersedia.</p>
        @endif

        <a href="#" class="col-span-1">
        </a>

        @if (isset($doa[3]))
            <a href="{{ route('doadetail', ['id' => $doa[3]['id']]) }}" class="text-black text-sm text-center bg-blue-300 py-4 px-6 rounded-lg col-span-4">
                {{ $doa[3]['doa'] }}
            </a>
        @else
            <p>Data doa tidak tersedia.</p>
        @endif

        
    </div>
    </section>
</div>


</div>







</body>
</html>




