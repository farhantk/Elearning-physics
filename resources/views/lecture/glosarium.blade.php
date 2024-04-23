@extends('layouts/layout')
@section('content')



<div class="w-full p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
   <h1 class="mb-2 text-3xl font-bold text-center text-gray-900 dark:text-white">Glosarium</h1>
   <ul>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Asas black</span><br>
            dalam sistem tertutup terisolasi, kalor yang dilepaskan oleh benda bersuhu tinggi = kalor yang diserap oleh benda bersuhu rendah
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Kalor jenis</span><br>
            jumlah kalor yang diperlukan 1 kg zat agar suhunya naik 1°C atau 1 K
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Kalor lebur</span><br>
            jumlah energi kalor yang diperlukan untuk mengubah 1 kg zat dari wujud padat menjadicair pada titik leburnya
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Kalor uap</span><br>
            banyaknya kalor persatuan massa yang harus diberikan pada suatu zat pada titik didihnya supaya menjadi gas seluruhnya pada titik didih tersebut
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Kapasitas kalor</span><br>
            sebagai jumlah energi yang dibutuhkan untuk menaikkan suhu sampel sebesar 1°C atau 1 K
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Membeku</span><br>
            perubahan wujud dari cair menjadi padat
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Mencair</span><br>
            perubahan wujud dari padat menjadi cair
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Mengembun</span><br>
            perubahan wujud dari gas menjadi cair
         </p>
      </li>
      <li>
         <p>
            <span class="text-xl font-semibold text-gray-900">Menguap</span><br>
            perubahan wujud dari zat cair menjadi gas
         </p>
      </li>
   </ul>

   <div class="flex justify-between py-6">
      <!-- Spacer -->
      <div></div>
  
      <!-- Next Button -->
      <form action="/plusmiles1" method="POST">
         @csrf
         <button type="submit" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-700 border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
           Selanjutnya
           <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
           </svg>
         </button>
      </form>
  </div>
  
</div>


@endsection