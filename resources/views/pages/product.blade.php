<x-home-layout>
    <div class="bg-gradient-to-b from-yellow-400 to-red-400 lg:px-20 px-5">
        <div class="lg:flex lg:pt-24 justify-center pt-6 lg:pb-10  text-red-500 items-center">
            {{-- PRODUK KAMI --}}
            <img class="items-center h-auto w-80" src="{{ asset('images/banner/Produk-Kami.png') }}" />
        </div>
        <div class="lg:flex lg:pb-24 md:pb-10">
            <div class="flex-1">
                <div class="py-2 flex flex-col justify-center sm:py-2">
                    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-red-500 to-red-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                        </div>
                        <div class="relative px-2 py-2 bg-gray-50 shadow-lg sm:rounded-3xl sm:p-5">
                            <div class="lg:flex max-w-md mx-auto">
                                <div class="lg:flex-none">
                                    <img src="{{ asset('images/products/SAMBEL-PEDAS_BOTOL.png') }}"
                                        class="lg:h-72 lg:w-auto sm:h-8 " />
                                </div>
                                <div class="lg:flex-1 divide-y divide-gray-200">
                                    <div
                                        class="py-2 text-base leading-6 space-y-3 text-gray-700 sm:text-lg sm:leading-7">
                                        <div class="font-bold text-sm">
                                            SAMBEL PEDAS TJAP 58 BOTOL 600ml
                                        </div>
                                        <div class="text-sm">
                                            KOMPOSISI
                                        </div>
                                        <ul class="list-disc space-y-1 text-xs">
                                            <i class="fa fa-check-circle text-red-500"></i> Extract Cabe
                                            <i class="fa fa-check-circle text-red-500"></i> Tepung Ubi <br />
                                            <i class="fa fa-check-circle text-red-500"></i> Asam Cuka
                                            <i class="fa fa-check-circle text-red-500"></i> Garam <br />
                                            <i class="fa fa-check-circle text-red-500"></i> Na Siklamat
                                            <i class="fa fa-check-circle text-red-500"></i> Na Benzoat <br />
                                            <i class="fa fa-check-circle text-red-500"></i> Orange S
                                            <i class="fa fa-check-circle text-red-500"></i> CI 15985 <br />
                                            <i class="fa fa-check-circle text-red-500"></i> Extract Garlic
                                            <i class="fa fa-check-circle text-red-500"></i> Tartrazine <br />
                                            <i class="fa fa-check-circle text-red-500"></i> Air
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <div class="py-2 flex flex-col justify-center sm:py-2">
                    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-red-500 to-red-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                        </div>
                        <div class="relative px-2 py-2 bg-gray-50 shadow-lg sm:rounded-3xl sm:p-5">
                            <div class="lg:flex max-w-md mx-auto">
                                <div class="lg:flex-1 lg:h-auto lg:w-full ">
                                    <img src="{{ asset('images/products/SAMBEL-PEDAS_REFILL.png') }}"
                                        class="lg:h-72 lg:w-50 sm:h-8 " />
                                </div>
                                <div class="lg:flex-1 divide-y divide-gray-200">
                                    <div
                                        class="py-2 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                        <div class="font-bold text-sm">
                                            SAMBEL PEDAS TJAP 58 KEMASAN REFILL
                                        </div>
                                        <div class="text-sm">
                                            KOMPOSISI
                                        </div>
                                        <ul class="list-disc space-y-1 text-xs">
                                            <i class="fa fa-check-circle text-red-500"></i> Extract Cabe
                                            <i class="fa fa-check-circle text-red-500"></i> Tepung Ubi <br />
                                            <i class="fa fa-check-circle text-red-500"></i> Asam Cuka
                                            <i class="fa fa-check-circle text-red-500"></i> Garam <br />
                                            <i class="fa fa-check-circle text-red-500"></i> Na Siklamat
                                            <i class="fa fa-check-circle text-red-500"></i> Na Benzoat <br />
                                            <i class="fa fa-check-circle text-red-500"></i> Orange S
                                            <i class="fa fa-check-circle text-red-500"></i> CI 15985 <br />
                                            <i class="fa fa-check-circle text-red-500"></i> Extract Garlic
                                            <i class="fa fa-check-circle text-red-500"></i> Tartrazine <br />
                                            <i class="fa fa-check-circle text-red-500"></i> Air
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('home.findUs')
</x-home-layout>
