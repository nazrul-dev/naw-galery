<div x-data="data()">

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="grid md:grid-cols-2 grid-cols-1 gap-4">

                @foreach ($rewards as $i => $item)
                    <div class="w-full ">
                        <div class="flex border-2 rounded-lg border-gray-200 border-opacity-50  flex p-5 space-x-5">
                            <div class="w-1/3">
                                <a href="javascrip:void(0)" @click='zoom("{{ $item->pathimages }}")'>
                                    <img class="md:h-36 h-28 w-full" src="{{ $item->pathimages }}" alt="">
                                </a>
                            </div>
                            <div class="w-2/3 break-all">
                                <p>{{ $item->content }}</p>
                                <b>Tanggal Publish {{ $item->created_at->format('d F Y') }}</b>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div x-show="iszoom" class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-1 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white p-1">
                    <img :src="path" class="w-full" alt="">
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                    <button type="button" @click="iszoom = false"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    function data() {
        return {
            iszoom: false,
            path: '',
            zoom(path) {

                this.iszoom = true;
                this.path = path;
            }
        }
    }

</script>
