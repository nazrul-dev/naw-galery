<div x-data="data()">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Galeri <strong>Yayasan Rumah Sedekah</strong></h1>

            </div>
            <div class="grid md:grid-cols-3 grid-cols-1 gap-4">
                @foreach ($galeries as $item)
                    <div class="">
                        <a href="javascript:void(0)" @click='zoom("{{ $item->pathimages }}","{{$item->created_at->format('d F Y') }}")'>
                            <img alt="gallery" class="w-full border h-56 object-cover object-center"
                            src="{{ $item->pathimages }}">
                        </a>

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
                <div class="bg-gray-50 flex justify-between items-center p-3">
                    <div> <span>Tanggal Publish </span>
                        <b x-text="date"></b>
                    </div>
                    <button type="button" @click="iszoom = false"
                        class="mt-3 focus:outline-none w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
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
            date: '',
            zoom(path, date) {
                this.date = date;
                this.iszoom = true;
                this.path = path;
            }
        }
    }

</script>
