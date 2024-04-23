@extends('layouts/layout')
@section('content')
<h1>Contoh Soal</h1>

<p>Segelas air memiliki suhu sebesar 40°C. Suhu air tersebut jika diukur menggunakan termometer X yang memiliki titik beku -20°X dan titik didih 120°X adalah...</p>

<p class="lead">Pembahasan</p>
<p>
   <span class="underline underline-offset-1">Diketahui:</span><br>
   <span class="italic text-black">
   X<sub>min</sub> = -20°<br>
   X<sub>max</sub> = 120°<br>
   C<sub>min</sub> = 0°C<br>
   C<sub>max</sub> = 100°C<br>
   C = 40°C<br>
   </span>
   <br>
   <span class="underline underline-offset-1">Ditanyakan:</span><br>
   <span class="italic text-black">
    X = ?<br>
    </span>
   <br>
   <span class="underline underline-offset-1">Jawab:</span><br>
   <br>
   <figure class=" max-w-xs ">
      <img class=" mx-auto" src="{{URL::asset('/image/pembahasan_suhu.png')}}" alt="image description">
      <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Konversi skala suhu</figcaption>
   </figure>
   Maka, suhu air yang terukur oleh termometer X adalah 36°X.
</p>


<div class="flex justify-between py-6">
   <!-- Previous Button -->
   <a href="{{ route('termometer') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
       <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
       </svg>
       Sebelumnya
   </a>

   <!-- Next Button -->
    <form action="/plusmiles4" method="POST">
        @csrf
        <button type="submit" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-700 border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Selanjutnya
        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
        </button>
    </form>
</div>
@endsection