<div class="carousel rounded relative overflow-hidden shadow-xl">
    <div class="carousel-inner relative overflow-hidden w-full">
        <!--Slide 1-->
        <input class="carousel-open hidden" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
            checked="checked">
        {{-- <div class="carousel-item object-contain absolute opacity-0 bg-center"
            style="height:80vh; background-image: url({{ asset('images/web-banner-1.png') }})">

        </div> --}}
        <div class="carousel-item absolute opacity-0 bg-center">
            <img class="object-scale-down h-25 w-full" src={{ asset('images/web-banner-1.png') }}>
        </div>
        <label for="carousel-3"
            class="control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer font-bold text-black hover:text-white rounded-full bg-white hover:bg-red-600 leading-tight text-center z-10 inset-y-0 left-0 my-auto flex justify-center content-center"><i
                class="fas fa-angle-left mt-3"></i></label>
        <label for="carousel-2"
            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-red-600 leading-tight text-center z-10 inset-y-0 right-0 my-auto"><i
                class="fas fa-angle-right mt-3"></i></label>

        <!--Slide 2-->
        <input class="carousel-open hidden" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0 bg-center">
            <img class="object-scale-down h-25 w-full" src={{ asset('images/web-banner-2.png') }}>
        </div>
        <label for="carousel-1"
            class=" control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-red-600 leading-tight text-center z-10 inset-y-0 left-0 my-auto"><i
                class="fas fa-angle-left mt-3"></i></label>
        <label for="carousel-3"
            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden font-bold text-black hover:text-white rounded-full bg-white hover:bg-red-600 leading-tight text-center z-10 inset-y-0 right-0 my-auto"><i
                class="fas fa-angle-right mt-3"></i></label>

        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-red-600">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-2"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-red-600">•</label>
            </li>
        </ol>

    </div>
</div>
