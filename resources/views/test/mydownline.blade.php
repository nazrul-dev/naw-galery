<div>
    <div>

        <section class="text-gray-600 py-10 ">
            <div class="container px-5 mx-auto flex flex-col">
                <div class="lg:w-4/6 mx-auto">

                    <div class="flex flex-col sm:flex-row mt-10">
                        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                            <div
                                class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <div class="flex flex-col items-center text-center justify-center">
                                <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{{ $user->name }}</h2>
                                <div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
                                @if ($user->referal !== $user->username)
                                <a href="{{route('mydownline', $user->referal)}}" class="text-base">Referal <strong class="text-green-500">{{$user->referal}}</strong></a>
                                @endif
                            </div>
                        </div>
                        <div
                            class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0  text-left">
                            <table class="table">
                                <tr>
                                    <td>Nama Lengkap </td>
                                    <td class="pl-5"> : &nbsp; &nbsp;{{ $user->name }} </td>

                                </tr>
                                <tr>
                                    <td>Username </td>
                                    <td class="pl-5"> : &nbsp; &nbsp;{{ $user->username }} </td>

                                </tr>
                                <tr>
                                    <td>Telepon </td>
                                    <td class="pl-5"> : &nbsp; &nbsp;{{ $user->profil->telpon }} </td>

                                </tr>
                                <tr>
                                    <td>NIK </td>
                                    <td class="pl-5"> : &nbsp; &nbsp;{{ $user->profil->nik }} </td>

                                </tr>
                                <tr>
                                    <td>Alamat </td>
                                    <td class="pl-5"> : &nbsp; &nbsp;{{ $user->profil->alamat }} </td>

                                </tr>
                                <tr>
                                    <td>Jenis Kelamin </td>
                                    <td class="pl-5"> : &nbsp; &nbsp;{{ $user->profil->gender == 'male' ? 'Laki laki' : 'Perempuan' }} </td>

                                </tr>

                                <tr>
                                    <td>Nama Lengkap </td>
                                    <td class="pl-5"> : &nbsp; &nbsp;{{ $user->name }} </td>

                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-gray-600 py-10 ">
            <div class="container px-5 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    @if ($downlines->count())

                    <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900"><strong>{{$user->name}}</strong>  Memiliki  {{$downlines->count()}} Reseller
                    </h1>
                    @else
                    <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900"><strong>{{$user->name}}</strong> Tidak Memiliki Reseller
                    </h1>
                    @endif

                </div>
                <div class="flex flex-wrap -m-4">
                    @foreach ($downlines as $downline)

                        <div class="p-4 w-full md:w-1/3">
                            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                                <div class="flex items-center mb-3">
                                    <div
                                        class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-green-500 text-white flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                        </svg>
                                    </div>
                                    <h2 class="text-gray-900 text-lg title-font font-medium">{{ $downline->name }}</h2>
                                </div>
                                <div class="flex-grow">
                                    <p class="leading-relaxed text-base"></p>
                                    <a href="{{route('mydownline', $downline->username)}}" class="mt-3 text-green-500 inline-flex items-center">Lihat Profile
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                            viewBox="0 0 24 24">
                                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>


                    @endforeach

                </div>
            </div>
        </section>
    </div>

</div>
