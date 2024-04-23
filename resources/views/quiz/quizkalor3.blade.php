@extends('layouts/layout')
@section('content')
<h1>Quiz Perpindahan Kalor</h1>
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
<form action="/fisika/suhu-dan-kalor/kalor/perpindahan-kalor/quiz" method="post">
    @csrf
    <ol>
        <li>
            Permukaan dinding bagian terluar memiliki temperatur sebesar – 20 ºC dan bagian dalam 20 ºC. Jika dinding mengalirkan kalor sebanyak 110 kkal tiap 1 m<sup>2</sup> tiap jam, koefisien konduksi termal bahan dinding dengan tebal 40 cm adalah sebesar... 
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	2840 W/mK</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	3220 W/mK</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	4212 W/mK</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	4620 W/mK</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	5112 W/mK</label>
            </div>
        </li>
        <li>
            Sebuah lampu busur memancarkan cahaya pada suhu 127 ºC. Maka, energi radiasi tiap detik tiap m<sup>2</sup> adalah sebesar... (σ = 5,5.10<sup>-8</sup>)
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	1216 watt/m<sup>2</sup></label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	1328 watt/ m<sup>2</sup></label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	1408 watt/m<sup>2</sup></label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	1512 watt/ m<sup>2</sup></label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	1542 watt/ m<sup>2</sup></label>
            </div>
        </li>
        <li>
            Suatu fluida dengan koefisien konveksi termal 0,01 kal/msºC memiliki luas penampang aliran 20 cm2. Jika fluida tersebut mengalir dari dinding yang bersuhu 100 ºC ke dinding lainnya yang bersuhu 20 ºC dan kedua dinding sejajar, besar kalor yang dirambatkan adalah sebesar...
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	1,6 x 10<sup>-3</sup> kal/s</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	2,0 x 10<sup>-3</sup> kal/s</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	3,2 x 10<sup>-3</sup> kal/s</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	1,6 x 10<sup>-4</sup> kal/s</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	4,2 x 10<sup>-4</sup> kal/s</label>
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
   <form action="/plusmiles13" method="POST">
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