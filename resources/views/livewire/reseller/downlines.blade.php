<div>
    <div class="w-full">

        <div class="bg-white shadow-md  my-6 min-h-screen rounded-lg  overflow-x-scroll md:overflow-hidden">
            <table class="min-w-max w-full table-auto">
                <thead>
                    <tr class="bg-green-700 text-gray-50 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Nama</th>
                        <th class="py-3 px-6 text-left">Paket</th>
                        <th class="py-3 px-6 text-left">Referral</th>
                        <th class="py-3 px-6 text-center">Jumlah Reseller</th>
                        <th class="py-3 px-6 text-center">Status</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($referrals as $item)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">

                                    <span class="font-medium">{{ $item->name }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">

                                    <span class="font-medium">{{ $item->packet->name }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <span class="font-semibold">{{ Hashids::encode($item->id) }}</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="font-semibold">{{ $item->referrals->count() }} Reseller</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                @if ($item->active)
                                    <span
                                        class="bg-green-200 text-gray-800 font-semibold py-1 px-3 rounded-full text-xs">Active</span>

                                @else
                                    <span
                                        class="bg-red-200 text-gray-800 font-semibold py-1 px-3 rounded-full text-xs">Nonaktif</span>
                                @endif

                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    @if (!$item->active)
                                        <a href="javascript:void(0)" wire:click="activated('{{ $item->id }}')"
                                            class="w-4 mr-2 transform text-green-600 hover:text-green-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>

                                        <a href="javascript:void(0)" wire:click="destroyed('{{ $item->id }}')"
                                            class="w-4 mr-2 transform text-red-600 hover:text-red-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </a>
                                    @else
                                        <a href="javascript:void(0)"
                                            class="w-4 mr-2 transform text-green-600 hover:text-green-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <div>
            {{$referrals->links()}}
        </div>
    </div>
</div>
