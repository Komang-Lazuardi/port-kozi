<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kozi's Portfolio</title>
  @vite('resources/css/app.css')

   <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
</head>
<body class="bg-white text-gray-900">

  <!-- Navbar -->
  @include('components.navbar')

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

</body>
</html>
