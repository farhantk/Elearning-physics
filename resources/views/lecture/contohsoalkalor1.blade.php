@extends('layouts/layout')
@section('content')

<h1>Contoh Soal 1</h1>
<p>Air sebanyak 2 kg bersuhu 20°C dipanaskan hingga bersuhu 50°C. Jika diketahui air memiliki kalor jenis sebesar 4.186 J/kg°C, tentukanlah kalor yang diserap oleh air tersebut!</p>

<p class="lead">Pembahasan</p>
<p>
   <span class="underline underline-offset-1">Diketahui:</span><br>
   <span class="italic text-black">
   m =2 kg<br>
   c   =4.186  J⁄(kg°C)<br>
   ∆T=(50-20)°C=30°C<br>
   </span>
   <span class="underline underline-offset-1">Ditanyakan:</span><br>
   <span class="italic text-black">
   Q = ?<br>
   </span>
   <span class="underline underline-offset-1">Jawab:</span><br>
</p>
<p class="text-center italic text-black">
   Q=m.c.∆T<br>
   Q=2 (4.186)(30)<br>
   Q=251.160 J<br>
</p>
<p>Maka, kalor yang diserap oleh air tersebut yaitu sebesar 251.160 J.</p>


<h1>Contoh Soal 2</h1>

<p>Pada sebuah percobaan, air dengan suhu 80°C sebanyak 230 gram, dicampur dengan 20 gram air bersuhu 5°C. Hitunglah menggunakan Asas Black berapa nilai yang terukur? Untuk memastikannya, lakukanlah percobaan ini kemudian ukur suhu campuran air tersebut menggunakan termometer, berapa nilai yang terukur?</p>

<p class="lead">Pembahasan</p>
<p>
   <span class="underline underline-offset-1">Diketahui:</span><br>
   <span class="italic text-black">
   m<sub>1</sub> = 230 gr<br>
   T<sub>1</sub> = 80°C<br>
   m<sub>2</sub> = 20 gr<br>
   T<sub>2</sub> = 5°C<br>
   </span>
   <span class="underline underline-offset-1">Ditanyakan: T<sub>c</sub> = ?<br>
   <span class="underline underline-offset-1">Jawab:</span>
</p>
<p class="text-center leading-normal italic text-black">
   Q<sub>1</sub> = Q<sub>2</sub><br>
   m<sub>1</sub>.c.∆T<sub>1</sub> = m<sub>2</sub>.c.∆T<sub>2</sub><br>
   230 (80-T<sub>c</sub>) = 20(T<sub>c</sub>-5)<br>
   18.400-230T<sub>c</sub> = 20T<sub>c</sub>-100<br>
   18.500 = 250T<sub>c</sub><br>
   T<sub>c</sub> = 74°C<br>
</p>
<p>Maka, suhu air campuran pada saat kesetimbangan termal adalah 74°C</p>

<h1>Contoh Soal 3</h1>

<p>Air dengan suhu 40°C sebanyak 100 gr disiramkan pada balok es yang memiliki suhu sebesar 0°C hingga semua es melebur. Jika diketahui kalor lebur es 0,5 kkal/kg dan kalor jenis air 1 kkal/kg°C, berapakah massa es yang melebur?</p>

<p class="lead">Pembahasan</p>
<p>
   <span class="underline underline-offset-1">Diketahui:</span><br>
   <span class="italic text-black">
   m<sub>air</sub>=100 gr=0,1 kg<br>
   T<sub>air</sub>=40°C<br>
   L=0,5 kkal⁄kg<br>
   c<sub>air</sub>=1 kkal⁄kg°C<br>
   </span>
   <span class="underline underline-offset-1">Ditanyakan: </span>m<sub>es</sub> = ?<br>
   <span class="underline underline-offset-1">Jawab:</span><br>
   Dalam kasus ini, air melepaskan kalor sedangkan es menerima kalor, sehingga
</p>
<p class="text-center leading-normal italic text-black">
   Q<sub>air</sub>= Q<sub>es</sub><br>
   m<sub>air</sub>.c<sub>air</sub>.∆T= m<sub>es</sub>.L<br>
   0,1(1)(40-0)= m<sub>es</sub> (0,5)<br>
   0,5m<sub>es</sub>= 4<br>
   m<sub>es</sub>= 4/0,5<br>
   m<sub>es</sub>= 8 kg<br>
</p>
<p>Maka, massa es yang melebur yaitu sebesar 8 kg</p>

<div class="flex justify-between py-6">
   <!-- Previous Button -->
   <a href="{{ route('pengaruhkalorpadazat') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
       <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
       </svg>
       Sebelumnya
   </a>

   <!-- Next Button -->
   <form action="/plusmiles7" method="POST">
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