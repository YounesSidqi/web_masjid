@extends('layout.app')

@section('main')
<div class="p-4 bg-white" >
<div class="pt-16 justify-center items-center flex"> <!-- Add padding-top to account for the fixed navbar -->
    <h1 class="text-xl text-black font-bold">List Doa</h1>
</div>


    @foreach ($listdoa as $item)
    <a href="{{ route('doadetail', ['id' => $item['id']]) }}">
        <div class="w-full h-auto bg-blue-400 flex text-start items-center py-2 px-1 rounded-md mt-4 mb-3">
            <p class="text-base text-black col-span-2 text-center ml-5">
                {{ $item['doa'] }}
            </p>
        </div>
    </a>

    @endforeach


    


</div>

@endsection
