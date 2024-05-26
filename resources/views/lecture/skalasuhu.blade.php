@extends('layouts/layout')
@section('content')
<h1 class="text-center">Skala Suhu</h1>
<figure class="h-auto max-w-xs mx-auto">
   <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/demam.jpg')}}" alt="image description">
   <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 1  Penggunaan termometer saat demam</figcaption>
</figure>

<iframe class="mx-auto" width="560" height="315" src="https://www.youtube.com/embed/okhv08fgvBA?si=uBbmvXZJ5H2T9lmm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

<p align="justify">Demam merupakan sebuah penyakit yang disebabkan oleh infeksi atau dapat pula terjadi ketika terdapat ketidakseimbangan antara produksi panas di dalam tubuh dengan pengeluarannya (Salgado, dkk., 2016). Penyakit ini ditandai dengan suhu tubuh yang berada di atas normal dimana menurut Kurniati (dalam Sudibyo, 2020) suhu tubuh normal manusia berada pada rentang 36-37°C. Dari hal ini dapat kita ketahui bahwa mengetahui suhu tubuh merupakan sebuah hal yang penting karena dengan begitu kita dapat mengindikasikan kondisi tubuh seseorang apakah sedang sehat atau tidak, sehingga apabila sakit kita dapat mengobatinya dengan segera.</p>
<p align="justify">Secara mikroskopik, suhu sebuah benda berkaitan dengan gerak partikel penyusun, dimana seperti yang diketahui bahwa semua benda tersusun atas atom, molekul atau ion yang bergerak secara acak. Partikel penyusun ini bergerak ke segala arah dengan kecepatan yang berbeda-beda. Gerakan inilah yang menyebabkan partikel memiliki energi kinetik yang dapat menimbulkan tumbukan antar partikel, sehingga terjadi transfer energi dari partikel yang satu ke partikel yang lain. Dalam kehidupan sehari-hari, suhu dapat didefinisikan dengan derajat panas atau dingin yang dirasakan indera dan untuk mengukurnya dengan akurat maka kita memerlukan alat pengukur suhu yang dinamakan dengan termometer.</p>

<iframe class="mx-auto" width="560" height="315" src="https://www.youtube.com/embed/UmTJ_0BNN9M?si=Lf0yaA78GO03pPrK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

<p align="justify">
   Setiap besaran memiliki satuan. Begitupula dengan suhu, suhu merupakan sebuah besaran yang juga memiliki satuan dimana satuan internasional dari suhu adalah Kelvin (K). Namun, selain Kelvin, satuan yang mungkin sering dijumpai diantaranya yaitu Celcius (°C), Reaumur (°R), dan Fahrenheit (°F). Nilai yang terukur pada termometer akan bergantung pada jenis skala yang digunakan, seperti yang diilustrasikan pada gambar 2 berikut dimana terdapat air di dalam sebuah wadah yang diukur menggunakan 3 jenis skala yaitu berbeda Celcius, Reaumur, dan Fahrenheit. Dapat dilihat bahwa hasil pengukuran dari ketiga skala menunjukkan nilai yang berbeda yaitu 25°C, 20°R, dan 77°F.
</p>

<figure class="h-auto max-w-xs mx-auto">
   <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/skalasuhu.png')}}" alt="image description">
   <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 2 Skala suhu</figcaption>
</figure>
<p align="justify">
   Keempat skala termometer yang sudah disebutkan dapat dibuat menggunakan raksa ataupun alkohol, yang membedakan adalah raksa memiliki titik didih 357°C sedangkan alkohol memiliki titik didih 78°C sehingga raksa lebih baik digunakan untuk mengukur suhu yang tinggi, sedangkan untuk mengukur suhu yang rendah alkohol lebih baik digunakan karena memiliki titik beku yang lebih besar yaitu sebesar -112°C dibandingkan dengan raksa yang hanya memiliki titik beku sebesar 39°C. Keempat skala termometer memiliki karakteristik sebagai berikut.
