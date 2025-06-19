<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Company Profile')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    <x-navbar />

    <main class="container mx-auto mt-8 px-4">
        @yield('content')
    </main>


    
    <x-footer />
</body>
</html>
