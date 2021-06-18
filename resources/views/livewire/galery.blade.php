<div>
    <style>
        .bg-black {
            color: #000
        }

        #photos {
            /* Prevent vertical gaps */
            line-height: 0;

            -webkit-column-count: 4;
            -webkit-column-gap: 0px;
            -moz-column-count: 4;
            -moz-column-gap: 0px;
            column-count: 4;
            column-gap: 0px;
        }

        #photos img {
            /* Just in case there are inline attributes */
            width: 100% !important;
            height: auto !important;
        }

        #photos img:hover {
            opacity: .7;
        }

        @media (max-width: 1200px) {
            #photos {
                -moz-column-count: 4;
                -webkit-column-count: 4;
                column-count: 4;
            }
        }

        @media (max-width: 1000px) {
            #photos {
                -moz-column-count: 3;
                -webkit-column-count: 3;
                column-count: 3;
            }
        }

        @media (max-width: 800px) {
            #photos {
                -moz-column-count: 2;
                -webkit-column-count: 2;
                column-count: 2;
            }
        }

        @media (max-width: 400px) {
            #photos {
                -moz-column-count: 1;
                -webkit-column-count: 1;
                column-count: 1;
            }
        }

    </style>


    <section class="mx-auto py-16">
        <div class="flex justify-center mb-5">
            <h1 class="font-bold text-gray-900 text-2xl md:text-5xl leading-tight mb-4 border-b-4 pb-4">
                Our Galery
            </h1>
        </div>
        <div class="flex justify-center items-center mb-10 space-x-4">
            <a href="#"
            class="mt-6 mb-12 md:mb-0 md:mt-10 inline-block py-3 px-8 text-white bg-gray-800 hover:bg-gray-900 rounded-lg ">
            Weeding</a>
            <a href="#"
            class="mt-6 mb-12 md:mb-0 md:mt-10 inline-block py-3 px-8 text-white bg-gray-800 hover:bg-gray-900 rounded-lg ">
            Action</a>
            <a href="#"
            class="mt-6 mb-12 md:mb-0 md:mt-10 inline-block py-3 px-8 text-white bg-gray-800 hover:bg-gray-900 rounded-lg ">
            Pornografi</a>
            <a href="#"
            class="mt-6 mb-12 md:mb-0 md:mt-10 inline-block py-3 px-8 text-white bg-gray-800 hover:bg-gray-900 rounded-lg ">
            Panorama</a>
        </div>
        <section class="px-20" id="photos">
            @for ($i = 1; $i < 10; $i++)

                <img class="border-2" src="{{ asset('images/g (' . $i . ').jpg') }}" alt="Cute cat">
            @endfor

        </section>
        <div class="flex justify-center">
            <a href="#"
                class="mt-6 mb-12 md:mb-0 md:mt-10 inline-block py-3 px-8 text-white bg-gray-800 hover:bg-gray-900 rounded-lg ">
               Next</a>
        </div>
    </section>
</div>
