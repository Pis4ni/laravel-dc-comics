<!DOCTYPE html>
<html lang="en"  data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>
  @include('partials._navbar')

  <main>
    @yield('content')
  </main>

</body>

</html>
