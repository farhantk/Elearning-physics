@extends('layouts/layout')
@section('content')
<h1>Quiz Suhu</h1>
    @if( $grade >=75)
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Anda telah lulus</span> Nilai terbaik adalah {{ $grade }}.
        </div>
    @endif
    @if( $grade < 75 && $grade >=0)
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Anda tidak lulus</span> Nilai terbaik adalah {{ $grade }}.
        </div>
    @endif
    @if( $grade == -1 )

    @endif

<form action="/fisika/suhu-dan-kalor/suhu/quiz" method="post">
    @csrf
    <ol>
        <li align="justify">
            Sebuah termometer dalam skala bebas 0X memiliki titik beku air pada – 40 °X dan titik didih air 160 °X. Pada saat termometer tersebut terbaca 15 °X maka pada termometer skala Celcius terbaca ... °C
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A. 17,5 °C</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B. 27,5 °C</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-3" type="radio" value="C" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-3" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C. 37,5 °C</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-4" type="radio" value="D" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-4" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D. 47,5 °C</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-5" type="radio" value="E" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-5" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E. 57,5 °C</label>
            </div>
        </li>
        <li align="justify">
            Termometer P memiliki titik beku 40 °P dan titik didih 240 °P. Jika sebuah benda di ukur suhunya dengan menggunakan termometer Reaumur menunjukkan angka 40 °R, maka bila diukur dengan menggunakan termometer P suhunya adalah ...
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="A" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	60 °P</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	80 °P</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	120 °P</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	140 °P</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	150 °P</label>
            </div>
        </li>
        <li align="justify">
            Prinsip kerja termometer alkohol adalah memanfaatkan...
            <div class="flex items-center mb-1">
                <input id="default-radio-3" type="radio" value="A" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-3" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	Pemuaian volume oleh alkohol</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-3" type="radio" value="B" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-3" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	Pemuaian volume oleh gas di ruang tertutup</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-3" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	Pemuaian volume oleh gas di ruang hampa</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-3" type="radio" value="D" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-3" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	Pemuaian luas oleh tabung kaca</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-3" type="radio" value="E" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-3" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	Pemuaian panjang oleh alkohol</label>
            </div>
        </li>
    </ol>
    <button type="submit" class="px-4 py-2 text-sm font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Kirim Jawaban</button>
</form>


<div class="flex justify-between py-6">
   <!-- Previous Button -->
   <a href="{{ route('termometer') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
       <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
       </svg>
       Sebelumnya
   </a>

   <!-- Next Button -->
   @if($grade > 75)
   <form action="/plusmiles5" method="POST">
    @csrf
    <button type="submit" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-700 border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
      Selanjutnya
      <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
      </svg>
    </button>
 </form>
 @endif
</div>
@endsection