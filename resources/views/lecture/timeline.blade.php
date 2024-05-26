@extends('layouts/layout')
@section('content')
<h1 class="text-center">Peta Konsep</h1>
<figure class="h-auto mx-auto">
    <img class=" mx-auto rounded-lg " src="{{URL::asset('/image/Slide2.jpg')}}" alt="image description">
</figure>
<!--
<div id="gallery" class="relative w-full" data-carousel="slide">

    <div class="relative h-full overflow-hidden rounded-lg ">

        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{URL::asset('/image/Slide1.jpg')}}" class="absolute block max-w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{URL::asset('/image/Slide2.jpg')}}" class="absolute block max-w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{URL::asset('/image/Slide3.jpg')}}" class="absolute block max-w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
    </div>

    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="#808080" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="#808080" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
-->
<div class="flex justify-between">
   <!-- Previous Button -->
   <a>
   </a>

   <!-- Next Button -->
   <a href="{{ route('skalasuhu') }}" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-700 border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    Selanjutnya
   <svg class="w-3.5 h-3.5 ms-2 rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
   </svg>
</a>
</div>

@endsection