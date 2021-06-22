<div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-16 mx-auto">
          <div class="flex flex-col text-center w-full ">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Team  <strong>Yayasan Rumah Sedekah</strong></h1>
          </div>
          <div class="py-10 grid md:grid-cols-3 grid-cols-1 gap-4 ">
            @foreach ($teams as $team)
                <div class="p-5 w-full border-gray-200 border rounded-lg ">
                    <div class="h-full flex items-start">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="{{ $team->pathimages }}">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">{{ $team->name }}</h2>
                            <p class="text-gray-500">{{ $team->jabatan }}</p>

                        </div>

                    </div>

                </div>
            @endforeach
        </div>
        </div>
      </section>
</div>
