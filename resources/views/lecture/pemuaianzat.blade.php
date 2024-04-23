@extends('layouts/layout')
@section('content')
<h1>Pemuaian Zat</h1>
<figure class="h-auto max-w-xs mx-auto">
   <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/gambar11.jpg')}}" alt="image description">
   <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 16 Pemuaian rel kereta api</figcaption>
</figure>
<iframe class="mx-auto" width="560" height="315" src="https://www.youtube.com/embed/t7Q-T46OcWM?si=P6DyFH97y6-r3K3-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

<p>Pada pembuatan rel kereta api, sambungan antar rel sengaja dibuat sedikit renggang seperti pada gambar di atas. Hal ini dilakukan untuk memberi ruang pada rel ketika mengalami pemuaian. Perlu diketahui, bahwa terdapat gaya tarik-menarik antar partikel pada setiap partikel bebas yang bergerak dalam suatu zat. Gaya antarpartikel dalam zat padat dapat digambarkan seperti pegas, sebagaimana tampak pada Gambar 17. Apabila zat padat dipanaskan energi getaran yang dimiliki partikel-partikelnya bertambah besar dan jarak antarpartikel menjadi bertambah. Akibatnya, ukuran zat padat menjadi bertambah. Penambahan ukuran zat akibat pemanasan inilah yang dinamakan pemuaian. Pemuaian dapat terjadi pada zat padat, zat cair, dan gas. Pada proses pemuaian, terdapat sebuah koefisien untuk menentukan bagaimana ukuran benda bertambah seiring dengan perubahan suhu. Koefisien ini disebut koefisien muai. </p>
<figure class="h-auto max-w-xs mx-auto">
   <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/gayaantarpartikel.png')}}" alt="image description">
   <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 17 Gaya antarpartikel zat padat</figcaption>
</figure>

