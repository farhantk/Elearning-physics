@extends('layouts/layout')
@section('content')
<h1>Pengaruh Kalor pada Zat</h1>
<figure class="h-auto max-w-xs mx-auto">
   <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/gambar8.png')}}" alt="image description">
   <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 10 Pengaruh kalor pada zat</figcaption>
</figure>

<iframe class="mx-auto" width="560" height="315" src="https://www.youtube.com/embed/MadQN5IX4Nk?si=OKn1LLZJTSMgTqmQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

<p>Gambar di atas memperlihatkan air di dalam panci yang sedang mendidih karena dipanaskan. Pada proses tersebut, terjadi transfer energi dari satu zat ke zat lainnya dengan disertai perubahan suhu atau yang lebih dikenal dengan istilah kalor. Dengan kata lain, kalor merupakan jumlah energi panas baik yang diserap maupun dilepaskan leh suatu benda. Dalam kasus ini, air pada panci dapat mencapai titik didih karena kalor yang diterima air digunakan untuk menaikkan suhunya bahkan juga mengubah wujud dari cair (air) menjadi gas (uap).</p>

<p>Perubahan kalor dapat disebabkan oleh beberapa variabel yang dapat diketahui dengan melakukan percobaan-percobaan sebagai berikut. </p>

<iframe class="mx-auto" src="{{URL::asset('/simulation/energy-forms-and-changes_in.html')}}"
   width="800"
   height="600"
   allowfullscreen>
</iframe>
<ul>
   <li>
      Percobaan pertama
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/percobaan1.png')}}" alt="image description">
         <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 11 Percobaan I: perbedaan massa air</figcaption>
      </figure>
      <p>Ketika memanaskan segelas air dalam panci pertama dan dua gelas air dalam panci kedua dengan panas yang sama, maka air yang akan lebih cepat mendidih adalah air pada panci pertama hal ini karena air pada panci pertama memiliki massa yang lebih kecil. Maka, simpulan pertama yaitu semakin besar massa air, semakin besar pula kalor yang diperlukan. Dengan kata lain, massa berbanding lurus dengan kalor <span class="italic">(m∝Q)</span></p>
   </li>
   <li>
      Percobaan kedua
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/percobaan2.png')}}" alt="image description">
         <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 12 Percobaan II: perbedaan nyala api</figcaption>
      </figure>
      <p>Ketika memanaskan dua panci yang sama-sama berisi segelas air namun yang satu dipanaskan dengan api kecil sedangkan yang lainnya dipanaskan dengan api besar, maka air yang akan lebih cepat mendidih adalah air yang dipanaskan dengan api besar hal ini karena api yang besar memiliki kalor yang lebih besar. Maka, simpulan kedua yaitu semakin besar kalor yang diberikan, semakin besar pula kenaikan suhu yang terjadi. Dengan kata lain, kalor berbanding lurus dengan kenaikan suhu <span class="italic">(Q∝∆T)</span></p>
   </li>
   <li>
      Percobaan ketiga
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/percobaan3.png')}}" alt="image description">
         <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 13 Percobaan III: perbedaan jenis cairan</figcaption>
      </figure>
      <p>Ketika memanaskan dua panci dimana panci pertama berisi minyak dan panci kedua berisi air dengan massa dan panas api yang sama, maka yang akan lebih cepat panas adalah minyak karena minyak memiliki kalor jenis yang lebih kecil daripada air. Maka, simpulan ketiga yaitu semakin besar kalor jenis, semakin besar pula kalor yang diperlukan. Dengan kata lain, kalor jenis berbanding lurus dengan kalor <span class="italic">(c∝Q)</span></p>
   </li>
</ul>

