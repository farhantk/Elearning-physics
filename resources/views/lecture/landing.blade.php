@extends('layouts.main')
@extends('layouts.nav')


<div class="container  mx-auto p-4 flex justify-center">
   <div class="p-4 mt-14 mx-auto">
      <div class="w-full p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
         <figure class="h-auto max-w-xs mx-auto my-10">
            <img class=" mx-auto rounded-lg" src="{{URL::asset('/image/1.png')}}" alt="image description">
         </figure>

         
         <p class="mb-3 text-gray-500 dark:text-gray-400">Heatify adalah singkatan dari ‘heat and intensify’. Kata ‘heat’ merujuk pada salah satu materi fisika yaitu suhu dan kalor. Sedangkan, kata ‘intensify’ merujuk pada pendalaman pemahaman dan peningkatan pengetahuan yang selaras dengan tujuan pembuatan website.</p>
         <p class="mb-3 text-gray-500 dark:text-gray-400">Heatify menjadi sebuah wadah yang dapat mengakomodasi keragaman gaya dan kecepatan belajar siswa atau pengguna lainnya untuk mempelajari materi suhu dan kalor, sehingga diperoleh pendalaman pemahaman dan peningkatan pengetahuan yang lebih maksimal.</p>
         <p class="mb-8 text-gray-500 dark:text-gray-400">Website ini akan mengarahkan kamu untuk mempelajari materinya satu-persatu, sehingga kamu tidak bisa membuka materi lainnya sebelum kamu menyelesaikan materi dan menjawab kuis sebelumnya dengan benar. Jadi, pahami materinya dengan baik dan jangan terburu-buru, ya!</p>
         <p class="text-black text-center text-2xl font-bold">Selamat belajar dengan heatify, ya!</p>
         <div class="flex justify-center py-6">
            <!-- Next Button -->
            <a href="{{ route('main') }}" class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-white bg-primary border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
               Mulai sekarang!
           </a>
        </div>
        
      </div>
   </div>
   
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#233567" fill-opacity="1" d="M0,32L30,69.3C60,107,120,181,180,192C240,203,300,149,360,144C420,139,480,181,540,197.3C600,213,660,203,720,176C780,149,840,107,900,106.7C960,107,1020,149,1080,181.3C1140,213,1200,235,1260,245.3C1320,256,1380,256,1410,256L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
