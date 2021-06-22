<div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Video <strong>Yayasan Rumah Sedekah</strong></h1>
            </div>
            <div class="grid md:grid-cols-3 grid-cols-1 gap-4">
                @foreach ($videos as $item)
                    <div class="">
                        <iframe class="w-full h-72 object-cover object-center" src="{{ $item->path }}"
                            frameborder="0"></iframe>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
</div>
