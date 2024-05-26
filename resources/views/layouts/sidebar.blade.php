@php
    $maxAttemptForQuiz1 = $user->attempt()->where('quiz_number', 1)->orderBy('grade', 'desc')->first();
    if ($maxAttemptForQuiz1) {
        $grade1 = $maxAttemptForQuiz1->grade;
    }else{
        $grade1 = -1; 
    }
    $maxAttemptForQuiz2 = $user->attempt()->where('quiz_number', 2)->orderBy('grade', 'desc')->first();
    if ($maxAttemptForQuiz2) {
        $grade2 = $maxAttemptForQuiz2->grade;
    }else{
        $grade2 = -1; 
    }
    $maxAttemptForQuiz3 = $user->attempt()->where('quiz_number', 3)->orderBy('grade', 'desc')->first();
    if ($maxAttemptForQuiz3) {
        $grade3 = $maxAttemptForQuiz3->grade;
    }else{
        $grade3 = -1; 
    }
    $maxAttemptForQuiz4 = $user->attempt()->where('quiz_number', 4)->orderBy('grade', 'desc')->first();
    if ($maxAttemptForQuiz4) {
        $grade4 = $maxAttemptForQuiz4->grade;
    }else{
        $grade4 = -1; 
    }
    $maxAttemptForQuiz5 = $user->attempt()->where('quiz_number', 5)->orderBy('grade', 'desc')->first();
    if ($maxAttemptForQuiz5) {
        $grade5 = $maxAttemptForQuiz5->grade;
    }else{
        $grade5 = -1; 
    }
@endphp





