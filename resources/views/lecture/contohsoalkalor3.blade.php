@extends('layouts/layout')
@section('content')
<h1>Contoh Soal 1 </h1>

<p>Batang logam dengan panjang 1,5 meter memiliki luas penampang 20 cm2 dan perbedaan suhu kedua ujungnyaa 30°C. Jika diketahui koefisien konduksi termal yaitu sebesar 0,2 kal/ms°C, tentukanlah laju aliran kalor!</p>

      <p class="lead">Pembahasan</p>
      <p>
         <span class="underline underline-offset-1">Diketahui:</span><br>
         <span class="italic text-black">
            L = 1,5 m<br>
            A = 20 cm² = 20×10<sup>-4</sup> m²<br>
            k = 0,2 kal⁄(ms°C)<br>
            ∆T = 30°C<br>
         </span>
         <span class="underline underline-offset-1">Ditanyakan:</span><br>
         <span class="italic text-black">
         H = ?
         </span>
         <br>
         <span class="underline underline-offset-1">Jawab:</span><br>
         <br>
         <figure class="h-auto max-w-xs mx-auto">
            <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/soalH.png')}}" alt="image description">
         </figure>
         Maka, laju aliran kalor pada batang logam tersebut yaitu 0,08 kal/s
      </p>
      
      <h1>Contoh Soal 2 </h1>
      
      <p>Suatu fluida dengan koefisien konveksi termal 0,01 kal/msoC, memiliki luas penampang aliran 25 cm². Jika fluida tersebut mengalir dari dinding yang bersuhu 90°C ke dinding lainnya yang bersuhu 30°C dimana kedua dindingnya sejajar, berapakah besar kalor yang dirambatkan?</p>
      <p class="lead">Pembahasan</p>
      <p>
         <span class="underline underline-offset-1">Diketahui:</span><br>
         <span class="italic text-black">
         h = 0,01 kal⁄(ms°C)<br>
         A = 25 cm² = 25×10<sup>-4</sup> m²<br>
         ∆T = 90-30 = 60°C<br>
         </span>
         <span class="underline underline-offset-1">Ditanyakan:</span><br>
         <span class="italic text-black">
         H = ?
         </span>
         <br>
         <span class="underline underline-offset-1">Jawab:</span><br>
         <p class="text-center italic text-black">
            H = h.A.∆T<br>
            H = 0,01(25×10<sup>-4</sup>)60<br>
            H = 1,5×10<sup>-3</sup> kal⁄s
         </p>
         Maka, kalor yang dirambatkan pada fluida tersebut yaitu sebesar 1,5 x 10<sup>-3</sup> kal/s
      </p>


      <h1>Contoh Soal 3 </h1>
      
      <p>Sebuah lampu pijar menggunakan kawat wolfram dengan luas 10<sup>-6</sup> m<sup>2</sup> dan emisivitasnya 0,5. Bila bola lampu tersebut berpijar pada suhu 1000 K selama 4 sekon (σ=5,67 ×10<sup>-8</sup> W/mK<sup>4</sup>), besar energi radiasi yang dipancarkan adalah...</p>
      <p class="lead">Pembahasan</p>
      <p>
         <span class="underline underline-offset-1">Diketahui:</span><br>
         <span class="italic text-black">
         A = 10<sup>-6</sup> m<sup>2</sup><br>
         e = 0,5<br>
         T = 1000 K<br>
         t = 4 s<br>
         σ = 5,67 ×10<sup>-8</sup> W/mK<sup>4</sup><br>
         </span>
         <span class="underline underline-offset-1">Ditanyakan:</span><br>
         <span class="italic text-black">
         ∆Q = ?
         </span>
         <br>
         <span class="underline underline-offset-1">Jawab:</span><br>
         <p class="text-center italic text-black">
            ∆Q = eσAT<sup>4</sup>∆t<br>
            ∆Q = 0,5(5,67 × 10<sup>-8</sup> )(10<sup>-6</sup> ) (1000)<sup>4</sup> (4)<br>
            ∆Q = 11,34 × 10<sup>-2</sup> J
         </p>
         Maka, besar energi yang dipancarkan lampu pijar tersebut adalah 11,34 J.
      </p>

<div class="flex justify-between py-6">
   <!-- Previous Button -->
   <a href="{{ route('perpindahankalor') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
       <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
       </svg>
       Sebelumnya
   </a>
   <form action="/plusmiles12" method="POST">
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