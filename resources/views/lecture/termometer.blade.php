@extends('layouts/layout')
@section('content')
<h1 class="text-center">Termometer</h1>
   

<p align="justify">
   Termometer merupakan sebuah alat sederhana yang memiliki fungsi penting yaitu untuk mengukur suhu. Seiring dengan perkembangan teknologi, termometer dibagi menjadi dua jenis yaitu termometer analog dan digital. Perbedaan utamanya terletak pada suhu yang ditampilkan, dimana pada termometer digital nilai suhu ditampilkan dalam bentuk angka pada layar sedangkan pada termometer analog kita perlu membaca sendiri berapa suhu yang terukur. Berikut karakteristik beberapa termometer yang sering dijumpai.
</p>
<ol>
   <li>
      Termometer klinis
      <figure class="h-auto max-w-xs mx-auto">
         <img class="mx-auto rounded-lg" src="{{URL::asset('/image/gambar2.png')}}" alt="Image description 1">
         <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 6 termometer klinis</figcaption>
      </figure>
      <p align="justify">
         Termometer klinis menggunakan sensor panas elektronik untuk mengukur suhu tubuh sehingga cara penggunaannya harus ditempelkan pada bagian tubuh seperti mulut, atau ketiak. Dengan kata lain, termometer jenis ini memanfaatkan prinsip konduksi. Termometer klinis sering dijumpai di puskesmas ataupun rumah sakit untuk mengukur suhu tubuh pasien. Umumnya, termometer klinis berbahan plastik dengan bentuk yang panjang dan ujung tipis seperti yang ditunjukkan pada Gambar 6.
      </p>
   </li>
   <li>
      Termometer <span class="italic"> infrared / thermogun </span>
      <figure class="h-auto max-w-xs mx-auto">
         <img class="mx-auto rounded-lg" src="{{URL::asset('/image/gambar3.jpg')}}" alt="Image description 2">
         <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 7 termometer infrared</figcaption>
      </figure>
      <p align="justify">
         Perlu diketahui bahwa setiap objek memancarkan energi inframerah yang dapat mengindikasikan suhu benda tersebut dimana semakin panas suhunya, maka semakin aktif pula molekul pada benda tersebut dan semakin banyak energi inframerah yang dipancarkan. <span class="italic">Thermogun</span> menggunakan inframerah ini untuk mengukur suhu tubuh. Prinsipnya adalah detektor akan menerima pancaran inframerah dari benda yang diarahkan untuk selanjutnya sinyal tersebut dikirim ke unit pemrosesan yang menghitung suhu berdasarkan intensitas radiasi inframerah yang diterima. <span class="italic">Thermogun</span> berbentuk seperti pistol (gambar 7) dimana untuk mengukur suhu tubuh, <span class="italic">thermogun</span> diarahkan ke area dahi dan arteri temporal di pelipis. Meski bisa memberi hasil yang cepat, termometer jenis ini belum dapat dikatakan memiliki tingkat akurasi yang setara dengan jenis termometer klinis. Hal ini dikarenakan banyaknya faktor yang mungkin dapat memengaruhi pembacaan suhu tubuh seperti sinar matahari, suhu dingin, dan keringat. Selain itu, <span class="italic">thermogun</span> juga memiliki harga yang lebih mahal dibandingkan jenis termometer lainnya. Namun demikian, thermogun banyak dimanfaatkan terutama saat <span class="italic">social distancing</span> pada masa pandemi COVID-19.
      </p>
      </li>
   <li>
      Termometer raksa
      <figure class="h-auto max-w-xs mx-auto">
         <img class="mx-auto rounded-lg" src="{{URL::asset('/image/gambar4.jpg')}}" alt="Image description 3">
         <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 8 termometer raksa</figcaption>
      </figure>
      <p align="justify">
         Termometer raksa menggunakan prinsip pemuaian volume dimana raksa akan memuai seiring dengan suhu tubuh yang terdeteksi pada termometer, dengan kata lain paparan panas dari suhu tubuh akan meningkatkan tinggi raksa dalam tabung hingga mencapai titik yang menandakan suhu tubuh. Dibandingkan alkohol, pemuaian volume pada raksa lebih teratur. Termometer ini berbentuk tabung kaca yang berisi logam cair berwarna perak atau raksa seperti yang ditunjukkan pada Gambar 8. Meski murah dan memiliki tingkat akurasi yang relatif tinggi dibanding termometer digital, termometer raksa tidak lagi dianjurkan untuk digunakan sebab mudah pecah. Selain itu, raksa yang keluar dari tabung termometer mudah menguap dan terhirup sehingga meningkatkan risiko terjadinya keracunan. Raksa memiliki memiliki titik didih sebesar 357 °C, sehingga dibandingkan dengan alkohol yang memiliki titik didih sebesar 78 °C, termometer raksa lebih cocok digunakan untuk mengukur suhu yang tinggi.
      </p>
   </li>
   <li>
      Termometer alkohol
      <figure class="h-auto max-w-xs mx-auto">
         <img class="mx-auto rounded-lg" src="{{URL::asset('/image/termoalko.jpg')}}" alt="Image description 3">
         <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 9 termometer alkohol</figcaption>
      </figure>
      <p align="justify">
         Termometer alkohol menggunakan prinsip pemuaian volume dimana alkohol akan memuai seiring dengan suhu tubuh yang terdeteksi pada termometer, dengan kata lain paparan panas dari suhu tubuh akan meningkatkan tinggi alkohol dalam tabung hingga mencapai titik yang menandakan suhu tubuh. Termometer ini berbentuk tabung kaca seperti yang ditunjukkan pada Gambar 9. Meski murah dan memiliki tingkat akurasi yang relatif tinggi dibanding termometer digital, termometer alkohol tidak lagi dianjurkan untuk digunakan sebab mudah pecah. Selain itu, alkohol yang keluar dari tabung termometer mudah menguap dan terhirup sehingga meningkatkan risiko terjadinya keracunan. Alkohol memiliki memiliki titik beku sebesar -112 °C, sehingga dibandingkan dengan raksa yang memiliki titik didih sebesar -39 °C, termometer alkohol lebih cocok digunakan untuk mengukur suhu yang tinggi.
      </p>
   </li>
</ol>

<p align="justify">
   Contoh dari termometer digital diantaranya yaitu termometer klinis pada Gambar 6 dan termometer <span class="italic">infrared</span> pada Gambar 7. Keduanya sama-sama biasa digunakan untuk mengukur suhu tubuh seseorang namun perbedaannya terletak pada penggunaannya. Termometer klinis menggunakan sensor panas elektronik sehingga cara penggunaannya harus ditempelkan pada bagian tubuh seperti mulut dan ketiak, sedangkan termometer <span class="italic">infrared</span> menggunakan <span class="italic">infrared</span> sehingga cara penggunaannya tidak perlu ditempelkan cukup di arahkan ke daerah dahi dan arteri temporal di pelipis. Untuk termometer analog contohnya yaitu termometer raksa pada Gambar 8 dan termometer alkohol pada Gambar 9. Termometer jenis ini berbentuk tabung kaca. Pada penggunaannya, raksa ataupun alkohol akan memuai seiring dengan meningkatnya paparan panas dari suhu tubuh.
</p>

<div class="flex justify-between py-6">
   <!-- Previous Button -->
   <a href="{{ route('skalasuhu') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
       <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
       </svg>
       Sebelumnya
   </a>

   <!-- Next Button -->
   <form action="/plusmiles3" method="POST">
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