<div x-data="{mode: 'info'}">
    <div class="pt-5 md:pt-5">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-6">
                <div class="lg:col-span-3">
                    <div class="lg:block flex">
                        <button
                              :class="mode == 'info' ? 'bg-green-700 text-white' : 'bg-gray-400 text-gray-900'" class="flex  items-center  border rounded-lg px-2 py-1 lg:hidden focus:outline-none mb-2 mr-3"
                             type="button"   @click="mode = 'info'"><i class="bi bi-list mr-1"></i> <span
                                class="font-semibold uppercase text-xs ">Informasi Profil</span>
                        </button>
                        <button
                          :class="mode == 'password' ? 'bg-green-700 text-white' : 'bg-gray-400 text-gray-900'" class="flex  items-center  border rounded-lg px-2 py-1 lg:hidden focus:outline-none mb-2 mr-3"
                         type="button"  @click="mode = 'password'"><i class="bi bi-list mr-1"></i> <span
                            class="font-semibold uppercase text-xs ">Ganti Password</span>
                    </button>
                        <div class="hidden lg:block">
                            <div>
                                <div
                                    class="absolute lg:relative w-56 lg:w-full shadow  z-50 rounded-lg overflow-hidden">
                                    <div class="bg-green-700 text-white p-2">
                                        <strong>Menu Account</strong>
                                    </div>
                                    <div class=" p-5">
                                        <ul class="leading-relaxed">
                                            <li><a href="javascript:void(0)"
                                                    :class="mode == 'info' ? 'text-gray-700' : 'text-gray-400'"
                                                    @click="mode = 'info'"
                                                    class=" font-semibold focus:outline-none block  my-2">Informasi
                                                    Profil</a></li>
                                            <li><a href="javascript:void(0)"
                                                    :class="mode == 'password' ? 'text-gray-700' : 'text-gray-400'"
                                                    @click="mode = 'password'"
                                                    class="focus:outline-none block  font-semibold   my-2">Ganti
                                                    Password</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="mode == 'info'" class="lg:col-span-9">
                    <div class="shadow  rounded-lg overflow-hidden">
                        <div class="px-6 py-4 bg-green-700 border-b"><span class="font-semibold tracking-tighter block">
                                <h1 class="text-lg text-white">Update Informasi Profil</h1>
                                <div class="text-sm font-normal leading-relaxed text-white">Informasi yang Anda masukkan
                                    akan muncul di halaman profil, jadi pastikan untuk membuatnya bagus agar orang lain
                                    bisa mengenal Anda lebih baik.</div>
                            </span></div>
                        <div class=" px-6 py-5">
                            <form wire:submit.prevent="saveProfile">
                                <div class="grid md:grid-cols-2 gap-x-4">
                                    <div class="mb-6"><label class="text-sm mb-1 block capitalize"
                                            for="email">Email</label><input
                                            class="form-text w-full rounded-lg bg-gray-300" disabled type="email"
                                            value="{{ $user->email }}">


                                    </div>
                                    <div class="mb-6">
                                        <label class="text-sm mb-1 block capitalize">Username</label>
                                        <input class="form-text w-full rounded-lg bg-gray-300" disabled type="text"
                                            value="{{ $user->username }}">


                                    </div>
                                </div>
                                <div class="grid md:grid-cols-2 gap-x-4">
                                    <div class="mb-6">
                                        <label class="text-sm mb-1 block capitalize">Nama Lengkap</label>
                                        <input class="form-text w-full  rounded-lg" type="text" wire:model="name">
                                        @error('name')
                                            <p class="block text-xs text-red-500">{{ $message }}</p>

                                        @enderror

                                    </div>
                                    <div class="mb-6">
                                        <label class="text-sm mb-1 block capitalize">Gender</label>
                                        <select wire:model="gender" class="w-full rounded-lg">
                                            <option value="male">Laki Laki</option>
                                            <option value="female">Perempuan</option>
                                        </select>
                                        @error('gender')
                                            <p class="block text-xs text-red-500">{{ $message }}</p>

                                        @enderror

                                    </div>
                                </div>
                                <div class="mb-6"><label class="text-sm mb-1 block capitalize"
                                        for="about">Alamat</label>
                                    <textarea class="w-full rounded-lg" rows="5" wire:model="alamat"></textarea>
                                    @error('alamat')
                                        <p class="block text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="grid md:grid-cols-2 gap-x-6">
                                    <div class="mb-6">
                                        <label class="text-sm mb-1 block capitalize">Telepon</label>
                                        <input class="form-text w-full rounded-lg" type="number" wire:model="telpon">
                                        @error('telpon')
                                            <p class="block text-xs text-red-500">{{ $message }}</p>

                                        @enderror
                                    </div>
                                    <div class="mb-6">
                                        <label class="text-sm mb-1 block capitalize">NIK KTP</label>
                                        <input class="form-text w-full  rounded-lg" type="text" wire:model="nik">
                                        @error('nik')
                                            <p class="block text-xs text-red-500">{{ $message }}</p>

                                        @enderror

                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit"
                                        class="px-2 py-2 bg-green-700 hover:bg-green-500 rounded text-white font-semibold">Update
                                        Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div x-show="mode == 'password'" class="lg:col-span-9">
                    <div class="shadow bg-white rounded-lg overflow-hidden">
                        <div class="px-6 py-4 bg-green-700 border-b"><span class="font-semibold tracking-tighter block">
                                <h1 class="text-lg text-gray-50">Change Password</h1>
                                <div class="text-sm font-normal leading-relaxed text-gray-50 ">Jangan beri tahu orang
                                    lain kata sandi rahasia Anda</div>
                            </span></div>
                        <div class="px-6 py-5">
                            <div class="mb-5">
                                @foreach ($errors->all() as $error)
                                    <p class="text-red-500">{{ $error }}</p>
                                @endforeach
                            </div>
                            <form wire:submit.prevent="changePassword">
                                <div class="mb-6"><label class="text-sm mb-1 block capitalize"
                                        for="current_password">Password Sekarang</label><input class="form-text w-full "
                                        type="password" wire:model="current_password">

                                </div>
                                <div class="mb-6"><label class="text-sm mb-1 block capitalize" for="password">password
                                        Baru</label><input class="form-text w-full " type="password"
                                        wire:model="new_password">

                                </div>
                                <div class="mb-6"><label class="text-sm mb-1 block capitalize"
                                        for="password_confirmation">Konfirmasi Password Baru</label><input
                                        class="form-text w-full " type="password"
                                        wire:model.lazy="passwordConfirmation">

                                </div>
                                <div class="text-right">
                                    <button type="submit"
                                        class="px-2 py-2 bg-green-700 hover:bg-green-500 rounded text-white font-semibold">Update
                                        Password</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
