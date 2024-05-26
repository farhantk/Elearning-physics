@extends('layouts/layout')
@section('content')

<h1>Contoh Soal 1</h1>
<p>Suatu logam kuningan mempunyai koefisien muai panjang 1,9 × 10<sup>-6</sup>/°C. Batang kuningan sepanjang 40cm dipanaskan sampai suhu 130°C. Apabila suhu awal batang kuningan 30°C, maka berapakah panjang batang kuningan yang sekarang?</p>
<p class="lead">Pembahasan</p>
<p>
   <span class="underline underline-offset-1">Diketahui:</span><br>
   <span class="italic text-black">
   L<sub>0</sub> = 40 cm<br>
   ∆T = 130-30 = 100℃<br>
   α = 1,9×10<sup>-6</sup>/°C<br>
   </span>
   <span class="underline underline-offset-1">Ditanyakan:</span><br>
   <span class="italic text-black">
   L<sub>t</sub> = ?<br>
   </span>
   <span class="underline underline-offset-1">Jawab:</span><br>
</p>
<p class="text-center italic text-black">
   ∆L = α.L<sub>0</sub>.∆T<br>
   ∆L = (1,9×10<sup>-6</sup> )(40)(100)<br>
   ∆L = 76×10<sup>-4</sup> = 0,0076 cm<br>
   L<sub>t</sub> = ∆L+ L<sub>0</sub> <br>
   L<sub>t</sub> = (0,0076)+40<br>
   L<sub>t</sub> = 40,0076 cm<br>
</p>

<h1>Contoh Soal 2</h1>

<p>Pada suhu 30°C sebuah pelat besi luasnya 10 m<sup>2</sup>. Apabila suhunya dinaikkan menjadi 90°C dan koefisien muai panjang besi sebesar 0,000012/°C, maka tentukanlah luas pelat besi tersebut!</p>

<p class="lead">Pembahasan</p>
<p>
   <span class="underline underline-offset-1">Diketahui:</span><br>
   <span class="italic text-black">
   A<sub>0</sub> = 10 m<sup>2</sup> <br>
   ∆T = 90-30 = 60℃<br>
   α = 0,000012/℃<br>
   β = 2α = 0,000024/℃<br>
   </span>
   <span class="underline underline-offset-1">Ditanyakan: A<sub>t</sub> = ?<br>
   <span class="underline underline-offset-1">Jawab:</span>
</p>
<p class="text-center leading-normal italic text-black">
   ∆A = β.A<sub>0</sub>.∆T<br>
   ∆A = (24×10<sup>-6</sup> )(10)(60)<br>
   ∆A = 144×10<sup>-4</sup> = 0,0144 m<br>
   A<sub>t</sub> = ∆A+A<sub>0</sub><br>
   A<sub>t</sub> = (0,0144)+10<br>
   A<sub>t</sub> = 10,0144 m<sup>2</sup><br>
</p>
<h1>Contoh Soal 3</h1>

<p>Suatu bejana mempunyai volume 1 liter pada suhu 25°C. Apabila koefisien muai panjang bejana 2 × 10<sup>-5</sup>/°C, maka tentukan volume bejana pada suhu 75°C!</p>

<p class="lead">Pembahasan</p>
<p>
   <span class="underline underline-offset-1">Diketahui:</span><br>
   <span class="italic text-black">
   V<sub>0</sub> = 1 L<br>
   ∆T = 75-25 = 50℃<br>
   α = 2×10<sup>-5</sup>/℃<br>
   γ = 3α = 6×10<sup>-5</sup>/℃<br>
   </span>
   <span class="underline underline-offset-1">Ditanyakan: V<sub>t</sub> = ?<br>
   <span class="underline underline-offset-1">Jawab:</span>
</p>
<p class="text-center leading-normal italic text-black">
   ∆V = γ.V<sub>0</sub>.∆T<br>
   ∆V = (6×10<sup>-5</sup>)(1)(50)<br>
   ∆V = 3×10<sup>-3</sup> = 0,003 L<br>
   V<sub>t</sub> = ∆V+V<sub>0</sub><br>
   V<sub>t</sub> = (0,003)+1<br>
   V<sub>t</sub> = 1,003 L<br>
</p>



<div class="flex justify-between py-6">
   <!-- Previous Button -->
   <a href="{{ route('pemuaianzat') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
       <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
       </svg>
       Sebelumnya
   </a>

   <!-- Next Button -->
   <form action="/plusmiles91" method="POST">
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