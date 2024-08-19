<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body class="bg-white">
    


<div id="navbar" class="navbar bg-white fixed shadow-md top-0 left-0 flex items-center z-10 w-full justify-between transition-shadow duration-300">
    <div class="flex items-center ml-4">
        <a href="{{ route('doa') }}" class="text-xs text-center text-black">
            <i class="fas fa-chevron-left"></i> <!-- Font Awesome Back Icon -->
        </a>
    </div>
    <div class="flex-1 justify-center items-center">
        <a class="ml-2 text-xs text-center">Masjid <br> Al - Muttaqin</a>
    </div>
    <div class="flex items-center ml-4">
        <a href="" class="text-xs text-center text-black">
 <!-- Font Awesome Back Icon -->
        </a>
    </div>
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

<div class="modal-box w-full max-w-5xl h-full bg-blue-300 flex-wrap mt-16">
    @foreach ($doadetail as $doa)
    <div class="flex-wrap">
        <p class="text-base text-black text-start mt-3">{{ $doa['doa'] }}</p>
        <p class="text-base text-black text-start mt-3">{{ $doa['ayat'] }}</p>
        <p class="text-base text-black text-start mt-3">{{ $doa['latin'] }}</p>
        <p class="text-base text-black text-start mt-3">Artinya : {{ $doa['artinya'] }}</p>
    </div>
    @endforeach
</div>
</body>
</html>

