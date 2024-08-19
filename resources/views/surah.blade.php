@extends('layout.app')

@section('main')
<div class="p-4">
<div class="pt-16 justify-center items-center flex"> <!-- Add padding-top to account for the fixed navbar -->
    <h1 class="text-xl text-black font-bold">Surah</h1>
</div>

<?php $i = 1; ?>
@foreach ($data as $item)
    <a href="{{ route('surahdetail', ['id' => $item['nomor']]) }}">
        <div class="w-full h-auto bg-blue-400 grid grid-cols-8 gap-1 justify-around text-center items-center py-2 px-1 rounded-md mt-4 mb-3">
            <p class="text-base text-black col-span-1 text-center">
                {{ $i }}
            </p>
            <div class="flex-wrap col-span-2">
                <p class="text-sm text-black font-bold text-start">
                    {{ $item['namaLatin'] }}
                </p>
                <p class="text-xs text-black text-start">
                    {{ $item['tempatTurun'] }}
                </p>
            </div>
            <p class="text-base text-black col-span-3"></p>
            <p class="text-base text-black col-span-2 text-center">
                {{ $item['nama'] }}
            </p>
        </div>
    </a>
    <?php $i++; ?>
@endforeach


    


</div>

@endsection