</p>
<ol>
    <li>
       Celcius
       <p align="justify">
         Skala Celcius memiliki titik beku (batas bawah) sebesar 0°C dan titik didih (batas atas) sebesar 100°C. Dalam pembuatan termometer dengan skala celcius, skala dibuat berdasarkan tingkat cairan ketika dimasukkan ke dalam alat yang berfungsi menjaga kestabilan suatu bahan pada suhu 100°C untuk batas atasnya dan 0°C untuk batas bawahnya. Skala celcius sering digunakan di Indonesia.
       </p>
    </li>
    <li>
       Reaumur
       <p align="justify">
         Skala Reaumur memiliki titik beku (batas bawah) sebesar 0°R dan titik didih (batas atas) sebesar 80°R. Dalam pembuatannya skala diterapkan berdasarkan tingkat di mana cairan berada ketika dimasukkan ke dalam penangas air yaitu 80°C untuk batas atasnya dan 0°C untuk batas bawahnya.
       </p>
    </li>
    <li>
       Fahrenheit
       <p align="justify">
         Skala Fahrenheit memiliki titik beku (batas bawah) sebesar 32°F dan titik didih / batas atas sebesar 212°F. Dalam pembuatannya skala diterapkan berdasarkan tingkat di mana cairan berada ketika dimasukkan ke dalam penangas air yaitu 212°F untuk batas atasnya dan 32°F untuk batas bawahnya. Skala Fahrenheit sering digunakan di Amerika.
       </p>
    </li>
    <li>
       Kelvin
       <p align="justify">
         Skala Kelvin memiliki titik beku / batas bawah sebesar 273 K dan titik didih (batas atas) sebesar 373 K. Skala ini tidak menggunakan derajat, namun menggunakan nol mutlak. Hal ini dapat diartikan bahwa nol Kelvin memiliki makna bahwa tidak ada energi panas sama sekali pada sebuah benda. Hal ini pula yang kemudian menjadikan Kelvin sebagai skala suhu pada Satuan Internasional atau SI.
       </p>
    </li>
</ol>

<p align="justify">
   Pada Gambar 3 di bawah ini disajikan titik beku dan titik didih dari empat skala termometer yang berbeda 
</p>
<figure class="h-auto max-w-xs mx-auto">
   <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/batasatasbawah.png')}}" alt="image description">
   <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 3 Batas atas dan bawah 4 skala termometer</figcaption>
</figure>
<p align="justify">
   Titik beku dan titik didih dari empat termometer yang berbeda juga dapat disajikan pada tabel 1 berikut.
</p>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
   <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <caption class='text-center'>Tabel 1 Titik beku dan titik didih 4 skala termometer</caption>
      <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
         <tr>
               <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                  No
               </th>
               <th scope="col" class="px-6 py-3">
                  Satuan
               </th>
               <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                  Titik beku
               </th>
               <th scope="col" class="px-6 py-3">
                  Titik didih
               </th>
               <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                  Selisih Skala 
               </th>
         </tr>
      </thead>
      <tbody>
         <tr class="border-b border-gray-200 dark:border-gray-700">
               <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                  1
               </th>
               <td class="px-6 py-4">
                  Celcius
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  0°C
               </td>
               <td class="px-6 py-4">
                  100°C
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  100
               </td>
         </tr>
         <tr class="border-b border-gray-200 dark:border-gray-700">
               <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                  2
               </th>
               <td class="px-6 py-4">
                  Reamur
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  0°R
               </td>
               <td class="px-6 py-4">
                  80°R
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  80
               </td>
         </tr>
         <tr class="border-b border-gray-200 dark:border-gray-700">
               <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                  3
               </th>
               <td class="px-6 py-4">
                  Fahrenheit
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  32°F
               </td>
               <td class="px-6 py-4">
                  212°F
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  180
               </td>
         </tr>
         <tr class="border-b border-gray-200 dark:border-gray-700">
               <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                  4
               </th>
               <td class="px-6 py-4">
                  Kelvin
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  273 K
               </td>
               <td class="px-6 py-4">
                  372 K
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  100
               </td>
         </tr>
      </tbody>
   </table>
