@section('title', 'Create a new account')

    <div>
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <a href="{{ route('home') }}">
                <img class="w-auto h-20 mx-auto " src="{{ asset('images/logo1.png') }}" alt="">
            </a>
    
            <h2 class="mt-3 text-xl font-extrabold text-center text-gray-900 leading-9">
                Register Reseller <em>{{$referred_by->name}}</em>
            </h2>
            <p class="mt-1  text-center text-gray-600 leading-5 max-w">
                Atau
                 <a href="{{ route('login') }}" class="font-medium text-gray-800 hover:text-gray-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                     Login Akun Reseller
                 </a>
             </p>
           
            
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                <form wire:submit.prevent="register" novalidate>
                    <div class="mt-3">
                        <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                            Paket
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <select name=""
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5  "
                                wire:model="paket" id="">
                                <option value="" selected> Pilih paket</option>
                                @foreach ($packets as $packet)
                                    <option value="{{ $packet->id }}"> {{ $packet->name }} @rupiah($packet->price)
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        @error('paket')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="username" class="block text-sm font-medium text-gray-700 leading-5">
                            Username
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="username" id="name" type="text" required autofocus
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                        </div>

                        @error('username')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                            Nama Lengkap
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="name" id="name" type="text" required autofocus
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                        </div>

                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                            NIK KTP
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="nik" id="name" type="number" required autofocus
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                        </div>

                        @error('nik')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                            Nomor Telepon
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="telpon" id="name" type="number" required autofocus
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                        </div>

                        @error('telpon')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                            Gender
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <select name=""
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5  "
                                wire:model="gender" id="">
                                <option value="" selected>Pilih Gender</option>
                                <option value="male"> Laki Laki</option>
                                <option value="female"> Perempuan</option>
                            </select>
                        </div>

                        @error('gender')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                            Alamat
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="alamat" id="name" type="text" required autofocus
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                        </div>

                        @error('alamat')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mt-3">
                        <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                            Email address
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="email" id="email" type="email" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                        </div>

                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                            Password
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="password" id="password" type="password" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                        </div>

                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 leading-5">
                            Confirm Password
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model.lazy="passwordConfirmation" id="password_confirmation" type="password"
                                required
                                class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>

                    <hr class="w-1/2 mx-auto mt-10 border-2" />
                    <div class="mt-6">
                        <button type="submit" class="flex mx-auto  justify-center  px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md hover:bg-green-500 focus:outline-none focus:border-green-700 focus:ring-green active:bg-green-700 transition duration-150 ease-in-out">
                            Register Akun
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
