@extends('layouts/layout')
@section('content')



<div class="w-full p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
   <h1 class="mb-2 text-3xl font-bold text-center text-gray-900 dark:text-white">Daftar Pustaka</h1>
   <ul>
      <li>
         <p>
            Kusrini. (2020). <span class="italic">Modul Pembelajaran SMA: Fisika.</span> Jakarta: Kementerian Pendidikan dan Kebudayaan.
         </p>
      </li>
      <li>
         <p>
            Liyan, Yulia. MODUL: Kalor, Pengaruh Pada Benda dan Perpindahannya Sekolah Menengah Atas Kelas X Semester 2. 2015. Surakarta: UNS.
         </p>
      </li>
      <li>
         <p>
            Marthen Kanginan. 2007. Fisika untuk SMA Kelas X Semester 2. Jakarta: Erlangga Nurchmandani, setya. 2009. Fisika 1 untuk SMA/ Ma Kelas X Jakarta: Deperteman pendidikan Nasional.
         </p>
      </li>
      <li>
         <p>
            Purwanto, Budi. 2013. Fisika untuk Kelsa X SMA dan MA. Solo: PT Wangsa JAtra Lestari.
         </p>
      </li>
      <li>
         <p>
            Salgado, P.O., dkk. (2016). Physical methods for the treatment of fever in critically ill patients: a randomized controlled trial. Journal of School Nursing USP, 20(5), 823-830.
         </p>
      </li>
      <li>
         <p>
            Serway, Raymond A. dan Jewt, john W.2010. Fisika untuk Sains dan Teknik Buku 2 Edisi 6. Jakarta: salemba teknika.
         </p>
      </li>
      <li>
         <p>
            Setiawan, Wahyu. 2014. <span class="italic">Modul kalor, pengaruh terhadap benda dan perpindahannya.</span> Skripsi. Surakarta: UNS.
         </p>
      </li>
      <li>
         <p>
            Sudibyo, D.G., dkk. (2020). Pengetahuan Ibu dan Cara Penanganan Demam pada Anak. Jurnal Farmasi Komunitas, 7(2), 69-76. Diakses melalui https://e-journal.unair.ac.id/JFK/article/download/21808/11959.
         </p>
      </li>
      <li>
         <p>
            Sumarsono, joko. 2009. Fisika untuk SMA X. Jakarta: Departemen Pendidikan nasiaonal.
         </p>
      </li>
      <li>
         <p>
            Tipler, P. A, 1991. <span class="italic">Fisika untuk Sains dan Teknik,</span> Edisi ketiga, Jilid 1 (diterjemahkan Lea P. dan Rahmat W. Ad.). Jakarta: Erlangga.
         </p>
      </li>
   </ul>

   <div class="flex justify-between py-6">
      <a href="{{ route('glosarium') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
         <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
         </svg>
         Sebelumnya
     </a>
  </div>
  
</div>


@endsection