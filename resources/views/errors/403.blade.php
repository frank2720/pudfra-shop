<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="{{asset('assets/images/icons/money-back.svg')}}">

  <title>403</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <meta name="robots" content="noindex, follow">
</head>

<body class="flex flex-col h-screen justify-center items-center bg-gray-100">
  <div class="flex flex-col items-center">
      <h1 class="text-[120px] font-extrabold text-gray-700">403</h1>
      <p class="text-2xl font-medium text-gray-600 mb-6">You're forbidden from this page</p>
      <a href="{{route('welcome')}}"
          class="px-4 py-2 font-medium text-white bg-indigo-500 rounded-md hover:bg-indigo-600 transition-all duration-200 ease-in-out">
          Go Home
      </a>
  </div>
</body>

</html>