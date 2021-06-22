<div>
    <div class="flex justify-between items-center" >
        <div class="text-2xl font-bold">
            Galery {{ $mode }}
        </div>
        <div class="flex mx-10 space-x-2">

            @if ($mode == 'data' || $mode == 'edit')
                <button wire:click="changeMode('add')"
                    class="focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                        class="font-extrabold">+</span> Galeri</button>
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
        <div class="grid grid-cols-4 gap-4 py-16">
            @foreach ($galeries as $galery)
                <div class="border-2  rounded-xl">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-full h-48 object-cover object-center mb-4"
                        src="{{ $galery->PathImages }}">
                        <button type="button" wire:click="destroy('{{$galery->id}}')"
                        class="hover:bg-red-700 flex items-center rounded-lg focus:outline-none bg-red-500 py-1 px-2 text-red-100  text-lg font-semibold"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                    </button>
                </div>
            @endforeach
        </div>
    @endif
    @if ($mode == 'add')
        <form wire:submit.prevent="store">
            <div class="py-16 flex-justify-center ">
                @if (count((array)$photos) >= 1)
                    <div class="block border-2 border-dashed p-10">
                        <div class="grid grid-cols-5 gap-2">
                            @foreach ($photos as $i => $photo)
                                <div class="flex justify-between items-start">
                                    <img class="w-full h-16 object-cover" src="{{ $photo->temporaryUrl() }}">
                                    <button wire:click="removePhoto('{{ $i }}')" class="focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                </div>

                            @endforeach
                        </div>

                    </div>
                @endif
                <div class="flex items-center justify-center space-x-5 py-10">
                    <button type="button" onclick="document.getElementById('upload').click();"
                        class="hover:bg-blue-700 flex items-center focus:outline-none bg-blue-600 py-1 px-2 text-blue-100 rounded text-lg font-semibold"><span
                            class="font-extrabold">
                        </span>Pilih Gambar
                    </button>
                    <input type="file" wire:model="photos" multiple id="upload" style="display:none">
                    <button type="submit"
                        class="hover:bg-green-700 flex items-center focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                            class="font-extrabold"> </span> Simpan </button>
                </div>
            </div>

        </form>
    @endif

</div>
