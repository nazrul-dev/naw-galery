@extends('layouts.base')

@section('body')
    <div class="relative min-h-screen md:flex">

        <!-- mobile menu bar -->
        <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
            <!-- logo -->
            <a href="#" class="block p-4 text-white font-bold">YRS</a>

            <!-- mobile menu button -->
            <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>


        <div
            class="sidebar bg-green-800 text-green-100 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">


            <a href="#" class="text-white flex items-center space-x-2 px-4">
                <img class="h-8  w-auto " src="{{ asset('images/logo2.png') }}" alt="">
                <span class="text-2xl font-extrabold">YRS - PANEL</span>
            </a>

            <nav>
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
                        <a href="{{ route('admin.reseller') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            Reseller Aktif
                        </a>
                        <a href="{{ route('admin.reseller', 'deactive') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            Calon Reseller
                        </a>

                    </div>
                </div>
                <div x-data="{dropdown : false}">
                    <div class="">
                        <a href="javascript:void(0)" @click.prevent="dropdown = !dropdown"
                            class="flex justify-between items-center  py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            <span>Media</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path x-show="!dropdown" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7" />

                                    <path x-show="dropdown" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>

                    </div>
                    <div class="ml-5 border-l-2 border-green-500" x-show="dropdown">
                        <a href="{{ route('admin.galery') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            Galery
                        </a>
                        <a href="{{ route('admin.video') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            Video
                        </a>
                        <a href="{{ route('admin.reward') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            Reward
                        </a>
                    </div>
                </div>
                <a href="{{ route('admin.testimoni') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                    Testimoni
                </a>


                <a href="{{ route('admin.event') }}"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                    Event
                </a>
                <div x-data="{dropdown : false}">
                    <div class="">
                        <a href="javascript:void(0)" @click.prevent="dropdown = !dropdown"
                            class="flex justify-between items-center  py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            <span>Pengaturan</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path x-show="!dropdown" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7" />

                                    <path x-show="dropdown" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>

                    </div>
                    <div class="ml-5 border-l-2 border-green-500" x-show="dropdown">
                        <a href="{{ route('admin.akses') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            Pengguna Admin
                        </a>
                        <a href="{{ route('admin.setting') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            Company
                        </a>
                        <a href="{{ route('admin.paket') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            Paket
                        </a>
                        <a href="{{ route('admin.team') }}"
                            class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                            Team
                        </a>
                    </div>
                </div>



                <a href="{{ route('admin.logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700 hover:text-white">
                    Log out
                </a>

                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
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