<ol>
   <li>
      <strong>Kalor Jenis dan Kapasitas Kalor</strong>
      <p>
         Jumlah kalor yang dibutuhkan untuk menaikkan suhu 1 kg suatu zat sebesar 1 K dikenal dengan istilah kalor jenis. Dengan kata lain, kalor jenis menunjukkan kemampuan suatu benda dalam menyerap kalor dimana semakin kecil kalor jenis suatu benda, maka semakin kecil pula kemampuan benda tersebut dalam menyerap kalor. Pada gambar 9 berikut disajikan nilai kalor jenis pada beberapa zat.
      </p>
      <figure class="h-auto max-w-xs mx-auto">
         <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Tabel 3 Kalor jenis</figcaption>
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/gambar9.png')}}" alt="image description">
      </figure>
      <p>Dari percobaan dan penjelasan di atas, maka diperoleh persamaan kalor jenis sebagai berikut.</p>
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/rumuskalor.png')}}" alt="image description">
      </figure>
      <p>
         Dengan:<br>
         <span class="italic  text-black">
         c   =kalor jenis (J⁄Kg°C)<br>
         m =massa zat (kg)<br>
         ∆T=Perubahan suhu (K)<br>
         Q  =banyak kalor yang diterima atau dilepas (J)<br>
         </span>
         Persamaan di atas didapatkan dari beberapa percobaan, sebagai berikut.<br>
      </p>
      
      <p>Lain daripada itu, jumlah kalor yang dibutuhkan atau dilepaskan apabila suhu benda tersebut dinaikkan atau diturunkan sebesar 1 K atau 1oC disebut dengan istilah kapasitas kalor. Secara matematis, kapasitas kalor didefinisikan dengan persamaan sebagai berikut.</p>
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/rumuskapasitaskalor.png')}}" alt="image description">
      </figure>
      <p>
         Dengan:<br>
         <span class="italic  text-black">
            C   =kapasitas kalor (J⁄K)<br>
         </span>
      </p>


   </li>
   <li>
      <strong>Azas Black</strong>
      <p>Pada tahun 1760, Joseph Black seorang ahli kimia-fisika yang berasal dari Skotlandia, menemukan bahwa ketika dua zat dicampurkan, maka banyaknya kalor yang dilepas oleh zat dengan suhu yang lebih tinggi akan sama banyaknya dengan kalor yang diterima oleh zat dengan suhu yang lebih rendah, azas inilah yang sering dikenal dengan istilah azas Black. Secara matematis, pernyataan ini direpresentasikan dengan persamaan sebagai berikut.</p>
      <p class="text-center text-black italic">Q<sub>lepas</sub>=Q<sub>terima</sub></p>
      <p>Perlu diingat, bahwa ketika zat melepaskan kalor maka suhunya akan turun dan ketika zat menerima kalor maka suhunya akan naik, sehingga:</p>
      <p class="text-center italic text-black">
         Q<sub>lepas</sub> = Q<sub>terima</sub><br>
         m<sub>1</sub>.c<sub>1</sub>.∆T<sub>1</sub> =m <sub>2</sub>.c<sub>2</sub>.∆T<sub>2</sub><br>
         m<sub>1</sub>.c<sub>1</sub>.(T<sub>1</sub>-T<sub>c</sub>) = m<sub>2</sub>.c<sub>2</sub>.(T<sub>c</sub>-T<sub>2</sub>)<br>
      </p>
      <p>
         Dengan<br>
         <span class="italic text-black">
            m<sub>1</sub> = massa benda 1 yang suhunya tinggi (kg)<br>
            m<sub>2</sub> = massa benda 2 yang suhunya rendah (kg)<br>
            c<sub>1</sub> = kalor jenis benda 1 (J⁄Kg°C)<br>
            c<sub>2</sub> = kalor jenis benda 2 (J⁄Kg°C)<br>
            T<sub>1</sub> = suhu mula-mula benda 1 (°C atau K)<br>
            T<sub>2</sub> = suhu mula-mula benda 2 (°C atau K)<br>
            T<sub>c</sub> = suhu mula-mula benda campuran (°C atau K)<br>
         </span>
      </p><br>

   </li>
   <li>
      <strong>Perubahan Wujud Zat</strong>
      <p>
         Perubahan wujud zat dapat terjadi karena penerimaan atau pelepasan kalor suatu zat, dimana:
      </p>
      <ul>
         <li>
            <p>
               Penyerapan kalor<br>
               Penyerapan kalor dapat menaikkan suhu dan mengubah wujud zat baik dari padat menjadi cair ataupun dari cair menjadi gas
            </p>
         </li>
         <li>
            <p>
               Pelepasan kalor<br>
               Pelepasan kalor dapat menurunkan suhu dan mengubah wujud zat baik dari gas menjadi cair ataupun dari cair menjadi padat.
            </p>
         </li>
      </ul>
      <p>Dalam hal ini, kalor yang diserap atau dilepaskan suatu zat, digunakan bukan untuk menaikkan ataupun menurunkan suhu zat tersebut, tetapi digunakan untuk mengubah wujudnya. Kalor yang dibutuhkan suatu benda untuk mengubah wujudnya per satuan massa ini disebut kalor laten. Secara matematis, kalor laten didefinisikan dengan persamaan sebagai berikut.</p>
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/rumuskalorlaten.png')}}" alt="image description">
      </figure>
      <p>
         Dengan:<br>
         <span class="italic text-black">
         L   =kalor laten (J⁄Kg)<br>
         </span>
         Perubahan wujud zat terbagi menjadi 6 macam yang dijelaskan pada gambar 14 berikut.
      </p>
      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/padatcairgas.jpg')}}" alt="image description">
         <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 14 Padat-cair-gas</figcaption>
      </figure>

      <ol>
         <li>
            Mencair
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JmTey615No4?si=dPxpSClPf7Qk649U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p>Mencair merupakan proses penyerapan kalor pada molekul-molekul rapat yang menyebabkan molekul-molekul tersebut berubah menjadi renggang sehingga terjadi perubahan wujud dari zat padat menjadi cair. Contohnya yaitu pada es batu yang didiamkan pada suhu ruang maka lama-lama akan mencair serta coklat batang yang dipanaskan maka lama-lama akan mencair. </p>
         </li>
         <li>
            Membeku
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JmTey615No4?si=WOulsoDByCkj-7YT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p>Membeku merupakan proses pelepasan kalor pada molekul-molekul renggang yang menyebabkan molekul-molekul tersebut berubah menjadi rapat sehingga terjadi perubahan wujud dari zat cair menjadi gas. Contohnya yaitu pada cairan agar-agar yang didinginkan maka lama-lama akan membeku serta cairan lelehan lilin yang didiamkan maka lama-lama akan kembali mengeras. </p>
         </li>
         <li>
            Menguap
            <iframe width="560" height="315" src="https://www.youtube.com/embed/F3C99JBmTBQ?si=6Q0gjEVLsSxCj-ZT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p>Menguap merupakan proses penyerapan kalor pada molekul-molekul renggang yang menyebabkan molekul-molekul tersebut berubah menjadi sangat renggang sehingga terjadi perubahan wujud dari zat cair menjadi gas. Contohnya yaitu pada air yang direbus maka lama-lama akan habis karena berubah menjadi gas serta cairan spirtus yang didiamkan di tempat terbuka maka lama-lama akan habis karena berubah menjadi gas. </p>
         </li>
         <li>
            Mengembun
            <iframe width="560" height="315" src="https://www.youtube.com/embed/F3C99JBmTBQ?si=4YHr7b-x_iVYTPBY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p>Mengembun merupakan proses pelepasan kalor pada molekul-molekul sangat renggang yang menyebabkan molekul-molekul tersebut berubah menjadi renggang sehingga terjadi perubahan wujud dari zat gas menjadi cair. Contohnya yaitu pada embun di pagi hari serta peristiwa terjadinya hujan. </p>
         </li>
         <li>
            Menyublim
            <iframe width="560" height="315" src="https://www.youtube.com/embed/oxpLO68Z3bQ?si=Ml7B59tmcnOtSvkg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p>Menyublim merupakan proses penyerapan kalor pada molekul-molekul rapat yang menyebabkan molekul-molekul tersebut berubah menjadi sangat renggang sehingga terjadi perubahan wujud dari zat padat menjadi gas. Contohnya yaitu pada kapur barus yang lama-lama akan habis. </p>
         </li>
         <li>
            Mengkristal
            <iframe width="560" height="315" src="https://www.youtube.com/embed/oxpLO68Z3bQ?si=YWZtfRlUGQ7JxLjt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p>Mengkristal merupakan proses pelepasan kalor pada molekul-molekul sangat renggang yang menyebabkan molekul-molekul tersebut berubah menjadi rapat sehingga terjadi perubahan wujud dari zat cair menjadi gas. Contohnya yaitu pada uap air yang berubah menjadi salju pada musim dingin di daerah bagian </p>
         </li>
      </ol>


      <p>Perubahan wujud zat juga dapat dijelaskan melalui grafik berikut ini.</p>

      <figure class="h-auto max-w-xs mx-auto">
         <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/gambar10.png')}}" alt="image description">
         <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Gambar 15 Perubahan wujud</figcaption>
      </figure>
      <p>
         Dimana, Q<sub>1</sub> biasanya berbentuk zat padat (misalnya: es), kemudian pada Q<sub>2</sub> zat tersebut melebur, sehingga pada Q<sub>3</sub> zat berubah wujud dari yang sebelumnya berupa zat padat menjadi zat cair (misalnya: air). Kemudian, pada Q<sub>3</sub> zat cair tersebut menguap ketika dipanaskan, sehingga pada Q<sub>4</sub> zat berubah wujud dari yang sebelumnya berupa zat cair menjadi zat gas (misalnya: uap). Setiap proses ini, dapat kita hitung besar kalornya dengan menggunakan persamaan-persamaan seperti yang ada pada gambar 10.<br>
         Cobalah!
      </p>
      <ol>
         <li>
            Siapkanlah beberapa buah es batu, kemudian simpan es tersebut pada suhu ruang selama 15 menit. Apa yang terjadi?
         </li>
         <li>
            Ukurlah suhu zat yang terbentuk pada langkah 1, diamkanlah selama 30 menit pada suhu ruang, kemudian ukur kembali suhu pada zat tersebut. Apa yang terjadi?
         </li>
         <li>
            Ukurlah massa zat yang terbentuk pada langkah 1, panaskan selama 15 menit pada api sedang, kemudian ukur kembali massa pada zat tersebut. Apa yang terjadi?
         </li>
      </ol>

      
   </li>
</ol>

<div class="flex justify-between py-6">
   <!-- Previous Button -->
   <a href="{{ route('contohsoalsuhu') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
       <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
       </svg>
       Sebelumnya
   </a>

   <!-- Next Button -->
   <form action="/plusmiles6" method="POST">
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