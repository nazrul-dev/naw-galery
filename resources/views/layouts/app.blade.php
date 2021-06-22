@extends('layouts.base')

@section('body')
    <div>
        @yield('content')
        <x-header></x-header>
        <div class="min-h-screen">
            @isset($slot)
            {{ $slot }}
        @endisset
        </div>
        <x-footer></x-footer>
    </div>

@endsection
