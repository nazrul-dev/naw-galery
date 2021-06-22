<div>
    <div class="flex justify-between items-center">
        <div class="text-2xl font-bold">
            Team {{ $mode }}
        </div>
        <div class="flex mx-10 space-x-2">

            @if ($mode == 'data' || $mode == 'edit')
                <button wire:click="changeMode('add')"
                    class="focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                        class="font-extrabold">+</span> Team</button>
            @endif
            @if ($mode === 'add')
                <button wire:click="changeMode('data')"
                    class="focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                        class="font-extrabold">
                        <- </span> Data</button>
            @endif
        </div>
    </div>
    @if ($mode == 'data')
        <div class="py-10 grid md:grid-cols-3 grid-cols-1 gap-4 ">
            @foreach ($teams as $team)
                <div class="p-2 w-full border-gray-200 border rounded-lg ">
                    <div class="h-full flex items-start">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="{{ $team->pathimages }}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">{{ $team->name }}</h2>
                            <p class="text-gray-500">{{ $team->jabatan }}</p>
                            <div class=" flex justify-end items-center space-x-2 mt-3">
                                <button type="button" wire:click="edit('{{ $team->id }}')"
                                    class="hover:bg-green-700 flex items-center focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-sm font-semibold"><span
                                        class="font-extrabold"> </span> Edit </button>
                                <button type="button" wire:click="destroy('{{ $team->id }}')"
                                    class="hover:bg-red-700 flex items-center focus:outline-none bg-red-600 py-1 px-2 text-red-100 rounded text-sm font-semibold"><span
                                        class="font-extrabold"> </span> Hapus </button>
                            </div>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    @endif
    @if ($mode == 'add' || $mode == 'edit')
        <div class="py-16 ">
            <div class="w-2/3 mx-auto">
                <form wire:submit.prevent="{{ $mode == 'edit' ? 'update' : 'store' }}">
                    <div class="py-5">
                        <div>
                            <p class="mb-2">Nama</p>
                            <div class="w-full mb-3 flex">
                                <input class="py-1 px-2 rounded-lg w-full" wire:model="name" type="text" />

                            </div>
                            @error('name')
                                <p class="text-red-500 font-semibold text-sm mb-3">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <div>
                                <p class="mb-2">Jabatan</p>
                                <div class="w-full mb-3 flex">
                                    <input class="py-1 px-2 rounded-lg w-1/2" wire:model="jabatan" type="text" />

                                </div>
                                @error('jabatan')
                                    <p class="text-red-500 font-semibold text-sm mb-3">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="flex flex-col justify-center  py-5">
                            @if ($mode === 'add')
                                @if ($avatar)
                                    <img class="w-36 h-36 border-2 rounded-full  object-cover"
                                        src="{{ $avatar->temporaryUrl() }}">
                                @endif
                                @error('avatar')
                                    <p class="text-red-500 font-semibold text-sm mb-3">{{ $message }}</p>
                                @enderror
                            @endif
                            @if ($mode == 'edit')
                                <div class="flex space-x-5">
                                    <div>
                                        <p class="font-semibold my-4">Foto Sekarang</p>
                                        <img class="w-36 h-36 border-2 rounded-full  object-cover"
                                            src="{{ $avatar_old }}">
                                    </div>
                                    @if ($avatar)
                                        <div>
                                            <p class="font-semibold my-4">Foto Yang Diubah</p>
                                            <img class="w-36 h-36 border-2 rounded-full  object-cover"
                                                src="{{ $avatar->temporaryUrl() }}">
                                        </div>
                                    @endif
                                </div>
                            @endif

                        </div>
                        <div class="flex items-center justify-center space-x-5 py-10">
                            <button type="button" onclick="document.getElementById('upload').click();"
                                class="hover:bg-blue-700 flex items-center focus:outline-none bg-blue-600 py-1 px-2 text-blue-100 rounded text-lg font-semibold"><span
                                    class="font-extrabold">
                                </span>Pilih Foto
                            </button>
                            <input type="file" wire:model="avatar" id="upload" style="display:none">
                            <button type="submit"
                                class="hover:bg-green-700 flex items-center focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                                    class="font-extrabold"> </span> Simpan </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif

</div>
