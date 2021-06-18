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
    <div class="bg-black md:overflow-hidden">
        <div class="px-4 py-20 md:py-4">
            <div class="md:max-w-6xl md:mx-auto">
                <div class="md:flex md:flex-wrap">
                    <div class="md:w-1/2 text-center md:text-left md:pt-16">
                        <h1 class="font-bold text-white text-2xl md:text-5xl leading-tight mb-4">
                            NAW.Galeri_House.
                        </h1>

                        <p class="text-gray-200 md:text-xl md:pr-48">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id
                            vitae corrupti asperiores veritatis dolorum, commodi aperiam
                            enim.
                        </p>

                        <a href="#"
                            class="mt-6 mb-12 md:mb-0 md:mt-10 inline-block py-3 px-8 text-white bg-gray-800 hover:bg-gray-900 rounded-lg ">Galery
                            Kami</a>
                    </div>
                    <div class="md:w-1/2 relative">

                        <div class="hidden md:block">
                            <div class="mt-10 w-full absolute  right-0 top-0   overflow-hidden"
                                style="transform: rotate(-17); margin-right: -135px; margin-top: 35; z-index: 1;">
                                <div class=" bg-gray-900" style="width: 50rem; height: 25rem;">

                                </div>
                            </div>
                            <div class="mt-10 w-full absolute  right-0 top-0   overflow-hidden"
                                style="transform: rotate(-19deg); margin-right: -145px; margin-top: 45px; z-index: 1;">
                                <div class=" bg-gray-800" style="width: 50rem; height: 24rem;">

                                </div>
                            </div>
                            <div class="mt-10 w-full absolute  right-0 top-0   overflow-hidden"
                                style="transform: rotate(-10deg); margin-right: -150px; margin-top: 30px; z-index: 1;">
                                <img class="h-95 object-cover " style="width: 50rem;"
                                    src="{{ asset('images/hero.jpg') }}" alt="">
                            </div>

                        </div>

                        <div
                            class="md:hidden w-full absolute right-0 top-0 flex rounded-lg bg-white overflow-hidden shadow">
                            <div
                                class="h-4 bg-gray-200 absolute top-0 left-0 right-0 rounded-t-lg flex items-center">
                                <span class="h-2 w-2 rounded-full bg-red-500 inline-block mr-1 ml-2"></span>
                                <span class="h-2 w-2 rounded-full bg-orange-400 inline-block mr-1"></span>
                                <span class="h-2 w-2 rounded-full bg-green-500 inline-block mr-1"></span>
                            </div>
                            <div class="w-32 bg-gray-100 px-2 py-8" style="height: 340px;">
                                <div class="h-2 w-16 bg-gray-300 rounded-full mb-4"></div>
                                <div class="flex items-center mb-4">
                                    <div class="h-5 w-5 rounded-full bg-gray-300 mr-3 flex-shrink-0"></div>
                                    <div>
                                        <div class="h-2 w-10 bg-gray-300 rounded-full"></div>
                                    </div>
                                </div>

                                <div class="h-2 w-16 bg-gray-200 rounded-full mb-2"></div>
                                <div class="h-2 w-10 bg-gray-200 rounded-full mb-2"></div>
                                <div class="h-2 w-20 bg-gray-200 rounded-full mb-2"></div>
                                <div class="h-2 w-6 bg-gray-200 rounded-full mb-2"></div>
                                <div class="h-2 w-16 bg-gray-200 rounded-full mb-2"></div>
                                <div class="h-2 w-10 bg-gray-200 rounded-full mb-2"></div>
                                <div class="h-2 w-20 bg-gray-200 rounded-full mb-2"></div>
                                <div class="h-2 w-6 bg-gray-200 rounded-full mb-2"></div>
                            </div>
                            <div class="flex-1 px-4 py-8">
                                <h2 class="text-xs text-gray-700 font-bold mb-1">
                                    Popular Payments
                                </h2>
                                <div class="flex mb-5">
                                    <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                                    <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                                    <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                                    <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                                </div>

                                <div class="flex flex-wrap -mx-2 mb-5">
                                    <div class="w-1/3 px-2">
                                        <div class="p-3 rounded-lg bg-white shadow">
                                            <div class="w-6 h-6 rounded-full bg-gray-200 mb-2"></div>
                                            <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                                            <div class="h-2 w-6 bg-gray-200 rounded-full"></div>
                                        </div>
                                    </div>
                                    <div class="w-1/3 px-2">
                                        <div class="p-3 rounded-lg bg-white shadow">
                                            <div class="w-6 h-6 rounded-full bg-gray-200 mb-2"></div>
                                            <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                                            <div class="h-2 w-6 bg-gray-200 rounded-full"></div>
                                        </div>
                                    </div>
                                    <div class="w-1/3 px-2">
                                        <div class="p-3 rounded-lg bg-white shadow">
                                            <div class="w-6 h-6 rounded-full bg-gray-200 mb-2"></div>
                                            <div class="h-2 w-10 bg-gray-200 mb-1 rounded-full"></div>
                                            <div class="h-2 w-6 bg-gray-200 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>

                                <h2 class="text-xs text-gray-700 font-bold mb-1">
                                    Populasa
                                </h2>

                                <div
                                    class="w-full flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3">
                                    <div class="w-1/3">
                                        <div class="flex">
                                            <div class="h-5 w-5 rounded-full bg-gray-200 mr-3 flex-shrink-0"></div>
                                            <div>
                                                <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                                                <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/3">
                                        <div class="w-16 rounded-full bg-green-100 py-2 px-4 mx-auto">
                                            <div class="p-1 rounded-full bg-green-200"></div>
                                        </div>
                                    </div>
                                    <div class="w-1/3">
                                        <div class="h-2 w-10 bg-gray-100 rounded-full mx-auto"></div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap justify-between items-center py-3">
                                    <div class="w-1/3">
                                        <div class="flex">
                                            <div class="h-5 w-5 rounded-full bg-gray-200 mr-3 flex-shrink-0"></div>
                                            <div>
                                                <div class="h-2 w-16 bg-gray-200 mb-1 rounded-full"></div>
                                                <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-1/3">
                                        <div class="w-16 rounded-full bg-orange-100 py-2 px-4 mx-auto">
                                            <div class="p-1 rounded-full bg-orange-200"></div>
                                        </div>
                                    </div>
                                    <div class="w-1/3">
                                        <div class="h-2 w-16 bg-gray-100 rounded-full mx-auto"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mr-3 md:hidden absolute right-0 bottom-0 w-40 bg-white rounded-lg shadow-lg px-10 py-6"
                            style="z-index: 2; margin-bottom: -380px;">
                            <div class="bg-gray-800 mx-auto rounded-lg w-20 pt-3 mb-12 relative">
                                <div class="h-3 bg-white"></div>

                                <div class="text-right my-2">
                                    <div class="inline-flex w-3 h-3 rounded-full bg-white -mr-2"></div>
                                    <div
                                        class="inline-flex w-3 h-3 rounded-full bg-gray-800 border-2 border-white mr-2">
                                    </div>
                                </div>

                                <div
                                    class="-ml-4 -mb-6 absolute left-0 bottom-0 w-16 bg-green-700 mx-auto rounded-lg pb-2 pt-3">
                                    <div class="h-2 bg-white mb-2"></div>
                                    <div class="h-2 bg-white w-6 ml-auto rounded mr-2"></div>
                                </div>
                            </div>

                            <div class="text-gray-800 text-center text-sm">
                                Payment for <br />Internet
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="fill-current text-white hidden md:block" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320">
            <path fill-opacity="1" d="M0,224L1440,32L1440,320L0,320Z"></path>
        </svg>
    </div>

    <section class="mx-auto py-10 ">
        <div class="flex justify-center mb-10">
            <h1 class="font-bold text-gray-900 text-2xl md:text-5xl leading-tight mb-4 border-b-4 pb-4">
                Our Galery
            </h1>
        </div>
        <section class="px-20" id="photos">
            @for ($i = 1; $i < 10; $i++)

                <img class="border-2" src="{{ asset('images/g (' . $i . ').jpg') }}" alt="Cute cat">
            @endfor

        </section>
        <div class="flex justify-center">
            <a href="#"
                class="mt-6 mb-12 md:mb-0 md:mt-10 inline-block py-3 px-8 text-white bg-gray-800 hover:bg-gray-900 rounded-lg ">Galery
                Selengkapnya</a>
        </div>
    </section>


</div>
