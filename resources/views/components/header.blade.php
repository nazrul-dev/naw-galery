<div class="bg-black px-4 py-4">
    <div class="md:max-w-6xl md:mx-auto md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center">
            <img src="{{ asset('images/NAW.png') }}" class="w-28" alt="">
            {{-- <a href="#" class="inline-block py-2 text-white text-xl font-bold">NAW</a> --}}
            <div class="inline-block cursor-pointer md:hidden">
                <div class="bg-gray-400 w-8 mb-2" style="height: 2px;"></div>
                <div class="bg-gray-400 w-8 mb-2" style="height: 2px;"></div>
                <div class="bg-gray-400 w-8" style="height: 2px;"></div>
            </div>
        </div>

        <div>
            <div class="hidden md:block">
                <a href="/" class="inline-block py-1 md:py-4 text-gray-100 mr-6 font-bold">Beranda</a>
                <a href="/galery" class="inline-block py-1 md:py-4 text-gray-100 mr-6 font-bold">Galery</a>
                <a href="/service"
                    class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-100 mr-6">Services</a>
                <a href="/pricing" class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-100 mr-6">Pricing</a>
                <a href="/team" class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-100 mr-6">Our
                    Team</a>
                <a href="/kontak" class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-100">Kontak</a>
            </div>
        </div>
        <div class="hidden md:block">
            <a href="#" class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-100 mr-6">Login</a>
            <a href="#" class="inline-block py-2 px-4 text-gray-700 bg-white hover:bg-gray-100 rounded-lg">Sign
                Up</a>
        </div>
    </div>
</div>
