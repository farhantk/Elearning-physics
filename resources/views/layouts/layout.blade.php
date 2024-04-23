@extends('layouts.main')
@extends('layouts.nav')
@extends('layouts.sidebar')

<div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
      <article class="max-w-none format lg:format-lg format-red">
        @yield('content')
     </article>
   </div>
</div>




</html>