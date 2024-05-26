

<nav class="fixed top-0 z-50 w-full bg-primary border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
            <a href="/" class="flex ms-2 md:me-24">
                <img src="{{URL::asset('/image/1.1.png')}}" class="me-3 h-12" alt="Logo" />
            </a>
        </div>
        <div class="flex items-center content-center">
            <div class="flex items-center ms-3">
                <div class="self-center text-xl me-3 font-medium" role="none">
                    <p class="text-base text-white font-medium text-gray-900 dark:text-white" role="none">
                    {{ $name }}
                    </p>
                    <p class="text-sm text-white font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    {{ $class }}
                    </p>
                </div>
                <div>
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFGr0CMl8ZYm0qOtv1h51bmUxSymKkpoAjlFSnp8Eq0w&s" alt="Bordered avatar">
                    </button>
                </div>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                    <p class="text-base text-gray-900 dark:text-white" role="none">
                        {{ $name }}
                    </p>
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                        {{ $email }}
                    </p>
                </div>
                <ul class="py-1" role="none">
                    <li>
                        <form action="/signout" method='POST'>
                        @csrf
                            <button type='submit' class="block px-4 py-2 text-sm text-gray-700" role="menuitem">
                                Sign out
                            </button>
                        </form>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</nav>