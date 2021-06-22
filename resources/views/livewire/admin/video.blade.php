<div>
    <div class="flex justify-between items-center">
        <div class="text-2xl font-bold">
            Video {{ $mode }}
        </div>
        <div class="flex mx-10 space-x-2">

            @if ($mode == 'data' || $mode == 'edit')
                <button wire:click="changeMode('add')"
                    class="focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                        class="font-extrabold">+</span> Video</button>
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
        <div class="grid grid-cols-3 gap-3 py-16">
            @foreach ($videos as $video)
                <div class="border-2  rounded-xl ">
                    <div class="p-1">
                        <iframe title="YouTube video player" height="315" class="w-full rounded-t-lg "
                            src="{{ $video->path }}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    </div>
                    <button type="button" wire:click="destroy('{{ $video->id }}')"
                        class="m-2 hover:bg-red-700 flex items-center rounded-lg  focus:outline-none bg-red-500 py-1 px-2 text-red-100  text-lg font-semibold"><svg
                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg> <span class="ml-2"> Hapus Video</span>
                    </button>
                </div>
            @endforeach
        </div>
    @endif
    @if ($mode == 'add')
        <form wire:submit.prevent="store">
            <div class="py-16 flex-justify-center ">
                <div class="container flex justify-center items-center">
                    <div class="relative">
                        <div class="absolute top-4 left-3"> </div> <input type="text" wire:model="path"
                            class="h-14 w-96 pl-5 pr-16 rounded-lg z-0 focus:shadow focus:outline-none border-2"
                            placeholder="Kode Youtube  ">
                        <div class="absolute top-2 right-2"> <button
                                class="h-10 w-20 text-white rounded-lg bg-green-500 hover:bg-green-600">Simpan</button>
                        </div>
                    </div>
                </div>

            </div>

        </form>
    @endif

</div>
