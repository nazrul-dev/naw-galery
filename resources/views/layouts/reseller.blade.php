@extends('layouts.base')

@section('body')
    <div class="relative min-h-screen md:flex" x-data="{sidebarShow : true}">

        <!-- mobile menu bar -->
        <div :class="sidebarShow ? 'bg-green-900' : 'bg-green-800'" class="bg-green-800 text-gray-100 flex justify-between md:hidden">
            <!-- logo -->
            <a href="{{ route('reseller.dashboard') }}" class="block p-4 text-white font-bold">YRS RESELLER</a>


            <button @click="sidebarShow = !sidebarShow"
                class="mobile-menu-button p-4 focus:outline-none focus:bg-green-700">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>


        <div x-show="sidebarShow"
            class="bg-green-800 text-green-100 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform  md:relative md:translate-x-0 transition duration-200 ease-in-out">

            <a href="#" class="text-white flex items-center space-x-2 px-4">
                <img class="h-8  w-auto " src="{{ asset('images/logo2.png') }}" alt="">
                <span class="text-xl font-extrabold">YRS - RESELLER</span>
            </a>

            <nav>
                <a href="{{ route('reseller.dashboard') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                    Dashboard
                </a>

                <div x-data="{dropdown : false}">
                    <div class="">
                        <a href="javascript:void(0)" @click.prevent="dropdown = !dropdown"
                            class="flex justify-between items-center  py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            <span>Resseler</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path x-show="!dropdown" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7" />

                                <path x-show="dropdown" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>

                    </div>
                    <div class="ml-5 border-l-2 border-green-500" x-show="dropdown">
                        <a href="{{ route('reseller.downlines') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            Reseller Aktif
                        </a>
                        <a href="{{ route('reseller.downlines', 'deactive') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            Calon Reseller
                        </a>

                    </div>
                </div>


                {{-- <a href="{{ route('admin.event') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                    Tickets
                </a> --}}


                <a href="{{ route('reseller.account') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                    Account
                </a>

                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                    Log out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </nav>
        </div>

        <!-- content -->
        <div class="flex-1 p-10 ">

            @isset($slot)
                {{ $slot }}
            @endisset
        </div>

    </div>


@endsection
