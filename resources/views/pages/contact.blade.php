<x-home-layout>
    <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
    <div class="bg-gradient-to-b bg-fixed from-yellow-400 to-red-400 mx:auto md:px-24 px-2 py-2 text-center lg:pt-20 " style="background-image: url({{ asset('images/background_contact_us_2.jpg') }})">
        <div class="lg:flex">
            <div class="lg:flex-1 lg:w-3/5">
                <div class="text-left">
                    <div class="font-bold lg:text-2xl text-red-600 py-5 px-2">
                        CONTACT US
                    </div>
                    <div class="container px-2">
                        <div class="relative flex w-full flex-wrap items-stretch mb-3">
                            <span
                                class="z-10 h-full leading-snug font-normal text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-2">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" placeholder="Your Name"
                                class="px-2 py-2 placeholder-gray-400 text-gray-600 relative bg-white rounded-xl text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full pl-10" />
                        </div>
                        <div class="relative flex w-full flex-wrap items-stretch mb-3">
                            <span
                                class="z-10 h-full leading-snug font-normal text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-2">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="text" placeholder="Your Email"
                                class="px-2 py-2 placeholder-gray-400 text-gray-600 relative bg-white rounded-xl text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full pl-10" />
                        </div>
                        <label class="block">
                            <textarea class="form-textarea mt-1 block w-full" rows="3"
                                placeholder="Messages"></textarea>
                        </label>
                        <div class="pt-8 text-right">
                            <button
                                class="bg-red-700 text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">
                                <i class="fas fa-paper-plane"></i> SEND
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:flex-1 text-xs text-left lg:text-base pt-20 px-5 lg:w-auto">
                <i class="fa fa-map-marker-alt text-red-500"></i> Jl. Jendral Sudirman No. 28
                Kel. Bendungan Hilir, Kec. Tanah Abang, Kota Adm. Jakarta Pusat <br/>
                <i class="fa fa-phone text-red-500"></i> 082341901641 <br />
                <i class="fa fa-envelope-open-text text-red-500"></i> info@brajamarketindo.co.id <br />
                <i class="fa fa-globe text-red-500"></i> www.sambeltjap58.co.id
            </div>
        </div>
    </div>
    @include('home.findUs')
</x-home-layout>
