@extends('layouts.base')

@section('body')
    @yield('content')
    <x-header></x-header>
    @isset($slot)
        {{ $slot }}
    @endisset
    <x-footer></x-footer>
@endsection
