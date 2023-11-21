<!--hero-->
<section class="bd-masthead pt-20">
    <div class="container mx-auto flex flex-col items-center px-4 py-16 text-center relative">

        <div class="grid grid-cols-1 md:grid-cols-2 py-6 bg-gray-100 rounded-xl shadow relative overflow-hidden">
            <img alt="" class="absolute -bottom-28 left-0 md:-bottom-80 md:left-12 xl:-bottom-96 z-0 scale-125 md:scale-100" src="{{asset('asset/image/hero-bg.svg')}}">
            <div class="relative z-1 order-1 md:order-2">
                <img class="h-auto max-w-full" src="{{asset('asset/image/logo.png')}}" alt="logo">
            </div>
            <div class="relative z-1 order-2 md:order-1 flex flex-col justify-center items-start text-start">
                <h1 class="text-4xl font-bold leadi sm:text-5xl px-8">Certyfikowane końskie
                    <span class="text-bone-500">suplementy</span>
                </h1>
                <p class="px-8 my-4 text-lg">oraz inne akcesoria dla konia</p>
                <div class="flex flex-row my-4 justify-center px-8">
                    <a href="{{route('shop')}}" class="duration-200 block shadow h-full text-bone-50 m-1 px-4 py-2 leading-loose text-2xl text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl"><i class="fa-solid fa-angles-right mr-2"></i>Sprawdź</a>
                    <a href="" class="duration-200 block shadow h-full text-bone-600 m-1 px-4 py-2 leading-loose text-2xl text-center font-semibold bg-gray-50 hover:bg-bone-600 hover:text-bone-50 rounded-xl ">Zobacz więcej</a>
                </div>
            </div>
        </div>
    </div>
</section>