@extends('layouts/layout')
@section('content')
<h1>Evaluasi</h1>
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
<form action="/fisika/suhu-dan-kalor/evaluasi" method="post">
    @csrf
    <ol>
        <li align="justify">
            Sebuah termometer dalam skala bebas ºX memiliki titik beku air pada -20ºX dan titik didih air 80ºX. pada saat termometer tersebut terbaca 15ºX, maka pada termometer skala Celcius terbaca ...ºC
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	30</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	35</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	45</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	60</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	75</label>
            </div>
        </li>
        <li align="justify">
            Sebuah filamen lampu listrik yang sedang menyala memiliki suhu sebesar 2.925 K. Jika dinyatakan dalam skala Reamur, maka suhu pada filamen lampu tersebut adalah ...ºR
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	2.122</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	2.652</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	3.315</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	4.235</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	5.225</label>
            </div>
        </li>
        <li align="justify">
            Pernyataan di bawah ini yang benar adalah ...
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	Pemberian kalor selalu menikan suhu benda</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	Pemberian kalor tidak selalu menaikan suhu benda</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	Benda menjadi panas, artinya benda tersebut mengeluarkan kalor</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	Benda menjadi dingin mengandung lebih banyak kalor daripada benda panas</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	Benda kehilangan kalor, artinya suhu benda naik</label>
            </div>
        </li>
        <li align="justify">
            Bila kalor jenis zat cair = 4.200 J/kgºC, maka untuk menaikkan 0,5 kg zat cair dengan suhu 38ºC menjadi 48ºC diperlukan kalor sebesar ...kJ
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	2,1</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	4,2</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	21</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	42</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	210</label>
            </div>
        </li>
        <li align="justify">
            Apabila sebuah zat memiliki kalor lebur 100 kal/g, maka kalor yang dibutuhkan untuk meleburkan 15 kg zat tersebut yaitu sebesar ...J (1 kal = 4,2 J)
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	6,3 x 10<sup>3</sup></label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	1,2 x 10<sup>4</sup></label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	6,3 x 10<sup>4</sup></label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	1,2 x 10<sup>6</sup></label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	6,3 x 10<sup>6</sup></label>
            </div>
        </li>
        <li align="justify">
            Kalor yang diperlukan untuk meleburkan 100 gram es dari suhu -8ºC menjadi air dengan suhu 8ºC adalah ...J (kalor jenis es = 2100 J/kgK, kalor jenis air = 4200 J/kgK, kalor lebur es = 336 kJ/kg)
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	22.000</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	33.980</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	38.640</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	45.250</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	45.750</label>
            </div>
        </li>
        <li align="justify">
            Sepotong logam 50 g bersuhu 90ºC dicelupkan dalam air 150 g bersuhu 13ºC. jika suhu campuran 15ºC, kalor jenis air = 4200 J/kgK, maka kalor jenis logam tersebut adalah ...kal/gºC (1 kal = 4,2 J)
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	0,08</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	0,12</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	0,16</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	0,20</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	0,24</label>
            </div>
        </li>
        <li align="justify">
            Sebanyak 0,1 kg zat cair panas dituangkan dalam bejana logam yang bermassa sama. Jika suhu akhir telah tercapai, maka suhu zat cair turun sebesar 50ºC dan suhu bejana naik menjadi 60ºC. berdasarkan data di atas, diperoleh perbandingan kalor jenis zat cair dengan kalor jenis logam sebesar
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q8" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	1 : 2</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q8" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	1 : 3</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q8" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	3 : 2</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q8" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	4 : 3</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q8" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	6 : 5</label>
            </div>
        </li>
        <li align="justify">
            Ketel pemanas bermassa 10 kg dan berdaya 200 W diisi air sebanyak 2 kg. jika ketel digunakan selama 5 menit dan ketel beserta isinya mengalami kenaikan suhu 6 K, maka kalor jenis ketel adalah ...J/kgK
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q9" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	0,6</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q9" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	300</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q9" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	600</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q9" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	3000</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q9" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	6000</label>
            </div>
        </li>
        <li align="justify">
            Kapasitas kalor air bermassa 200 gram adalah ...J/K (kalor jenis air = 4200 J/kgK)
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q10" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	300</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q10" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	420</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q10" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	500</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q10" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	540</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q10" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	840</label>
            </div>
        </li>
        <li align="justify">
            Pada percobaan pertama, kalorimeter mula-mula diisi air sebanyak 190 gram dengan suhu 27ºC, kemudian suhu air naik menjadi 30ºC setelah dimasukkan 200 gram tembaga bersuhu 65ºC.
            <br>Pada percobaan kedua, kalori meter diisi air 95 gram dengan suhu 27ºC, kemudian suhu air naik menjadi 32ºC setelah dmasukkan 200 gram tembaga bersuhu 65ºC.
            Kapasitas kalor kalorimeter tersebut adalah ...kal/K

            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q11" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	15,75</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q11" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	20,75</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q11" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	28,75</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q11" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	30,75</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q11" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	48,75</label>
            </div>
        </li>
        <li align="justify">
            Es sebanyak x gram pada suhu -10ºC diberi kalor 1500 kal. Bila suhu akhir 15ºC, kalor jenis es = 0,5 kal/gºC, kalor jenis air = 1 kal/gºC, kalor lebur es = 80 kal/g, maka nilai x = ...g

            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q12" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	5</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q12" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	10</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q12" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	15</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q12" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	20</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q12" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	40</label>
            </div>
        </li>
        <li align="justify">
            Perhatikan grafik berikut!<br>
            <figure class="h-auto max-w-xs ">
                <img class=" rounded-lg" src="{{URL::asset('/image/eval1.jpg')}}" alt="image description">
             </figure>
            Grafik di atas menunjukkan hubungan antara suhu dan kalor yang diserap oleh es. Jika kalor lebur es = 3,34 x 105 J/kg, maka massa es yang melebur adalah ... kg
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q13" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	0,39 x 10<sup>-5</sup></label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q13" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	2,50 x 10<sup>-5</sup></label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q13" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	2,89 x 10<sup>-5</sup></label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q13" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	2,50 x 10<sup>-2</sup></label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q13" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	8,35 x 10<sup>-2</sup></label>
            </div>
        </li>
        <li align="justify">
            Sebanyak 100 gram es pada suhu -10ºC diberi kalor sebesar 8500 kalori. Bila kalor lebur es 80 kal/g, maka keadaan akhir es adalah ...
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q14" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	sebagian es melebur, suhu akhir = 0ºC</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q14" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	sebagian es melebur, suhu akhir > 0ºC</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q14" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	semua es melebur, suhu akhir = 0ºC</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q14" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	semua es melebur, suhu akhir > 0ºC</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q14" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	semua es melebur, suhu akhir < 0ºC</label>
            </div>
        </li>
        <li align="justify">
            Sebanyak x gram es -20ºC dicampur dengan y gram air AºC. Ternyata 75% es melebur. Jika banyaknya air akhir 7 kali massa es sisa, maka A adalah ...ºC
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q15" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	70</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q15" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	65</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q15" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	50</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q15" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	40</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q15" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	35</label>
            </div>
        </li>
        <li align="justify">
            Sepotong es yang massanya 1 kg suhunya -10ºC dimasukkan ke dalam 2 kg air bersuhu 20ºC. Jika diketahui kalor jenis es = 0,5 kal/gºC, kalor jenis air = 1 kal/gºC, dan kalor lebur es = 80 kal/g (1 kal = 4,2 J) dapat disimpulkan bahwa ...
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q16" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	Es tepat semua mencair, suhu akhir 0ºC</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q16" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	43,75% es mencair, suhu akhir 0ºC</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q16" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	Suhu akhir -20ºC</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q16" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	25% air membeku, suhu akhir 0ºC</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q16" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	Suhu akhir 20ºC</label>
            </div>
        </li>
        <li align="justify">
            Sebanyak 100 gram air pada suhu 20ºC hendak dicampur dengan 200 gram air suhu 50ºC. Maka, suhu campuran air tersebut adalah ...ºC
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q17" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	30</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q17" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	36</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q17" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	40</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q17" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	50</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q17" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	60</label>
            </div>
        </li>
        <li align="justify">
            Kalor lebur es = 80 kal/g, kalor embun air = 540 kal/g, dan kalor jenis air 1 kal/gºC. jika 10 kg es 0ºC ditambahkan 2 kg uap air 100ºC, maka temperatur akhir campuran adalah ...ºC
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q18" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	0</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q18" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	10</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q18" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	20</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q18" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	30</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q18" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	40</label>
            </div>
        </li>
        <li align="justify">
            Sebatang rel besi yang panjangnya 1 m memiliki suhu sebesar 20ºC. Jika koefisien muai panjang besi dianggap 10<sup>-5</sup>/ºC, maka besar celah antar rel agar aman jika suhu maksimum rel dianggap mencapai 80ºC adalah ...mm
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q19" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	0,2</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q19" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	0,4</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q19" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	0,6</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q19" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	0,2</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q19" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	1,0</label>
            </div>
        </li>
        <li align="justify">
            Suhu seseorang yang demam adalah 40ºC. Jika luas permukaan tubuhnya kira-kira 1,5 m<sup>2</sup> dan ia berada di dalam kamar yang suhunya 25ºC, maka laju kalor yang dilepaskan tubuh orang tersebut melalui konveksi adalah...J/s (koefisien konveksi h = 7,0 W/m2K
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="A" name="q20" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">A.	157,5</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="B" name="q20" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">B.	187,5</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-1" type="radio" value="C" name="q20" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">C.	205,5</label>
            </div>
            <div class="flex items-center mb-1">
                <input id="default-radio-2" type="radio" value="D" name="q20" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">D.	225,5</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-2" type="radio" value="E" name="q20" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ms-2 text-sm font-base text-gray-900 dark:text-gray-300">E.	245,5</label>
            </div>
        </li>
    </ol>
    <button type="submit" class="px-4 py-2 text-sm font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Kirim Jawaban</button>
</form>

<div class="flex justify-between py-6">
   <!-- Previous Button -->
   <a href="{{ route('quizkalor3') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
       <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
       </svg>
       Sebelumnya
   </a>
   <form action="/plusmiles14" method="POST">
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