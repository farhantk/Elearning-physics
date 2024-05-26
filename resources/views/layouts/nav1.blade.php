

<nav class="fixed top-0 z-50 w-full bg-primary border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
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
                        <img class="w-10 h-10 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFGr0CMl8ZYm0qOtv1h51bmUxSymKkpoAjlFSnp8Eq0w&s" alt="user photo">
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