<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen  transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pt-20 overflow-auto bg-primary dark:bg-gray-800">
        <div class="max-w-lg mx-auto">
            <a href="{{ route('main') }}">
                <h2 class="ms-3 text-xl text-white font-semibold my-3">Suhu & Kalor</h2>
            </a>
        </div>
       <ul class=" font-medium pt-4 mt-4 space-y-2 font-medium border-t hover:text-primary border-gray-200 dark:border-gray-700">
            <li class="text-white hover:text-primary">
                <a href="{{ route('main') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                @if($miles==1)
                    <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                    </svg>
                    <span class="ms-3">Peta Konsep</span>
                @else
                    <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg>
                    <span class="ms-3">Peta Konsep</span>
                @endif
                </a>
            </li>
          <li class="text-white hover:text-primary stroke-white hover:stroke-black ">
            <button type="button" class="stroke-white hover:stroke-black text-white hover:text-primary flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 aria-controls="dropdown-suhu" data-collapse-toggle="dropdown-suhu">
                @if($miles>=6)
                    <!-- Check -->
                    <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg> 
                    
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Suhu</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                @endif
                @if($miles>=2 && $miles<=5)
                    <!-- Process -->
                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                    </svg> 
                    
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Suhu</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                @endif
                @if($miles<2)
                    <!-- Lock -->
                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                    </svg>
                                      
                    
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Suhu</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                @endif
            </button>
          <ul id="dropdown-suhu" class="hidden py-2 ps-5 space-y-2">
                <li class="text-white hover:text-primary">
                    @if($miles==2)
                    <a href="{{ route('skalasuhu') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">1. Skala Suhu </span>
                    </a>
                    @endif
                    @if($miles>=3)
                    <a href="{{ route('skalasuhu') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">1. Skala Suhu </span>
                    </a>
                    @endif
                    @if($miles < 2)
                    <a href="{{ route('skalasuhu') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">1. Skala Suhu </span>
                    </a>
                    @endif
                </li>
               <li class="text-white hover:text-primary">
                   @if($miles==3)
                    <a href="{{ route('termometer') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">2. Termometer </span>
                    </a>
                    @endif
                    @if($miles>=4)
                    <a href="{{ route('termometer') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">2. Termometer </span>
                    </a>
                    @endif
                    @if($miles<3)
                    <a href="{{ route('termometer') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">2. Termometer </span>
                    </a>
                    @endif
               </li>
               <li class="text-white hover:text-primary">
                   @if($miles==4)
                    <a href="{{ route('contohsoalsuhu') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles>=5)
                    <a href="{{ route('contohsoalsuhu') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles<4)
                    <a href="{{ route('contohsoalsuhu') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">Contoh Soal</span>
                    </a>
                    @endif
               </li>
               <li class="text-white hover:text-primary">
                    @if($miles==5 && $grade1 == -1)
                    <a href="{{ route('quizsuhu') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                    @if($miles==5 && $grade1 != -1 && $grade1 < 75)
                    <a href="{{ route('quizsuhu') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- alert -->
                        <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>  
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                    @if($miles>=6 )
                    <a href="{{ route('quizsuhu') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                    @if($miles<5)
                    <a href="{{ route('quizsuhu') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
               </li>
          </ul>
         </li>
          <li class="text-white hover:text-primary stroke-white hover:stroke-black ">
             <button type="button" class="stroke-white hover:stroke-black  text-white hover:text-primary flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-kalor" data-collapse-toggle="dropdown-kalor">
                @if($miles>=14)
                    <!-- Check -->
                    <svg class="w-5 h-5 text-gray-100 bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg> 
                    
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Kalor</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>

                    </svg>
                @endif
                @if($miles>=6 && $miles<=13)
                    <!-- Process -->
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                    </svg> 
                    
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Kalor</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                @endif
                @if($miles<6)
                    <!-- Lock -->
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                    </svg>
                                      
                    
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Kalor</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                @endif
            </button>
            
           <ul id="dropdown-kalor" class="hidden py-2 ps-5 space-y-2">
                <li class="text-white hover:text-primary">
                    @if($miles==6)
                    <a href="{{ route('pengaruhkalorpadazat') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">1. Pengaruh Kalor <br> pada Zat</span>
                    </a>
                    @endif
                    @if($miles>=7)
                    <a href="{{ route('pengaruhkalorpadazat') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">1. Pengaruh Kalor <br> pada Zat</span>
                    </a>
                    @endif
                    @if($miles<6)
                    <a href="{{ route('pengaruhkalorpadazat') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">1. Pengaruh Kalor <br> pada Zat</span>
                    </a>
                    @endif
                </li>
                <li class="text-white hover:text-primary">
                    @if($miles==7)
                    <a href="{{ route('contohsoalkalor1') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles>=8)
                    <a href="{{ route('contohsoalkalor1') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles<7)
                    <a href="{{ route('contohsoalkalor1') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">Contoh Soal</span>
                    </a>
                    @endif
                </li>
                <li class="text-white hover:text-primary">
                    @if($miles==8 && $grade2 == -1)
                    <a href="{{ route('quizkalor1') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                    @if($miles==8 && $grade2 != -1 && $grade2 < 75)
                    <a href="{{ route('quizkalor1') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- alert -->
                        <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>  
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                    @if($miles>=9)
                    <a href="{{ route('quizkalor1') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                    @if($miles<8)
                    <a href="{{ route('quizkalor1') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                </li>
                <li class="text-white hover:text-primary">
                    @if($miles==9)
                    <a href="{{ route('pemuaianzat') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">2. Pemuaian Zat</span>
                    </a>
                    @endif
                    @if($miles>=10)
                    <a href="{{ route('pemuaianzat') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">2. Pemuaian Zat</span>
                    </a>
                    @endif
                    @if($miles<9)
                    <a href="{{ route('pemuaianzat') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">2. Pemuaian Zat</span>
                    </a>
                    @endif
                </li>
                <li class="text-white hover:text-primary">
                    @if($miles==10)
                    <a href="{{ route('contohsoalpemuaianzat') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles>=11)
                    <a href="{{ route('contohsoalpemuaianzat') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles<10)
                    <a href="{{ route('contohsoalpemuaianzat') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">Contoh Soal</span>
                    </a>
                    @endif
                </li>
                <li class="text-white hover:text-primary">
                    @if($miles==11 && $grade3 == -1)
                    <a href="{{ route('quizkalor2') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                    @if($miles==11 && $grade3 != -1 && $grade3 < 75)
                    <a href="{{ route('quizkalor2') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- alert -->
                        <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>  
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                    @if($miles>=12)
                    <a href="{{ route('quizkalor2') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                    @if($miles<11)
                    <a href="{{ route('quizkalor2') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                </li>
                <li class="text-white hover:text-primary">
                    @if($miles==12)
                    <a href="{{ route('perpindahankalor') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">3. Perpindahan Kalor</span>
                    </a>
                    @endif
                    @if($miles>=13)
                    <a href="{{ route('perpindahankalor') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">3. Perpindahan Kalor</span>
                    </a>
                    @endif
                    @if($miles<12)
                    <a href="{{ route('perpindahankalor') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">3. Perpindahan Kalor</span>
                    </a>
                    @endif
                </li>
                <li class="text-white hover:text-primary">
                    @if($miles==13)
                    <a href="{{ route('contohsoalkalor3') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles>=14)
                    <a href="{{ route('contohsoalkalor3') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles<13)
                    <a href="{{ route('contohsoalkalor3') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">Contoh Soal</span>
                    </a>
                    @endif
                </li>
                <li class="text-white hover:text-primary">

                    @if($miles==14 && $grade4 == -1)
                    <a href="{{ route('quizkalor3') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                    @if($miles==14 && $grade4 != -1 && $grade4 < 75)
                    <a href="{{ route('quizkalor3') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- alert -->
                        <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>  
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                    @if($miles>=15)
                    <a href="{{ route('quizkalor3') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                    @if($miles<14)
                    <a href="{{ route('quizkalor3') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="ms-3">Quiz</h3>
                    </a>
                    @endif
                </li>
           </ul>
          </li>
          <li class="text-white hover:text-primary">
            @if($miles==15)
            <a href="{{ route('evaluasi') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group" disabled>
                <!-- Process -->
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                </svg> 
                <span class="ms-3">Evaluasi</h3>
            </a>
            @endif
            @if($miles>=16)
            <a href="{{ route('evaluasi') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group" disabled>
                <!-- Check -->
                <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                </svg> 
                <span class="ms-3">Evaluasi</h3>
            </a>
            @endif
            @if($miles<15)
            <a href="{{ route('evaluasi') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group" disabled>
                <!-- Lock -->
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                </svg>
                <span class="ms-3">Evaluasi</h3>
            </a>
            @endif
         </li>
          <li class="text-white hover:text-primary">

            @if($miles>=16)
            <a href="{{ route('rangkuman') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group" disabled>
                <!-- Check -->
                <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                </svg> 
                <span class="ms-3">Rangkuman</h3>
            </a>
            @endif
            @if($miles<16)
            <a href="{{ route('rangkuman') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group" disabled>
                <!-- Lock -->
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                </svg>
                <span class="ms-3">Rangkuman</h3>
            </a>
            @endif
         </li>
         <li class="text-white hover:text-primary">
            <a href="{{ route('glosarium') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
              @if($miles==1)
                <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                </svg>
                <span class="ms-3">Glosarium</span>
              @else
                <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                </svg>
                <span class="ms-3">Glosarium</span>
              @endif
            </a>
          </li>

         <li class="text-white hover:text-primary">
            <a href="{{ route('daftarpustaka') }}" class="flex items-center p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 group">
              @if($miles==1)
                <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="white" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                </svg>
                <span class="ms-3">Daftar Pustaka</span>
              @else
                <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                </svg>
                <span class="ms-3">Daftar Pustaka</span>
              @endif
            </a>
          </li>
       </ul>
    </div>
 </aside>