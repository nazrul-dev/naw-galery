<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }} </title>
        @else
            <title>{{ config('app.name') }} - YAYASAN RUMAH SEDEKAH</title>
        @endif
        <meta name="Description" CONTENT="NAW.Galeri_House Selain menawarkan jasa foto produk dengan harga yang lebih bersaing, Kami juga selalu berusaha untuk memberikan hasil foto produk dengan kualitas yang terjamin.">
        <meta name="robots" content="noindex,nofollow">
        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('images/logo1.png') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
        </script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="antialiased ">
        @yield('body')
        @livewireScripts
        <x-livewire-alert::scripts />
    </body>
</html>
