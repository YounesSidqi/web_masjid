@extends('layout.app')

@section('main')
<div class="p-4">
<div class="pt-16 justify-center items-center flex"> <!-- Add padding-top to account for the fixed navbar -->
    <h1 class="text-xl text-black font-bold">Dzikir Petang</h1>
</div>
    <div class="w-full h-auto bg-blue-300 flex-wrap justify-around text-center items-center py-2 px-5 rounded-md mt-4 mb-3 ">
        @foreach ($dzikirpetang as $petang)
        <div class="flex justify-between">
            <p class="text-xl text-black text-start font-light mb-3  pt-1">{{ $petang['title'] }}</p>
            <p class="text-base text-black text-start font-light mb-3  pt-2">{{ $petang['notes'] }}</p>
        </div>
            <p class="t text-base text-black font-bold text-end mb-5">
                {{ $petang['arabic'] }}
            </p>
            <p class="text-base text-black text-start font-light mb-5">
                latin : {{ $petang['latin'] }}
            </p>
            <p class="text-base text-black text-start font-light mb-5">
                artinya : {{ $petang['translation'] }}
            </p>
            <p class="text-base text-black text-start font-light mb-5">
                fawaid : {{ $petang['fawaid'] }}</p>
            <p class="text-xs text-black text-start font-thin mb-5">
                {{ $petang['source'] }}</p>
        
        @endforeach
    </div>
</div>

@endsection