</div>

<p align="justify">
   Dari titik beku dan titik didih, dapat diperoleh selisih skala antara titik beku dengan titik didih. Dalam hal ini, skala Celcius memiliki titik didih 100 °C dan titik beku 0 °C, sehingga jumlah skalanya yaitu 100-0 = 100. Kemudian, skala Reaumur memiliki titik didih 80 oR dan titik beku 0 °R, sehingga jumlah skalanya yaitu 80-0 = 80. Selanjutnya, skala Fahrenheit memiliki titik didih 212 °F dan titik beku 32 °F, sehingga jumlah skalanya yaitu 212-32 = 180. Terakhir, skala Kelvin memiliki titik didih 373 K dan titik beku 273 K, sehingga jumlah skalanya yaitu 373-273 = 100. Jumlah skala-skala di atas, jika dibandingkan maka akan diperoleh seperti Gambar 4 berikut. 
</p>

<figure class="h-auto max-w-xs mx-auto">
   <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/fdsfsdfs.jpg')}}" alt="image description">
   <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 4 Perbandingan skala</figcaption>
</figure>

<p align="justify">Secara umum, kita dapat melakukan konversi suhu dari satu skala ke skala suhu lainnya dengan cara sebagai berikut</p>
<figure class="h-auto max-w-xs mx-auto">
   <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/konversiSuhu.jpg')}}" alt="image description">
   <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 5 Konversi skala suhu</figcaption>
</figure>
<p align="justify">Maka, untuk mengonversi suhu dari celcius, reamur, fahrenheit, dan kelvin satu dengan lainnya diperoleh cara seperti yang dijelaskan pada tabel 2 berikut.</p>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
   <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <caption class='text-center'>Tabel 2 Konversi 4 skala suhu</caption>
      <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
         <tr>
               <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                  
               </th>
               <th scope="col" class="px-6 py-3">
                  Celcius
               </th>
               <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                  Reamur
               </th>
               <th scope="col" class="px-6 py-3">
                  Fahrenheit
               </th>
               <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                  Kelvin
               </th>
         </tr>
      </thead>
      <tbody>
         <tr class="border-b border-gray-200 dark:border-gray-700">
               <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                  Celcius
               </th>
               <td class="px-6 py-4">
                  
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  R = (4/5)C
               </td>
               <td class="px-6 py-4">
                  F = (9/5) C + 32
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  K = C + 273
               </td>
         </tr>
         <tr class="border-b border-gray-200 dark:border-gray-700">
               <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                  Reamur
               </th>
               <td class="px-6 py-4">
                  C = (5/4) R
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  
               </td>
               <td class="px-6 py-4">
                  F = (9/4) R + 32
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  K = (5/4) R + 273
               </td>
         </tr>
         <tr class="border-b border-gray-200 dark:border-gray-700">
               <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                  Fahrenheit
               </th>
               <td class="px-6 py-4">
                  C = 5/9 (F-32)
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  R = 4/9 (F-32)
               </td>
               <td class="px-6 py-4">
                  
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  K = 5/9 (F-32) + 273
               </td>
         </tr>
         <tr class="border-b border-gray-200 dark:border-gray-700">
               <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                  Kelvin
               </th>
               <td class="px-6 py-4">
                  C = K - 273
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  R = 4/5 (K-273)
               </td>
               <td class="px-6 py-4">
                  F = 9/5 ((K-273) + 32)
               </td>
               <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                  
               </td>
         </tr>
      </tbody>
   </table>
</div>
<div class="flex justify-between py-6">
   <!-- Previous Button -->
   <a href="{{ route('main') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
       <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
       </svg>
       Sebelumnya
   </a>

   <!-- Next Button -->
   <form action="/plusmiles2" method="POST">
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