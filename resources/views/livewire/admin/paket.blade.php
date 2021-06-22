<div>

    <div class="flex justify-between items-center">
        <div class="text-2xl font-bold">
            Paket {{ $mode }}
        </div>
        <div class="flex mx-10 space-x-2">

            @if ($mode == 'data' || $mode == 'edit')
                <button wire:click="changeMode('add')"
                    class="focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                        class="font-extrabold">+</span> Paket</button>
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
        <div class="py-10 flex justify-center">
            @foreach ($pakets as $paket)
                <div class="p-4 xl:w-1/3 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-green-500 flex flex-col relative overflow-hidden">

                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium uppercase">{{ $paket->name }}
                        </h2>
                        <h1
                            class="md:text-2xl font-extrabold text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                            <span>@rupiah($paket->price)</span>

                        </h1>
                        @if ($paket->keunggulan)
                            @foreach (json_decode($paket->keunggulan) as $keunggulan)
                                <p class="flex items-center text-gray-600 mb-3">
                                    <span
                                        class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-green-400 text-white rounded-full flex-shrink-0">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                    </span>{{ $keunggulan }}
                                </p>
                            @endforeach
                        @endif

                        <div class="flex items-center justify-center mt-auto space-x-3">
                            <button type="button" wire:click="edit('{{ $paket->id }}')"
                                class=" text-white bg-green-500 border-0 py-1 px-2  focus:outline-none hover:bg-green-600 rounded">Edit

                            </button>
                            <button type="button" wire:click="destroy('{{ $paket->id }}')"
                                class=" text-white bg-red-500 border-0 py-1 px-2  focus:outline-none hover:bg-red-600 rounded">Hapus

                            </button>

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
                            <p class="mb-2">Nama Paket</p>
                            <div class="w-full mb-3 flex">
                                <input class="py-1 px-2 rounded-lg w-full" wire:model="name" type="text" />

                            </div>
                            @error('name')
                                <p class="text-red-500 font-semibold text-sm mb-3">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <div>
                                <p class="mb-2">Harga Paket</p>
                                <div class="w-full mb-3 flex">
                                    <input class="py-1 px-2 rounded-lg w-1/2" wire:model="price" type="number" />

                                </div>
                                @error('price')
                                    <p class="text-red-500 font-semibold text-sm mb-3">{{ $message }}</p>
                                @enderror
                            </div>
                            @if ($mode == 'add')
                                <div>
                                    <div>
                                        <p class="mb-2">Keunggulan</p>
                                        @foreach ($inputs as $key => $value)
                                            <div class="w-full mb-3 flex">
                                                <input class="py-1 px-2 rounded-lg w-full"
                                                    wire:model="keunggulan.{{ $value }}" type="text" />
                                                <button type="button" wire:click.prevent="delInput({{ $key }})"
                                                    class="hover:bg-red-700 ml-2 flex items-center focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                                                        class="font-extrabold"> </span>X</button>
                                            </div>
                                        @endforeach
                                        @error('keunggulan.{{ $value }}')
                                            <p class="text-red-500 font-semibold text-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button type="button" wire:click.prevent="addInput({{ $i }})"
                                        class="hover:bg-green-700 flex items-center focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                                            class="font-extrabold"> </span> + Keunggulan </button>
                                </div>
                            @else
                                <div>
                                    <div>
                                        <p class="mb-2">Keunggulan</p>
                                        @foreach ($keunggulan as $key => $value)
                                            <div class="w-full mb-3 flex">
                                                <input class="py-1 px-2 rounded-lg w-full" value="asasasa"
                                                    wire:model="keunggulan.{{ $key }}" type="text" />
                                                <button type="button"
                                                    wire:click.prevent="delInput({{ $key }})"
                                                    class="hover:bg-red-700 ml-2 flex items-center focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                                                        class="font-extrabold"> </span>X</button>
                                            </div>
                                            @error('keunggulan.{{ $key }}')
                                                <p class="text-red-500 font-semibold text-sm">{{ $message }}</p>
                                            @enderror
                                        @endforeach
                                    </div>
                                    <button type="button" wire:click.prevent="addInput({{ $i }})"
                                        class="hover:bg-green-700 flex items-center focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span
                                            class="font-extrabold"> </span> + Keunggulan </button>
                                </div>
                            @endif

                        </div>
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