<ol>
   <li>
      <strong>Pemuaian Zat Padat</strong>
      <ol>
         <li>
            <strong> Panjang</strong>
            <figure class="h-auto max-w-xs mx-auto">
               <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/alatmiss.png')}}" alt="image description">
               <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 18 Alat Musschenbrooke</figcaption>
            </figure>
            <p>Pemuaian yang terjadi pada zat padat satu dimensi (berbentuk garis) disebut sebagai pemuaian panjang atau pemuaian linier. Pemuaian panjang menggunakan konsep koefisien muai panjang yang merupakan perbandingan antara pertambahan panjang zat dengan panjang zat mula-mula, untuk setiap kenaikan sebesar satu satuan suhu. Salah satu contoh percobaan untuk mengamati terkait koefisien muai panjang yaitu menggunakan alat Musschenbrooke. Pada percobaannya, batang logam dibuat sejajar terlebih dulu dengan garis 0 menggunakan sekrup pengatur. Kemudian, batang logam dibakar menggunakan pembakar spirtus. Setelah itu, amati kenaikan penunjuk batang logam yang satu dengan lainnya. Batang logam yang mengalami kenaikan paling besar, memiliki nilai koefisien muai panjang yang lebih besar pula. Namun demikian, percobaan Musschenbrooke hanya menjelaskan koefisien muai panjang secara kualitatif, sedangkan secara kuantitatif koefisien muai panjang dapat didefinisikan dengan persamaan sebagai berikut.</p>
            <figure class="h-auto max-w-xs mx-auto">
               <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/rumuskoefmuaipanjang.png')}}" alt="image description">
            </figure>
            <p>Dimana,</p>
            <p class="text-center italic font-bold text-black">
               ∆L=L<sub>t</sub>-L<sub>0</sub>
            </p>
            <p>
               Dengan:<br>
               <span class="italic text-black">
               L<sub>t</sub> = panjang benda setelah dipanaskan (m)<br>
               L<sub>0</sub> = panjang benda mula-mula (m)<br>
               α = koefisien muai panjang (/°C)<br>
               ∆T = perubahan suhu (°C)<br>
               </span>
               Berikut pada tabel 4 disajikan nilai koefisien muai panjang pada beberapa zat padat.
            </p>
            <div class="relative overflow-x-auto sm:rounded-lg">
               <table class="mx-auto max-w-lg text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  <caption class='text-center'>Tabel 4 Koefisien muai panjang</caption>
                  <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                     <tr>
                           <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                              Jenis Logam
                           </th>
                           <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                              Koefisien Muai Panjang
                           </th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr class="border-b border-gray-200 dark:border-gray-700">
                           <td class="px-6 py-4">
                              Alumunium
                           </td>
                           <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                              0.000025
                           </td>
                     </tr>
                     <tr class="border-b border-gray-200 dark:border-gray-700">
                           <td class="px-6 py-4">
                              Tembaga
                           </td>
                           <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                              0.0000167
                           </td>
                     </tr>
                     <tr class="border-b border-gray-200 dark:border-gray-700">
                           <td class="px-6 py-4">
                              Besi
                           </td>
                           <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                              0.000012
                           </td>
                     </tr>
                     <tr class="border-b border-gray-200 dark:border-gray-700">
                           <td class="px-6 py-4">
                              Baja
                           </td>
                           <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                              0.000011
                           </td>
                     </tr>
                     <tr class="border-b border-gray-200 dark:border-gray-700">
                           <td class="px-6 py-4">
                              Platina
                           </td>
                           <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                              0.0000089
                           </td>
                     </tr>
                     <tr class="border-b border-gray-200 dark:border-gray-700">
                           <td class="px-6 py-4">
                              Kaca
                           </td>
                           <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                              0.000009
                           </td>
                     </tr>
                     <tr class="border-b border-gray-200 dark:border-gray-700">
                           <td class="px-6 py-4">
                              Kaca pyrex
                           </td>
                           <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                              0.000003
                           </td>
                     </tr>
                     <tr class="border-b border-gray-200 dark:border-gray-700">
                           <td class="px-6 py-4">
                              Kuningan
                           </td>
                           <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                              0.000019
                           </td>
                     </tr>
                     <tr class="border-b border-gray-200 dark:border-gray-700">
                           <td class="px-6 py-4">
                              Seng
                           </td>
                           <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                              0.000026
                           </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <p>Berikut video percobaan Musschenbrooke</p>
            <iframe class="mx-auto" width="560" height="315" src="https://www.youtube.com/embed/GlYXZnMM_JY?si=GV7U2WQLimfoJ4Am" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
         </li>
         <li>
            <strong>Muai Luas</strong>
            <figure class="h-auto max-w-xs mx-auto">
               <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/muailuas.jpg')}}" alt="image description">
               <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 19 Muai luas</figcaption>
            </figure>
            <p>Pemuaian yang terjadi pada zat padat dua dimensi (panjang dan lebar) disebut sebagai pemuaian luas. Pemuaian luas menggunakan konsep koefisien muai luas yang merupakan perbandingan antara pertambahan luas zat dengan luas zat mula-mula, untuk setiap kenaikan sebesar satu satuan suhu. Secara matematis, koefisien muai luas dapat didefinisikan dengan persamaan sebagai berikut.</p>
            <figure class="h-auto max-w-xs mx-auto">
               <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/rumusmuailuas.png')}}" alt="image description">
            </figure>
            <p>Dimana,</p>
            <p class="text-center italic font-bold text-black">
               ∆A=A<sub>t</sub>-A<sub>0</sub><br>
               β=2α
            </p>
            <p>
               Dengan:<br>
               <span class="italic text-black">
               A<sub>t</sub> = luas benda setelah dipanaskan (m²)<br>
               A<sub>0</sub> = luas benda mula-mula (m²)<br>
               β = koefisien muai luas (/°C)<br>
               ∆T = perubahan suhu (°C)
               </span>
            </p>
         </li>
         <li>
            <strong>Muai volume</strong>
            <figure class="h-auto max-w-xs mx-auto">
               <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/muaivolume.jpg')}}" alt="image description">
               <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 20 Muai volume</figcaption>
            </figure>
            <p>Pemuaian yang terjadi pada zat padat tiga dimensi (berbentuk ruang) disebut sebagai pemuaian volume. Pemuaian volume menggunakan konsep koefisien muai volume yang merupakan perbandingan antara pertambahan volume zat dengan volume zat mula-mula, untuk setiap kenaikan sebesar satu satuan suhu. Secara matematis, koefisien muai volume dapat didefinisikan dengan persamaan sebagai berikut.</p>
            <figure class="h-auto max-w-xs mx-auto">
               <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/rumusmuaivol.png')}}" alt="image description">
            </figure>
            <p>Dimana,</p>
            <p class="text-center italic font-bold text-black">
               ∆V=V<sub>t</sub>-V<sub>0</sub><br>
               γ=3α
            </p>
            <p>
               Dengan:<br>
               <span class="italic text-black">
               V<sub>t</sub> = volume benda setelah dipanaskan (m³)<br>
               V<sub>0</sub> = volume benda mula-mula (m³)<br>
               γ = koefisien muai volume (/°C)<br>
               ∆T = perubahan suhu (°C)
               </span>
            </p>
         </li>
      </ol>
   </li>
   <li>
      <strong>Pemuaian Zat Cair</strong>
      <p>Bentuk zat cair selalu mengikuti bentuk wadahnya. Oleh karena itu, dalam zat cair hanya dikenal pemuaian volume. Salah satu penerapan dari pemuaian zat cair yaitu pada prinsip kerja termometer. Pemuaian zat cair berbeda-beda, tergantung pada jenis zat cair. Untuk dapat lebih memahami terkait pemuaian zat cair, lakukan kegiatan di bawah ini.</p>
      <strong>Alat dan Bahan</strong>
      <p>Tiga labu gelas berpipa yang berukuran sama, bejana, dan tiga jenis zat cair (misalnya, air, minyak, dan alkohol)</p>
      <strong>Prosedur Percobaan</strong>
      <ol class="ps-5 mt-2 space-y-1 list-decimal list-inside">
         <li>Isilah masing-masing labu gelas dengan air, minyak, dan alkohol. Usahakan ketiga permukaan zat cair tingginya sama. </li>
         <li>Masukkan ketiga labu gelas ke dalam bejana yang berisi air panas.</li>
         <li>Beberapa saat kemudian, perhatikan tinggi permukaan zat cair dalam setiap labu gelas. Apakah ketiga zat cair memiliki tinggi permukaan yang sama?</li>
         <li>Apakah kesimpulan kalian?</li>
      </ol>
      <p>Kegiatan di atas dapat menunjukkan bahwa setelah labu gelas yang berisi zat cair dimasukkan ke dalam air panas, ternyata tinggi zat cair tidak sama. Artinya, pemuaian zat cair bergantung pada jenis zat cair. Besaran yang membedakan besarnya pemuaian zat adalah koefisien muai volume. Tabel 5 berikut menunjukkan koefisien muai volume beberapa zat cair.</p>
      <table class="mx-auto max-w-lg text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
         <caption class='text-center'>Tabel 5 Koefisien muai volume beberapa zat cair</caption>
         <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                  <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                     No
                  </th>
                  <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                     Jenis Zat
                  </th>
                  <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                     Koefisien Muai Volume( /°C)
                  </th>
            </tr>
         </thead>
         <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                  <td class="px-6 py-4">
                     1
                  </td>
                  <td class="px-6 py-4">
                     Air Raksa
                  </td>
                  <td class="px-6 py-4">
                     0.00018
                  </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                  <td class="px-6 py-4">
                     2
                  </td>
                  <td class="px-6 py-4">
                     Alkohol
                  </td>
                  <td class="px-6 py-4">
                     0.00120
                  </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                  <td class="px-6 py-4">
                     3
                  </td>
                  <td class="px-6 py-4">
                     Aseton
                  </td>
                  <td class="px-6 py-4">
                     0.00150
                  </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                  <td class="px-6 py-4">
                     4
                  </td>
                  <td class="px-6 py-4">
                     Air
                  </td>
                  <td class="px-6 py-4">
                     0.00021
                  </td>
            </tr>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                  <td class="px-6 py-4">
                     5
                  </td>
                  <td class="px-6 py-4">
                     Bensin
                  </td>
                  <td class="px-6 py-4">
                     0.00095
                  </td>
            </tr>

         </tbody>
      </table>
      
      
      <p>
         Pada dasarnya, setiap zat yang dipanaskan akan memuai. Namun, prinsip ini tidak terjadi pada air yang dipanaskan dari suhu 0°C hingga 4°C karena pada kondisi ini, terjadi anomali air atau sifat keanehan air dimana air yang seharusnya memuai malah menyusut. Proses terjadinya anomali ini, digambarkan oleh grafik berikut.
      </p>
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/gambar12.jpg')}}" alt="image description">
         <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 21 Pemuaian zat cair</figcaption>
      </figure>
      <p>Lain daripada itu, perlu diketahui bahwa pada zat cair pemuaian yang terjadi hanyalah pemuaian volume dengan persamaan matematis sebagai berikut.</p>
      <p class="text-center italic font-bold text-black">
         V<sub>t</sub>=V<sub>0</sub> (1+γ∆T)<br>
         ∆V=γV<sub>0</sub> ∆T<br>
      </p>
      <p>Berikut disajikan video percobaan pemuaian zat cair </p>
      <iframe class="mx-auto" width="560" height="315" src="https://www.youtube.com/embed/y9MX3UVV9mA?si=R9CGUNcUvtKY1Crr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
   </li>
   
   <li>
      <strong>Pemuaian Zat Gas</strong>
      <p>Gas yang dipanaskan akan menyebabkan terjadinya pemuaian volume dan pemuaian tekanan. Dengan demikian, berdasarkan proses pemanasannya, pemuaian gas memiliki beberapa persamaan diantaranya yaitu sebagai berikut. </p>
      <iframe class="mx-auto" src="{{URL::asset('/simulation/_Gas Properties_.html')}}"
         width="800"
         height="600"
         allowfullscreen>
      </iframe>
      <ol>
         <li>
            <strong>Pemuaian Volume pada Tekanan Tetap (Isobarik)</strong>
            <figure class="h-auto max-w-xs mx-auto">
               <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/isobarik1.jpg')}}" alt="image description">
               <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 22 Isobarik</figcaption>
            </figure>
            <p>Gas di dalam ruang tertutup dengan tutup yang bebas bergerak (Gambar 21a) yang dipanaskan pada tekanan tetap, maka akan menyebabkan volume gas memuai sebanding dengan suhu mutlak gas tersebut (Gambar 21b) atau secara matematis dapat dituliskan:</p>
            <figure class="h-auto max-w-xs mx-auto">
               <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/isobarik.png')}}" alt="image description">
            </figure>
         </li>
         <li>
            <strong>Pemuaian Tekanan Gas pada Volume Tetap (Isokhorik)</strong>
            <figure class="h-auto max-w-xs mx-auto">
               <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/isokhorik1.jpg')}}" alt="image description">
               <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 23 Isokhorik</figcaption>
            </figure>
            <p>Gas yang dipanaskan dalam ruang tertutup, maka akan menyebabkan tekanan gas memuai sebanding dengan suhu mutlak gas tersebut dimana jika pemanasan terjadi secara terus menerus, maka dapat terjadi ledakan. Secara matematis, proses ini dapat dituliskan sebagai berikut:</p>
            <figure class="h-auto max-w-xs mx-auto">
               <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/isohorik.png')}}" alt="image description">
            </figure>
         </li>
         <li>
            <strong>Pemuaian Volume Gas pada Suhu Tetap (Isotermis)</strong>
            <figure class="h-auto max-w-xs mx-auto">
               <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/isotermik1.jpg')}}" alt="image description">
               <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 24 Isotermik</figcaption>
            </figure>
            <p>Gas di dalam ruang tertutup dengan tutup yang dapat digerakkan dengan bebas (Gambar 23a), pada saat tutup tabung digerakkan secara perlahan-lahan agar suhu gas di dalam tabung tetap maka pada saat volume gas diperkecil ternyata tekanan gas dalam tabung bertambah besar dan bila volume gas diperbesar ternyata tekanan gas dalam tabung mengecil.atau secara matematis dapat dituliskan:</p>
            <figure class="h-auto max-w-xs mx-auto">
               <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/isotermis.png')}}" alt="image description">
            </figure>
         </li>
      </ol>
      <p>Untuk proses pemuaian gas yang terjadi pada tekanan, volume, dan suhu yang berubah maka dapat diselesaikan dengan persamaan hukum Boyle-Gay Lussac yaitu sebagai berikut.</p>
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/boyle.png')}}" alt="image description">
      </figure>
      <p>Berikut disajikan video percobaan sederhana pemuaian zat gas, cobalah di rumah untuk ikut membuktikannya!</p>
      <iframe class="mx-auto" width="560" height="315" src="https://www.youtube.com/embed/Hth4UdzN068?si=-oUMXsyrTRSKGP5R" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
   </li>
</ol>

<div class="flex justify-between py-6">
   <!-- Previous Button -->
   <a href="{{ route('contohsoalkalor1') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
       <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
       </svg>
       Sebelumnya
   </a>

   <!-- Next Button -->
   <form action="/plusmiles9" method="POST">
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