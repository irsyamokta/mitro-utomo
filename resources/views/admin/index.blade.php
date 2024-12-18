<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ url('assets/img/img-logo-1.png') }}">
    <title>Admin Mitro Utomo</title>
    @vite(['resources/css/style.css', 'resources/js/index.js'])
</head>

<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>