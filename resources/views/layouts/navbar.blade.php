<nav x-data="{ open: false }" class=" lg:fixed bg-opacity-40 bg-gray-50 z-30 object-top shadow-md w-full">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
        <div class="flex-1 flex items-center justify-center sm:items-stretch  sm:justify-start">
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}">
                    <x-application-logo-home class="block h-10 w-auto fill-current text-gray-600" />
                </a>
            </div>
            <div class="flex-1 flex items-center sm:justify-end">
                <div class="hidden space-x-2 sm:-my-px sm:justify-end sm:ml-10 sm:flex">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <x-navbar-link :href="route('index')" :active="request()->routeIs('index')">
                        {{ __('HOME') }}
                    </x-navbar-link>

                    <x-navbar-link :href="route('page.product')" :active="request()->routeIs('page.product')">
                        {{ __('PRODUCT') }}
                    </x-navbar-link>

                    <x-navbar-link :href="route('page.about')" :active="request()->routeIs('page.about')">
                        {{ __('ABOUT US') }}
                    </x-navbar-link>

                    <a href="#"
                        class="text-gray-700 hover:bg-red-500 hover:text-white px-3 py-2 rounded-md text-sm font-bold">CONTACT
                        US</a>
                    <button class="text-gray-700  hover:text-red-500 px-3 py-2 rounded-md text-sm font-bold" onclick="openDropdown(event,'dropdown-example-1')"><i
                            class="fa fa-bars text-sm leading-lg opacity-75"> </i></button>
                    <div class="flex flex-wrap">
                        <div class="w-full sm:w-6/12 md:w-4/12 px-4">
                            <div class="relative inline-flex align-middle w-full">
                                <div class="hidden bg-white  text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                                    style="min-width:12rem" id="dropdown-example-1">
                                    <a href="#"
                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                        EXPLORE RASA
                                    </a>
                                    <a href="#"
                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                        KREASI RASA
                                    </a>
                                    <a href="#"
                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                        PRODUK KAMI
                                    </a>
                                    <a href="#"
                                        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100">
                                        KAMPAYE PRODUK
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Required popper.js -->

                </div>
            </div>
            <div class="-mr-2 flex items-right sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Mobile menu, show/hide based on menu state. -->
<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    <div class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="bg-red-700 text-white block px-3 py-2 rounded-md text-base font-medium"
            aria-current="page">HOME</a>

        <a href="#"
            class="text-gray-300 hover:bg-red-500 hover:text-white block px-3 py-2 rounded-md text-base font-medium">PRODUCT</a>

        <a href="#"
            class="text-gray-300 hover:bg-red-500 hover:text-white block px-3 py-2 rounded-md text-base font-medium">ABOUT US</a>

        <a href="#"
            class="text-gray-300 hover:bg-red-500 hover:text-white block px-3 py-2 rounded-md text-base font-medium">CONTACT US</a>
    </div>
</div>
</nav>


<script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
<script>
    function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "BUTTON") {
      element = element.parentNode;
    }
    var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
      placement: 'bottom-start'
    });
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
  }
</script>
