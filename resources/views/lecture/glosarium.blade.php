@extends('layouts/layout')
@section('content')



<div class="w-full p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
   <h1 class="mb-2 text-3xl font-bold text-center text-gray-900 dark:text-white">Glosarium</h1>
   <ul>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Asas black</span><br>
            Banyak kalor yang dilepas oleh benda bersuhu tinggi sama dengan banyak kalor yang diterima oleh benda bersuhu rendah dalam percampuran 
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Kalor</span><br>
            Energi termal yang terdapat pada suatu materi
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Kalor jenis</span><br>
            Jumlah kalor yang diperlukan 1 kg zat agar suhunya naik 1oC atau 1 K
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Kalor lebur/kalor laten</span><br>
            Jumlah energi kalor yang diperlukan untuk mengubah 1 kg zat dari wujud padat menjadicair pada titik leburnya 
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Kalor uap</span><br>
            Banyaknya kalor persatuan massa yang harus diberikan pada suatu zat pada titik didihnya supaya menjadi gas seluruhnya pada titik didih tersebut
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Kapasitas kalor</span><br>
            Jumlah energi yang dibutuhkan untuk menaikkan suhu sampel sebesar 10C atau 1 K
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Koefisien muai</span><br>
            koefisien untuk menentukan bagaimana ukuran benda bertambah seiring dengan perubahan suhu
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Pemuaian</span><br>
            Peristiwa berubahnya ukuran suatu benda karena perubahan suhu
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Suhu</span><br>
            Ukuran panas dingin suatu benda
         </p>
      </li>
   </ul>

   <div class="flex justify-between py-6">
      <!-- Previous Button -->
      <a href="{{ route('rangkuman') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
          </svg>
          Sebelumnya
      </a>
      <a href="{{ route('daftarpustaka') }}" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-700 border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
           Selanjutnya
          <svg class="w-3.5 h-3.5 ms-2 rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
          </svg>
      </a>
   
   
   </div>


@endsection