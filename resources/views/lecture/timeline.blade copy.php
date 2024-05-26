@extends('layouts.main')
@extends('layouts.nav')
<div class="p-4 flex justify-center">
    <div class="p-4  mt-14 mx-auto">
        <ol class="relative border-s border-gray-200 dark:border-gray-700 -my-6 mt-8">                  
            <li class="mb-10 ms-6">            
                <span class="absolute flex items-center justify-center w-6 h-6 -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    @if($miles==1)
                        <!-- Process -->
                        <svg class="w-6 h-6 bg-white text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg>
                    @else
                        <!-- Check -->
                        <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg>  
                    @endif                     
                </span>
                <a href="{{ route('main') }}">
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Daftar Isi</h3>
                </a>
                <!--<time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 13th, 2022</time>-->
            </li>
            <li class="mb-10 ms-6">
                <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    @if($miles>=6)
                        <!-- Check -->
                        <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                    @endif
                    @if($miles>=2 && $miles<=5)
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                    @endif
                    @if($miles<2)
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                    @endif                      
                </span>
                <a href="{{ route('skalasuhu') }}">
                    <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Suhu</h3>
                </a>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Materi Pertama Buat Kamu.</p>
                <ol class="relative border-s border-gray-200 dark:border-gray-700 -my-6 mt-4 ms-6">                  
                    <li class="mb-10 ms-6">            
                        <span class="absolute flex items-center justify-center w-6 h-6  rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==2)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles>=3)
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif
                            @if($miles < 2)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800  bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                   
                        </span>
                        <a href="{{ route('skalasuhu') }}">
                            <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Skala Suhu</h3>
                        </a>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Ayo cari tahu tentang kelvin, Fahrenheit, dan Celcius.</p>
                    </li>
                    <li class="mb-10 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-green-500 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==3)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles>=4)
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif
                            @if($miles < 3)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800  bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                     
                        </span>
                        <a href="{{ route('termometer') }}">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Termometer</h3>
                        </a>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Kita bisa cek suhu menggunakan apa ya? apakah menggunakan tangan kita?</p>
                    </li>
                    <li class="ms-6 mb-10 ">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-green-500 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==4)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles>=5)
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif
                            @if($miles < 4)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800  bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                     
                        </span>
                        <a href="{{ route('contohsoalsuhu') }}">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Contoh Soal</h3>
                        </a>
                    </li>
                    <li class="ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==5 && $grade1 == -1)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles==5 && $grade1 != -1 && $grade1 < 75)
                                <!-- alert -->
                                <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>  
                            @endif
                            @if($miles>=6 )
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif   
                            @if($miles<5)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                  
                        </span>
                        <a href="{{ route('quizsuhu') }}">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Quiz</h3>
                        </a>
                    </li>
                </ol>
            </li>
            <li class="mb-10 ms-6">
                <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    @if($miles>=14)
                        <!-- Check -->
                        <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                    @endif
                    @if($miles>=6 && $miles<=13)
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                    @endif
                    @if($miles<6)
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                    @endif                     
                </span>
                <a href="{{ route('pengaruhkalorpadazat') }}">
                    <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Kalor</h3>
                </a>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Materi kedua buat kamu.</p>
                <ol class="relative border-s border-gray-200 dark:border-gray-700 -my-6 mt-4  ms-6">                  
                    <li class="mb-10 ms-6">            
                        <span class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==6)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles>=7)
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif
                            @if($miles<6)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                     
                        </span>
                        <a href="{{ route('pengaruhkalorpadazat') }}">
                            <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Pengaruh Kalor pada Zat</h3>
                        </a>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Ayo kita cari tahu apa aja pengaruh kalor terhadap zat.</p>
                    </li>
                    <li class="mb-10 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6  rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==7)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles>=8)
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif
                            @if($miles<7)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                      
                        </span>
                        <a href="{{ route('contohsoalkalor1') }}">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Contoh Soal</h3>
                        </a>
                    </li>
                    <li class="mb-10 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-green-500 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==8 && $grade2 == -1)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles==8 && $grade2 != -1 && $grade2 < 75)
                                <!-- alert -->
                                <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>  
                            @endif
                            @if($miles>=9 )
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif   
                            @if($miles<8)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                        
                        </span>
                        <a href="{{ route('quizkalor1') }}">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Quiz</h3>
                        </a>
                    </li>
                    <li class="mb-10 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6  rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==9)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles>=10)
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif
                            @if($miles<9)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                      
                        </span>
                        <a href="{{ route('pemuaianzat') }}">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Pemuaian Zat</h3>
                        </a>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Kenapa bisa zat memuai? Yuk cari tahu bersama.</p>
                    </li>
                    <li class="mb-10 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6  rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==9)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles>=10)
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif
                            @if($miles<9)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                      
                        </span>
                        <a href="{{ route('contohsoalpemuaianzat') }}">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Contoh Soal</h3>
                        </a>
                    </li>
                    <li class="mb-10 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-green-500 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==10 && $grade3 == -1)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles==10 && $grade3 != -1 && $grade3 < 75)
                                <!-- alert -->
                                <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>  
                            @endif
                            @if($miles>=11 )
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif   
                            @if($miles<10)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                      
                        </span>
                        <a href="{{ route('quizkalor2') }}">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Quiz</h3>
                        </a>
                    </li>
                    <li class="mb-10 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6  rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==11)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles>=12)
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif
                            @if($miles<11)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                      
                        </span>
                        <a href="{{ route('perpindahankalor') }}">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Perpindahan Kalor</h3>
                        </a>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Ternyata bukan cuma kita loh yang bisa berpindah, kalor juga bisa. Ayo pelajari perpindahannya.</p>
                    </li>
                    <li class="mb-10 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6  rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==12)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles>=13)
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif
                            @if($miles<12)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                       
                        </span>
                        <a href="{{ route('contohsoalkalor3') }}">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Contoh Soal</h3>
                        </a>
                    </li>
                    <li class="ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-yellow-400 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            @if($miles==13 && $grade4 == -1)
                                <!-- Process -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                                </svg> 
                            @endif
                            @if($miles==13 && $grade4 != -1 && $grade4 < 75)
                                <!-- alert -->
                                <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>  
                            @endif
                            @if($miles>=14 )
                                <!-- Check -->
                                <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                                </svg> 
                            @endif   
                            @if($miles<13)
                                <!-- Lock -->
                                <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                                </svg>
                            @endif                                 
                        </span>
                        <a href="{{ route('quizkalor3') }}">
                            <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Quiz</h3>
                        </a>
                    </li>
                </ol>
            </li>
            <li class=" ms-6">            
                <span class="absolute flex items-center justify-center w-6 h-6 bg-green-500 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    @if($miles==14 && $grade5 == -1)
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                    @endif
                    @if($miles==14 && $grade5 != -1 && $grade5 < 75)
                        <!-- alert -->
                        <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>  
                    @endif
                    @if($miles>=15 )
                        <!-- Check -->
                        <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                    @endif   
                    @if($miles<14)
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                    @endif                      
                </span>
                <a href="{{ route('evaluasi') }}">
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Evaluasi</h3>
                </a>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Kamu hebat sudah mempelajari semua materinya. Ayo kita cek bersama pemahaman yang udah kamu dapat.</p>
            </li>
            <li class=" ms-6 mb-10">            
                <span class="absolute flex items-center justify-center w-6 h-6 bg-green-500 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    @if($miles==14 && $grade5 == -1)
                        <!-- Process -->
                        <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg> 
                    @endif
                    @if($miles==14 && $grade5 != -1 && $grade5 < 75)
                        <!-- alert -->
                        <svg class="w-6 h-6 text-gray-100 bg-yellow-400 rounded-full dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>  
                    @endif
                    @if($miles>=15 )
                        <!-- Check -->
                        <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg> 
                    @endif   
                    @if($miles<14)
                        <!-- Lock -->
                        <svg class="w-6 h-6 text-gray-800 bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z"/>
                        </svg>
                    @endif                      
                </span>
                <a href="{{ route('rangkuman') }}">
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Rangkuman</h3>
                </a>
            </li>
            <li class="mb-10 ms-6">            
                <span class="absolute flex items-center justify-center w-6 h-6 -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    @if($miles==1)
                        <!-- Process -->
                        <svg class="w-6 h-6 bg-white text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg>
                    @else
                        <!-- Check -->
                        <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg>  
                    @endif                     
                </span>
                <a href="{{ route('glosarium') }}">
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Glosarium</h3>
                </a>
                <!--<time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 13th, 2022</time>-->
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Yuk kenalan dengan istilah-istilah pentingnya di sini.</p>
            </li>
            <li class="mb-10 ms-6">            
                <span class="absolute flex items-center justify-center w-6 h-6 -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    @if($miles==1)
                        <!-- Process -->
                        <svg class="w-6 h-6 bg-white text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
                        </svg>
                    @else
                        <!-- Check -->
                        <svg class="w-6 h-6 text-gray-100 dark:text-white bg-green-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg>  
                    @endif                     
                </span>
                <a href="{{ route('daftarpustaka') }}">
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Daftar Pustaka</h3>
                </a>
                <!--<time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on January 13th, 2022</time>-->
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400"></p>
            </li>
        </ol>
    </div>
</div>
 
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#233567" fill-opacity="1" d="M0,32L30,69.3C60,107,120,181,180,192C240,203,300,149,360,144C420,139,480,181,540,197.3C600,213,660,203,720,176C780,149,840,107,900,106.7C960,107,1020,149,1080,181.3C1140,213,1200,235,1260,245.3C1320,256,1380,256,1410,256L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
</html>