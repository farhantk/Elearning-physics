@extends('layouts/layout')
@section('content')
<h1 class="text-center">Rangkuman</h1>
<ul>
   <li>
      <p align="justify">Dalam kehidupan sehari-hari, suhu dapat didefinisikan dengan derajat panas atau dingin yang dirasakan indera dan untuk mengukurnya dengan akurat maka kita memerlukan alat pengukur suhu yang dinamakan dengan termometer. Untuk mengonversi skala suhu, dapat digunakan persamaan sebagai berikut.</p>
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/rumussuhu.png')}}" alt="image description">
      </figure>
   </li>
   <li>
      <p align="justify">Kalor merupakan jumlah energi panas baik yang diserap maupun dilepaskan oleh suatu benda akibat adanya perbedaan suhu. Secara matematis, kalor dirumuskan sebagai berikut.</p>
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/rumuskalor.png')}}" alt="image description">
      </figure>
   </li>
   <li>
      <p align="justify">Jumlah kalor yang dibutuhkan atau dilepaskan apabila suhu benda tersebut dinaikkan atau diturunkan sebesar 1 K atau 1oC disebut dengan istilah kapasitas kalor. Secara matematis, kapasitas kalor dirumuskan sebagai berikut.</p>
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/rumuskapasitaskalor.png')}}" alt="image description">
      </figure>
   </li>
   <li>
      <p align="justify">Asas Black berbunyi ketika dua zat dicampurkan, maka banyaknya kalor yang dilepas oleh zat dengan suhu yang lebih tinggi akan sama banyaknya dengan kalor yang diterima oleh zat dengan suhu yang lebih rendah. Secara matematis, asas Black dirumuskan sebagai berikut.</p>
      <p class="text-center italic text-black font-semibold">
         Q<sub>lepas</sub> = Q<sub>terima</sub><br>
         m<sub>1</sub>.c<sub>1</sub>.∆T<sub>1</sub> =m <sub>2</sub>.c<sub>2</sub>.∆T<sub>2</sub><br>
         m<sub>1</sub>.c<sub>1</sub>.(T<sub>1</sub>-T<sub>c</sub>) = m<sub>2</sub>.c<sub>2</sub>.(T<sub>c</sub>-T<sub>2</sub>)<br>
      </p>
   </li>
   <li>
      <p align="justify">Kalor yang dibutuhkan suatu benda untuk mengubah wujudnya per satuan massa ini disebut kalor laten. Secara matematis, kalor laten dirumuskan sebagai berikut.</p>
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/rumuskalorlaten.png')}}" alt="image description">
      </figure>
   </li>
   <li>
      <p align="justify">Pemuaian yang terjadi pada zat padat satu dimensi disebut sebagai pemuaian panjang. Koefisien muai panjang dapat dicari dengan persamaan berikut.</p>
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/rumuskoefmuaipanjang.png')}}" alt="image description">
      </figure>
   </li>
   <li>
      <p align="justify">Pemuaian yang terjadi pada zat padat dua dimensi disebut sebagai pemuaian luas. Koefisien muai luas dapat dicari dengan persamaan berikut.</p>
      <figure class="h-auto max-w-xs mx-auto" style="display: flex; align-items: center;">
         <img class="rounded-lg" src="{{URL::asset('/image/rumusmuailuas.png')}}" alt="Deskripsi gambar" style="flex: 1;">
         <figcaption style="margin-left: 10px; white-space: nowrap;" class="text-center italic font-semibold text-black">dimana &beta; = 2&alpha;</figcaption>
     </figure>
   </li>
   <li>
      <p align="justify">Pemuaian yang terjadi pada zat padat tiga dimensi disebut sebagai pemuaian volume. Koefisien muai volume dapat dicari dengan persamaan berikut.</p>
      <figure class="h-auto max-w-xs mx-auto" style="display: flex; align-items: center;">
         <img class="rounded-lg" src="{{URL::asset('/image/rumusmuaivol.png')}}" alt="Deskripsi gambar" style="flex: 1;">
         <figcaption style="margin-left: 10px; white-space: nowrap;" class="text-center italic font-semibold text-black">dimana γ=3α</figcaption>
      </figure>
   </li>
   <li>
      <p align="justify">Peristiwa perpindahan kalor melalui suatu zat tanpa disertai dengan perpindahan partikel-partikelnya ini disebut dengan konduksi. Laju kalor konduksi dapat dicari dengan persamaan berikut.</p>
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/konduksi.png')}}" alt="image description">
      </figure>
   </li>
   <li>
      <p align="justify">Peristiwa perpindahan kalor melalui suatu zat disertai dengan perpindahan partikel-partikelnya ini disebut dengan konveksi. Laju kalor konveksi dapat dicari dengan persamaan berikut.</p>
      <p class="text-center italic font-semibold text-black">
         H = hA∆T
      </p>
   </li>
   <li>
      <p align="justify">Peristiwa perpindahan kalor tanpa disertai dengan zat perantara ini disebut dengan radiasi. Laju kalor radiasi dapat dicari dengan persamaan berikut.</p>
      <p class="text-center italic font-semibold text-black">
         H = eσAT<sup>4</sup>
      </p>
   </li>
</ul>

<div class="flex justify-between py-6">
   <!-- Previous Button -->
   <a href="{{ route('main') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
       <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
       </svg>
       Sebelumnya
   </a>

   <!-- Next Button -->
   <a href="{{ route('glosarium') }}" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-700 border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
      Selanjutnya
     <svg class="w-3.5 h-3.5 ms-2 rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
     </svg>
 </a>
</div>

@endsection