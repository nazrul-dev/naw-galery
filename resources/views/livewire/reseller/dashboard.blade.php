<div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-10 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Selamat Datang Kembali <br> <strong>{{$user->name}}</strong></h1>
                <p class="font-semibold mb-2">Link Referral Saya</p>
                <h1 class="px-2 py-2 bg-gray-200 border w-full md:w-1/2 mx-auto rounded font-semibold text-gray-900">{{$referral}}</h1>
            </div>
            <div class="flex justify-center flex-wrap -m-4 text-center">
                <a  href="{{ route('reseller.downlines') }}" class="hover:bg-green-50 rounded-lg p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="text-red-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                    </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $deactive->count() }}</h2>
                        <p class="leading-relaxed font-semibold">Calon Reseller</p>
                    </div>
                </a>
                <a  href="{{ route('reseller.downlines') }}" class="hover:bg-green-50 rounded-lg p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-green-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $active->count() }}</h2>
                        <p class="leading-relaxed font-semibold">Reseller Aktif</p>
                    </div>
                </a>
             
               
            </div>
        </div>
    </section>
</div>
