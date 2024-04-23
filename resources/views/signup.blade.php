@extends('layouts.main')
<body class="h-full">

<div class="flex min-h-full flex-col h-screen flex items-center justify-center">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-28 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Logo_Kemendikbud.svg" alt="kemendikbud logo">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Buat akunmu disini</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="/daftar" method="POST">
        @csrf
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap</label>
          <div class="mt-2">
            <input id="name" name="name" type="text" required value="{{old('name')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @error('name') ring-red-300 @enderror placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          @error('name')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Terjadi kesalahan!</span> {{$message}}.</p>
          @enderror
        </div>
        <div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
            <select id="countries" name="class" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option>XII MIPA 1</option>
              <option>XII MIPA 2</option>
              <option>XII MIPA 3</option>
              <option>XII MIPA 4</option>
              <option>XII MIPA 5</option>
            </select>
        </div>
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @error('email') ring-red-300 @enderror placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          @error('email')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Terjadi kesalahan!</span> {{$message}}.</p>
          @enderror
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Kata sandi</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @error('password') ring-red-300 @enderror placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          @error('password')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Terjadi kesalahan!</span> {{$message}}.</p>
          @enderror
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Konfirmasi kata sandi</label>
          </div>
          <div class="mt-2">
            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 @error('password_confirmation') ring-red-300 @enderror placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          @error('password_confirmation')
            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Terjadi kesalahan!</span> {{$message}}.</p>
          @enderror
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Daftar</button>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-gray-500">
        Sudah punya akun?
        <a href="/masuk" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">masuk</a>
      </p>
    </div>
  </div>
  
</body>
</html>