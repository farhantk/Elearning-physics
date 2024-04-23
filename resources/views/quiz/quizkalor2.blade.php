@extends('layouts/layout')
@section('content')
<h1>Quiz Pemuaian Zat</h1>
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
<form action="/fisika/suhu-dan-kalor/kalor/pemuaian-zat/quiz" method="post">
    @csrf
    <ol>
        <li>
            Sebatang rel besi panjangnya 1 m pada 20 ºC. Koefisien muai panjang besi 12.10<sup>-6</sup>/ ºC. Celah antar rel agar aman jika suhu maksimum rel dianggap sampai 70 ºC adalah sebesar ... 
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	0,2 mm</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	0,6 mm</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	1,2 mm</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	2,4 mm</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	3,2 mm</label>
            </div>
        </li>
        <li>
            Suatu plat kaca memiliki luas 1000 cm2 pada suhu 20 °C. Jika diketahui koefisien muai kaca adalah sebesar 9.10<sup>-6</sup>/ °C, maka luas kaca ketika suhunya mencapai 70 °C adalah...
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	1000,15 cm<sup>2</sup></label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	1000,30 cm<sup>2</sup></label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	1000,45 cm<sup>2</sup></label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	1000,60 cm<sup>2</sup></label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	1000,75 cm<sup>2</sup></label>
            </div>
        </li>
        <li>
            Sebatang rel besi yang panjangnya 1 m memiliki suhu sebesar 20°C. Jika koefisien muai panjang besi dianggap 10<sup>-5</sup>/°C, maka besar celah antar rel agar aman jika suhu maksimum rel dianggap mencapai 80°C adalah ...mm
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	0,2</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	0,4</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	0,6</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	0,2</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	0,1</label>
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
   <form action="/plusmiles10" method="POST">
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