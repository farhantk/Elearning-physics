<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <div class="max-w-lg mx-auto">
            <a href="{{ route('main') }}">
                <h2 class="ms-3 text-xl text-slate-950 font-semibold my-3">Suhu & Kalor</h2>
            </a>
        </div>
       <ul class="space-y-2 font-medium pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
          <li>
             <a href="{{ route('glosarium') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                @if($miles==1)
                    <!-- Process -->
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                    </svg>
                      
                    <span class="ms-3">Glosarium</span>
                @else
                    <!-- Check -->
                    <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg>  
                    <span class="ms-3">Glosarium</span>
                @endif
                
             </a>
          </li>
          <li>
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-suhu" data-collapse-toggle="dropdown-suhu">
                @if($miles>=6)
                    <!-- Check -->
                    <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg> 
                    
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Suhu</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                @endif
                @if($miles>=2 && $miles<=5)
                    <!-- Process -->
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                    </svg> 
                    
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Suhu</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                @endif
                @if($miles<2)
                    <!-- Lock -->
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                    </svg>
                                      
                    
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Suhu</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                @endif
            </button>
          <ul id="dropdown-suhu" class="hidden py-2 space-y-2">
                <li>
                    @if($miles==2)
                    <a href="{{ route('skalasuhu') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">1. Skala Suhu </span>
                    </a>
                    @endif
                    @if($miles>=3)
                    <a href="{{ route('skalasuhu') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">1. Skala Suhu </span>
                    </a>
                    @endif
                    @if($miles < 2)
                    <a href="{{ route('skalasuhu') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">1. Skala Suhu </span>
                    </a>
                    @endif
                </li>
               <li>
                   @if($miles==3)
                    <a href="{{ route('termometer') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">2. Termometer </span>
                    </a>
                    @endif
                    @if($miles>=4)
                    <a href="{{ route('termometer') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">2. Termometer </span>
                    </a>
                    @endif
                    @if($miles<3)
                    <a href="{{ route('termometer') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">2. Termometer </span>
                    </a>
                    @endif
               </li>
               <li>
                   @if($miles==4)
                    <a href="{{ route('contohsoalsuhu') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles>=5)
                    <a href="{{ route('contohsoalsuhu') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles<4)
                    <a href="{{ route('contohsoalsuhu') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Contoh Soal</span>
                    </a>
                    @endif
               </li>
               <li>
                    @if($miles==5 && $grade == -1)
                    <a href="{{ route('quizsuhu') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                    @if($miles==5 && $grade != -1 && $grade < 75)
                    <a href="{{ route('quizsuhu') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- alert -->
                        <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>  
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                    @if($miles>=6 )
                    <a href="{{ route('quizsuhu') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                    @if($miles<5)
                    <a href="{{ route('quizsuhu') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
               </li>
          </ul>
         </li>
          <li>
             <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-kalor" data-collapse-toggle="dropdown-kalor">
                @if($miles>=14)
                    <!-- Check -->
                    <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                    </svg> 
                    
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Kalor</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                @endif
                @if($miles>=6 && $miles<=13)
                    <!-- Process -->
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                    </svg> 
                    
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Kalor</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                @endif
                @if($miles<6)
                    <!-- Lock -->
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                    </svg>
                                      
                    
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Kalor</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                @endif
            </button>
            
           <ul id="dropdown-kalor" class="hidden py-2 space-y-2">
                <li>
                    @if($miles==6)
                    <a href="{{ route('pengaruhkalorpadazat') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">1. Pengaruh Kalor <br> pada Zat</span>
                    </a>
                    @endif
                    @if($miles>=7)
                    <a href="{{ route('pengaruhkalorpadazat') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">1. Pengaruh Kalor <br> pada Zat</span>
                    </a>
                    @endif
                    @if($miles<6)
                    <a href="{{ route('pengaruhkalorpadazat') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">1. Pengaruh Kalor <br> pada Zat</span>
                    </a>
                    @endif
                </li>
                <li>
                    @if($miles==7)
                    <a href="{{ route('contohsoalkalor1') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles>=8)
                    <a href="{{ route('contohsoalkalor1') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles<7)
                    <a href="{{ route('contohsoalkalor1') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Contoh Soal</span>
                    </a>
                    @endif
                </li>
                <li>
                    @if($miles==8 && $grade == -1)
                    <a href="{{ route('quizkalor1') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                    @if($miles==8 && $grade != -1 && $grade < 75)
                    <a href="{{ route('quizkalor1') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- alert -->
                        <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>  
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                    @if($miles>=9)
                    <a href="{{ route('quizkalor1') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                    @if($miles<8)
                    <a href="{{ route('quizkalor1') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                </li>
                <li>
                    @if($miles==9)
                    <a href="{{ route('pemuaianzat') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">2. Pemuaian Zat</span>
                    </a>
                    @endif
                    @if($miles>=10)
                    <a href="{{ route('pemuaianzat') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">2. Pemuaian Zat</span>
                    </a>
                    @endif
                    @if($miles<9)
                    <a href="{{ route('pemuaianzat') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">2. Pemuaian Zat</span>
                    </a>
                    @endif
                </li>
                <li>
                    @if($miles==10 && $grade == -1)
                    <a href="{{ route('quizkalor2') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                    @if($miles==10 && $grade != -1 && $grade < 75)
                    <a href="{{ route('quizkalor2') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- alert -->
                        <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>  
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                    @if($miles>=11)
                    <a href="{{ route('quizkalor2') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                    @if($miles<10)
                    <a href="{{ route('quizkalor2') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                </li>
                <li>
                    @if($miles==11)
                    <a href="{{ route('perpindahankalor') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">3. Perpindahan Kalor</span>
                    </a>
                    @endif
                    @if($miles>=12)
                    <a href="{{ route('perpindahankalor') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">3. Perpindahan Kalor</span>
                    </a>
                    @endif
                    @if($miles<11)
                    <a href="{{ route('perpindahankalor') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">3. Perpindahan Kalor</span>
                    </a>
                    @endif
                </li>
                <li>
                    @if($miles==12)
                    <a href="{{ route('contohsoalkalor3') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles>=13)
                    <a href="{{ route('contohsoalkalor3') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <span class="flex-1 ms-3 whitespace-nowrap">Contoh Soal</span>
                    </a>
                    @endif
                    @if($miles<12)
                    <a href="{{ route('contohsoalkalor3') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Contoh Soal</span>
                    </a>
                    @endif
                </li>
                <li>

                    @if($miles==13 && $grade == -1)
                    <a href="{{ route('quizkalor3') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                    @if($miles==13 && $grade != -1 && $grade < 75)
                    <a href="{{ route('quizkalor3') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- alert -->
                        <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>  
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                    @if($miles>=14)
                    <a href="{{ route('quizkalor3') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Check -->
                        <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                    @if($miles<13)
                    <a href="{{ route('quizkalor3') }}" class="font-normal flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                        <h3 class="flex-1 ms-3 whitespace-nowrap">Quiz</h3>
                    </a>
                    @endif
                </li>
           </ul>
          </li>
          <li>
            @if($miles==14)
            <a href="{{ route('evaluasi') }}" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" disabled>
                <!-- Process -->
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                </svg> 
                <h3 class="flex-1 ms-3 whitespace-nowrap">Evaluasi</h3>
            </a>
            @endif
            @if($miles>=15)
            <a href="{{ route('evaluasi') }}" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" disabled>
                <!-- Check -->
                <svg class="w-5 h-5 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                </svg> 
                <h3 class="flex-1 ms-3 whitespace-nowrap">Evaluasi</h3>
            </a>
            @endif
            @if($miles<14)
            <a href="{{ route('evaluasi') }}" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" disabled>
                <!-- Lock -->
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                </svg>
                <h3 class="flex-1 ms-3 whitespace-nowrap">Evaluasi</h3>
            </a>
            @endif
         </li>
       </ul>
    </div>
 </aside>