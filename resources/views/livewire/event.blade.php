<div>
    <section class="text-gray-600 body-font overflow-hidden py-16">
        <div class="container px-5 pb-16 mx-auto text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Event <strong>Yayasan Rumah
                    Sedekah</strong></h1>

        </div>
        <div class="container px-10 mx-auto ">
            <div class="-my-8 divide-y-2 divide-gray-100">

                @foreach ($events as $event)
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span class="font-semibold title-font text-gray-700">TANGGAL EVENT</span>
                            <span class="mt-1 text-gray-800 text-sm font-semibold">{{$event->start_at->format('d F Y')}}</span>
                        </div>
                        <div class="md:flex-grow">
                            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $event->title }}</h2>
                            <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel
                                vexillologist
                                {{ $event->content }}</p>
                                <div class="md:w-2/6 w-2/3 py-5">
                                    <h2 class="py-2 px-2 bg-green-500 text-center rounded-lg font-semibold text-white">
                                        {{date('Y-m-d') > $event->start_at->format('Y-m-d') ? 'Sudah Selesai' : 'Sedang Berlangsung'}}
                                    </h2>
                                </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="container px-10 mx-auto ">
            {{$events->links()}}
        </div>
    </section>
</div>
