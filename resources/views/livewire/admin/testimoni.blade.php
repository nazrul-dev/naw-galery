<div>
    <div class="flex justify-between items-center">
        <div class="text-2xl font-bold">
            Testimoni {{ $mode }}
        </div>
        <div class="flex mx-10 space-x-2">

            @if ($mode == 'data' || $mode == 'edit')
                <button wire:click="changeMode('add')"
                    class="focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                        class="font-extrabold">+</span> Testimoni</button>
            @endif
            @if ($mode == 'add')
                <button wire:click="changeMode('data')"
                    class="focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                        class="font-extrabold">
                        <- </span> Data</button>
            @endif
        </div>
    </div>
    @if ($mode == 'data')
        <div class="py-16">
            <div class="grid grid-cols-2 gap-4">
                @foreach ($testimonies as $testimonie)
                    <div class="border-2  rounded-xl  p-5 mb-5 ">
                        <div class="w-full overflow-y-scroll h-52">
                            <p class="break-words">{{ $testimonie->content }}</p>
                        </div>
                        <div class="mt-5">
                            <div class="flex justify-between items-center">
                                <button type="button" wire:click="destroy('{{ $testimonie->id }}')"
                                    class="mr-1 hover:bg-red-700 flex items-center rounded-lg focus:outline-none bg-red-500 py-1 px-2 text-red-100  text-lg font-semibold"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg> <span>Hapus</span>
                                </button>
                                <button type="button" wire:click="edit('{{ $testimonie->id }}')"
                                    class="hover:bg-yellow-700 flex items-center rounded-lg focus:outline-none bg-yellow-500 py-1 px-2 text-red-100  text-lg font-semibold"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg> <span> Edit</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    @if ($mode == 'add' || $mode == 'edit')
        <div class="py-16 ">
            <div class="w-2/3 mx-auto">
                <form wire:submit.prevent="{{ $mode == 'edit' ? 'update' : 'store' }}">
                    <p class="mb-2 font-semibold" for=""> Keterangan </p>
                    <textarea class="w-full rounded-lg form-textarea" wire:model="content" cols="30"
                        rows="5"></textarea>
                    <div class="flex items-center justify-center space-x-5 py-10">
                        <button type="submit"
                            class="hover:bg-green-700 flex items-center focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                                class="font-extrabold"> </span> Simpan </button>
                    </div>
                </form>
            </div>
        </div>
    @endif

</div>
