<!DOCTYPE html>
{{-- Tambahkan atribut lang untuk mendukung i18n --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Tambahkan yield untuk title, dengan fallback 'Company Profile' --}}
    <title>Adipratama Kreatif Solusi - @yield('title', 'Company Profile')</title>

    {{-- Link Google Fonts untuk Poppins dan Open Sans --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- Pastikan mengacu ke app.js juga jika ada JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Atau app.jsx jika Anda menggunakannya --}}

    {{-- Stack untuk CSS tambahan per halaman --}}
    @stack('styles')
</head>
{{-- Terapkan font Poppins secara global sebagai default font --}}

<body class="font-poppins antialiased">

    {{-- Sertakan Navbar dari komponen --}}
    @include('components.navbar')

    {{-- Main content area --}}
    {{-- Hapus mt-8 karena padding-top di body akan menangani jarak dari navbar fixed --}}
    <main>
        @yield('content')
    </main>

    {{-- Sertakan Footer dari komponen --}}
    @include('components.footer')

    {{-- Stack untuk JS tambahan per halaman --}}
    @stack('scripts')
</body>

</html>