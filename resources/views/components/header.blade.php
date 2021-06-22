<header x-data="{isMenu : false}"
    class="sticky top-0 z-50 text-gray-100 bg-green-800 border-b md:rounded-none rounded-b-xl overflow-hidden">
    <div class="container md:mx-auto flex justify-between md:justify-start p-4 md:flex-row items-center">
        <a href="/" class="flex title-font font-medium items-center text-gray-900 md:mb-0">
            <img class="h-10  w-auto object-fill" src="{{ asset('images/logo2.png') }}" alt="">
            <div class="md:block hidden">
                <div class="flex flex-col items-baseline ">
                    <div>
                        <span class="ml-3 text-lg text-white tracking-tight">Yayasan Rumah Sedekah</span>
                    </div>
                    <span class="ml-3 text-xs text-white ml-5">Genesia Otanaha</span>
                </div>
            </div>
        </a>
        <nav class="md:ml-auto md:block hidden md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('home') }}" class="mr-5 hover:text-white">Home</a>
            <a href="{{ route('galeries') }}" class="mr-5 hover:text-white">Galeri</a>
            <a href="{{ route('rewards') }}" class="mr-5 hover:text-white">Rewards</a>
            <a href="{{ route('videos') }}" class="mr-5 hover:text-white">Videos</a>
            <a href="{{ route('testimonies') }}" class="mr-5 hover:text-white">Testimoni</a>
            <a href="{{ route('events') }}" class="mr-5 hover:text-white">Events</a>
            <a href="{{ route('teams') }}" class="mr-5 hover:text-white">Teams</a>
        </nav>
        <div>
            <button class="md:hidden focus:outline-none" type="button" @click="isMenu = true"><svg
                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg></button>
            @if (Route::has('login'))
                <div class="md:space-x-2 space-x-1 md:block hidden">

                    @auth
                        <a href="{{ route('reseller.dashboard') }}"
                            
                            class="font-medium bg-green-600 py-1 px-2 rounded  hover:text-white focus:outline-none focus:underline transition ease-in-out duration-150">
                            Panel Reseller
                        </a>
                        
                    @else
                        <a href="{{ route('login') }}"
                            class="font-medium bg-green-600 py-1 px-2 rounded  text-gray-100 hover:text-white hover:bg-green-700 focus:outline-none focus:underline transition ease-in-out duration-150">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="font-medium bg-green-600 py-1 px-2 rounded text-gray-100 hover:text-white hover:bg-green-700 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
    <div x-show="isMenu" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
        class=" p-4 bg-green-600 md:hidden block rounded-b-xl overflow-hidden">
        <div class="flex justify-between items-start">
            <nav class="md:ml-auto space-y-4 text-left  md:mr-auto flex flex-col  text-md justify-start">
                <a href="{{ route('galeries') }}" class="mr-5 hover:text-white">Galeri</a>
                <a href="{{ route('rewards') }}" class="mr-5 hover:text-white">Rewards</a>
                <a href="{{ route('videos') }}" class="mr-5 hover:text-white">Videos</a>
                <a href="{{ route('testimonies') }}" class="mr-5 hover:text-white">Testimoni</a>
                <a href="{{ route('events') }}" class="mr-5 hover:text-white">Events</a>
                <a href="{{ route('teams') }}" class="mr-5 hover:text-white">Teams</a>
                <div class="border-t-2 pt-2 border-gray-100">
                    @if (Route::has('login'))
                        <div class="md:space-x-2 space-x-1 py-3">

                            @auth
                            <a href="{{ route('reseller.dashboard') }}"
                          
                            class="font-medium bg-green-600 py-1 px-2 rounded  hover:text-white focus:outline-none focus:underline transition ease-in-out duration-150">
                            Panel Reseller
                        </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="font-medium bg-green-700 py-1 px-2 rounded  text-gray-100 hover:text-white hover:bg-green-700 focus:outline-none focus:underline transition ease-in-out duration-150">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="font-medium bg-green-700 py-1 px-2 rounded text-gray-100 hover:text-white hover:bg-green-700 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </nav>
            <button @click="isMenu = false" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
</header>
