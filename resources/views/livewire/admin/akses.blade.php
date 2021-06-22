<div x-data="{modal : @entangle('modal')}">
   
    <div class="flex justify-between items-center">
        <div class="text-2xl font-bold">
            Akses Pengguna Admin
        </div>
        <div class="flex mx-10 space-x-2">

                            <button  wire:click.prevent="create" class="focus:outline-none bg-green-600 py-1 px-2 text-green-100 rounded text-lg font-semibold"><span class="font-extrabold">+</span> Akses Admin</button>
                                </div>
    </div>
    <div class="overflow-x-auto">
        <div class="flex items-center justify-center  font-sans overflow-hidden">
            <div class="w-full ">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Nama</th>
                                <th class="py-3 px-6 text-left">Email</th>
                                <th class="py-3 px-6 text-center">Akses</th>

                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($users as $item)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <span class="font-medium">{{ $item->name }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <span class="font-medium">{{ $item->email }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">

                                            @foreach (json_decode($item->roles) as $role)
                                                <span
                                                    class="bg-pink-200 text-pink-600 py-1 px-3 mr-1 rounded-full text-xs font-semibold capitalize">{{ $role }}</span>

                                            @endforeach

                                        </div>
                                    </td>

                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">

                                            <button type="button" wire:click.prevent="edit('{{ $item->id }}')"
                                                class="focus:outline-none px-2   rounded-lg bg-yellow-500">

                                                <span class="font-semibold text-sm text-white"> Edit</span>
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if ($modal)


        <div class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div
                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'submit' }}" autocomplete="off">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="mb-2">
                                <p class="mb-2 font-semibold">Nama </p>
                                <input class="px-2 py-1 rounded w-full" type="text" model="name" wire:model="name"
                                    label="Nama Pengguna" />
                                @error('name')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <p class="mb-2 font-semibold"> Email</p>
                                <input class="px-2 py-1 rounded w-full" type="email" model="email" wire:model="email"
                                    label="Email Pengguna" />
                                @error('email')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            @if ($updateMode)
                                <p class="text-md mb-4">Kosongkan Kolom Password Baru Apabila Anda Tidak Ingin Menganti
                                    Password</p>
                            @endif
                            <div class="mb-2">
                                <p class="mb-2 font-semibold">Password</p>
                                <input class="px-2 py-1 rounded w-full" type="password" model="password"
                                    wire:model="password" autocomplete="OFF"
                                    label="{{ !$updateMode ? 'Password' : 'Password Baru ' }}" />
                                @error('password')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            @if (!$updateMode)
                                <div class="mb-2">
                                    <p class="mb-2 font-semibold"> Konfirmasi Password</p>
                                    <input class="px-2 py-1 rounded w-full" type="password" model="passwordConfirmation"
                                        wire:model.lazy="passwordConfirmation" placeholder="Konfirmasi UlangPassword" />

                                </div>
                            @endif

                            <div class="mb-5">
                                <div class="flex flex-col">
                                    <label class="inline-flex items-center mt-3">
                                        <input type="checkbox" wire:model="roles" @if (in_array('superadmin', $roles)) checked @endif value="superadmin" class="form-checkbox h-5 w-5 text-gray-600"><span
                                            class="ml-2 text-gray-700">Superadmin</span>
                                    </label>

                                    <label class="inline-flex items-center mt-3">
                                        <input type="checkbox" wire:model="roles" @if (in_array('admin', $roles)) checked @endif
                                            value="admin" class="form-checkbox h-5 w-5 text-red-600"><span
                                            class="ml-2 text-gray-700">Admin</span>
                                    </label>




                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            @if (!$updateMode)
                                <button type="submit"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                                    Tambahkan
                                </button>
                            @else
                                <button type="submit"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-yellow-600 text-base font-medium text-white hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 sm:ml-3 sm:w-auto sm:text-sm">
                                    Update
                                </button>
                            @endif

                            <button type="button" @click="modal = false"
                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                Tutup
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    @endif
</div>
