<div>
    <div class="flex justify-between items-center">
        <div class="text-2xl font-bold">
            Event {{ $mode }}
        </div>
        <div class="flex mx-10 space-x-2">

            @if ($mode == 'data' || $mode == 'edit')
                <button wire:click="changeMode('add')"
                    class="focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                        class="font-extrabold">+</span> Event</button>
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
        <div class="py-10 grid md:grid-cols-2 grid-cols-1 gap-4 ">
            @foreach ($events as $event)
                <div class="p-5 w-full border-gray-200 border rounded-lg ">
                    <div class="h-full flex items-start">

                        <div class="flex-grow">
                            <p class="text-sm">Tanggal Event {{$event->start_at->format('d F Y')}}</p>
                            <h2 class="text-gray-900 title-font font-medium">{{ $event->title }}</h2>
                            <p class="text-gray-500">{{ $event->content }}</p>
                            <div class=" flex justify-end items-center space-x-2 mt-3">
                                <button type="button" wire:click="edit('{{ $event->id }}')"
                                    class="hover:bg-green-700 flex items-center focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-sm font-semibold"><span
                                        class="font-extrabold"> </span> Edit </button>
                                <button type="button" wire:click="destroy('{{ $event->id }}')"
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
                            <p class="mb-2">Nama Event</p>
                            <div class="w-full mb-3 flex">
                                <input class="py-1 px-2 rounded-lg w-full" wire:model="title" type="text" />

                            </div>
                            @error('title')
                                <p class="text-red-500 font-semibold text-sm mb-3">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <div>
                                <p class="mb-2">Tanggal Event</p>
                                <div class="w-full mb-3 flex">
                                    <input class="py-1 px-2 rounded-lg w-1/3" value="{{$start_at}}" wire:model="start_at" type="date" />

                                </div>
                                @error('start_at')
                                    <p class="text-red-500 font-semibold text-sm mb-3">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div>
                            <div>
                                <p class="mb-2">Content Event</p>
                                <div class="w-full mb-3 flex">
                                    <textarea wire:model="content" class="py-1 px-2 rounded-lg w-full" id="" cols="30"
                                        rows="10"></textarea>

                                </div>
                                @error('content')
                                    <p class="text-red-500 font-semibold text-sm mb-3">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <div class="flex items-center justify-center space-x-5 py-10">

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
