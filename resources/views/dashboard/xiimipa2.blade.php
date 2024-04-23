@extends('layouts.main')


<body class="p-0 m-0"> 
    @include('layouts.nav1')
<div class="mt-32 py-4 px-36">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-4">
        
        <div class=" mb-4 border-b border-gray-200 dark:border-gray-700">
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <a href="{{ route('dashboard') }}" class="inline-block p-4 rounded-t-lg dark:text-blue-500 dark:border-blue-500" aria-current="page">XII MIPA 1</a>
                    </li>
                    <li class="me-2">
                        <a href="{{ route('dashboard1') }}" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg dark:text-blue-500 dark:border-blue-500" aria-current="page">XII MIPA 2</a>
                    </li>
                    <li class="me-2">
                        <a href="{{ route('dashboard2') }}" class="inline-block p-4  rounded-t-lg  dark:text-blue-500 dark:border-blue-500" aria-current="page">XII MIPA 3</a>
                    </li>
                    <li class="me-2">
                        <a href="{{ route('dashboard3') }}" class="inline-block p-4  rounded-t-lg  dark:text-blue-500 dark:border-blue-500" aria-current="page">XII MIPA 4</a>
                    </li>
                    <li class="me-2">
                        <a href="{{ route('dashboard4') }}" class="inline-block p-4  rounded-t-lg  dark:text-blue-500 dark:border-blue-500" aria-current="page">XII MIPA 5</a>
                    </li>
                </ul>
            </div>
            <ul class="flex list-none flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Suhu</button> 
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Kalor 1</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard1" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Kalor 2</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard2" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Kalor 3</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard3" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Evaluasi</button>
                </li>
            </ul>
        </div>
        <div id="default-styled-tab-content">

            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <table id="example" class="table-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead >
                            <tr>
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">No. of Attempt</th>
                                <th class="px-4 py-2">Start Attempt</th>
                                <th class="px-4 py-2">last Attempt</th>
                                <th class="px-4 py-2">Score</th>
                                <th class="px-4 py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $index => $student)
                                @if ($student->attempt()->where('quiz_number', 1)->exists())  {{-- Check for attempt existence --}}
                                <tr>
                                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                                    <td class="border px-4 py-2">{{ $student->name }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 1)->max('attempt') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 1)->min('created_at') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 1)->max('created_at') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt()->where('quiz_number', 1)->orderBy('grade', 'desc')->first()->grade }}</td>
                                    @if ($student->attempt()->where('quiz_number', 1)->orderBy('grade', 'desc')->first()->grade > 75)
                                    <td class="border px-4 py-2">Lulus</td>
                                    @else
                                    <td class="border px-4 py-2">Tidak Lulus</td>
                                    @endif
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            
            
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <table id="example1" class="table-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead >
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">No. of Attempt</th>
                                <th class="px-4 py-2">Start Attempt</th>
                                <th class="px-4 py-2">last Attempt</th>
                                <th class="px-4 py-2">Score</th>
                                <th class="px-4 py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $index => $student)
                                @if ($student->attempt()->where('quiz_number', 2)->exists())  {{-- Check for attempt existence --}}
                                <tr>
                                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                                    <td class="border px-4 py-2">{{ $student->name }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 2)->max('attempt') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 2)->min('created_at') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 2)->max('created_at') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt()->where('quiz_number', 2)->orderBy('grade', 'desc')->first()->grade }}</td>
                                    @if ($student->attempt()->where('quiz_number', 2)->orderBy('grade', 'desc')->first()->grade > 75)
                                    <td class="border px-4 py-2">Lulus</td>
                                    @else
                                    <td class="border px-4 py-2">Tidak Lulus</td>
                                    @endif
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard1" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <table id="example2" class="table-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead >
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">No. of Attempt</th>
                                <th class="px-4 py-2">Start Attempt</th>
                                <th class="px-4 py-2">last Attempt</th>
                                <th class="px-4 py-2">Score</th>
                                <th class="px-4 py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $index => $student)
                                @if ($student->attempt()->where('quiz_number', 3)->exists())  {{-- Check for attempt existence --}}
                                <tr>
                                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                                    <td class="border px-4 py-2">{{ $student->name }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 3)->max('attempt') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 3)->min('created_at') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 3)->max('created_at') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt()->where('quiz_number', 3)->orderBy('grade', 'desc')->first()->grade }}</td>
                                    @if ($student->attempt()->where('quiz_number', 3)->orderBy('grade', 'desc')->first()->grade > 75)
                                    <td class="border px-4 py-2">Lulus</td>
                                    @else
                                    <td class="border px-4 py-2">Tidak Lulus</td>
                                    @endif
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard2" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <table id="example3" class="table-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead >
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">No. of Attempt</th>
                                <th class="px-4 py-2">Start Attempt</th>
                                <th class="px-4 py-2">last Attempt</th>
                                <th class="px-4 py-2">Score</th>
                                <th class="px-4 py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $index => $student)
                                @if ($student->attempt()->where('quiz_number', 4)->exists())  {{-- Check for attempt existence --}}
                                <tr>
                                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                                    <td class="border px-4 py-2">{{ $student->name }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 4)->max('attempt') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 4)->min('created_at') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 4)->max('created_at') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt()->where('quiz_number', 4)->orderBy('grade', 'desc')->first()->grade }}</td>
                                    @if ($student->attempt()->where('quiz_number', 4)->orderBy('grade', 'desc')->first()->grade > 75)
                                    <td class="border px-4 py-2">Lulus</td>
                                    @else
                                    <td class="border px-4 py-2">Tidak Lulus</td>
                                    @endif
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard3" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <table id="example4" class="table-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead >
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">No. of Attempt</th>
                                <th class="px-4 py-2">Start Attempt</th>
                                <th class="px-4 py-2">last Attempt</th>
                                <th class="px-4 py-2">Score</th>
                                <th class="px-4 py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $index => $student)
                                @if ($student->attempt()->where('quiz_number', 5)->exists())  {{-- Check for attempt existence --}}
                                <tr>
                                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                                    <td class="border px-4 py-2">{{ $student->name }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 5)->max('attempt') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 5)->min('created_at') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt->where('quiz_number', 5)->max('created_at') }}</td>
                                    <td class="border px-4 py-2">{{ $student->attempt()->where('quiz_number', 5)->orderBy('grade', 'desc')->first()->grade }}</td>
                                    @if ($student->attempt()->where('quiz_number', 5)->orderBy('grade', 'desc')->first()->grade > 75)
                                    <td class="border px-4 py-2">Lulus</td>
                                    @else
                                    <td class="border px-4 py-2">Tidak Lulus</td>
                                    @endif
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    
    
        </div>
    </div>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                // Add any customization options here
            });
            $('#example1').DataTable({
                // Add any customization options here
            });
            $('#example2').DataTable({
                // Add any customization options here
            });
            $('#example3').DataTable({
                // Add any customization options here
            });
            $('#example4').DataTable({
                // Add any customization options here
            });
        });
    </script>
    
    </body>
    
    
    