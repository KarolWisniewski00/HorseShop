<!--nav-->
<section class="fixed top-0 left-0 right-0 z-10 bg-white shadow">
    <nav class="relative px-4 py-4 flex justify-between items-center bg-transparent container mx-auto">
        <a class="text-xl leading-none flex flex-row items-center" href="{{route('index')}}">
            <img class="h-auto w-16" src="{{asset('asset/image/logo.png')}}" alt="logo">
            <span class="font-horse text-neutral-950">Healthy Horse</span>
        </a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-bone-600 p-3 ">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>

        <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
            <li><a class="mx-2 text-sm {{ request()->routeIs('index') ? 'text-bone-600 font-bold' : 'text-neutral-400 hover:text-neutral-500' }}" href="{{route('index')}}">Strona główna</a></li>
            <li><a class="mx-2 text-sm {{ Str::startsWith(request()->path(), 'shop') ? 'text-bone-600 font-bold' : 'text-neutral-400 hover:text-neutral-500' }}" href="{{route('shop')}}">Sklep</a></li>
            <li><a class="mx-2 text-sm {{ request()->routeIs('about') ? 'text-bone-600 font-bold' : 'text-neutral-400 hover:text-neutral-500' }}" href="{{route('about')}}">O nas</a></li>
            <li><a class="mx-2 text-sm {{ request()->routeIs('contact') ? 'text-bone-600 font-bold' : 'text-neutral-400 hover:text-neutral-500' }}" href="{{route('contact')}}">Kontakt</a></li>
        </ul>
        @auth
        <a class="shadow hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-white text-bone-500 hover:bg-bone-500 hover:text-white text-sm text-neutral-900 font-bold  rounded-xl transition duration-200" href="{{route('profile')}}"><i class="fa-solid fa-user mr-2"></i>Konto</a>
        @else
        <a class="shadow hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-white text-bone-500 hover:bg-bone-500 hover:text-white text-sm text-neutral-900 font-bold  rounded-xl transition duration-200" href="{{route('login')}}"><i class="fa-solid fa-arrow-right-to-bracket mr-2"></i>Logowanie</a>
        @endauth
        <a class="shadow hidden lg:inline-block py-2 px-6 bg-bone-500 hover:bg-white hover:text-bone-500 text-sm text-white font-bold rounded-xl transition duration-200" href="{{route('busket')}}"><i class="fa-solid fa-basket-shopping mr-2"></i>Koszyk</a>
    </nav>
    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-stone-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-stone-50 border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-xl font-bold leading-none" href="{{route('index')}}">
                    <img class="h-auto w-16" src="{{asset('asset/image/logo.png')}}" alt="logo">
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-neutral-400 cursor-pointer hover:text-neutral-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="shadow block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none text-bone-500 bg-white hover:bg-bone-500 hover:text-white rounded-xl" href="{{route('index')}}">Strona główna</a>
                    </li>
                    <li class="mb-1">
                        <a class="shadow block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none text-bone-500 bg-white hover:bg-bone-500 hover:text-white rounded-xl" href="{{route('shop')}}">Sklep</a>
                    </li>
                    <li class="mb-1">
                        <a class="shadow block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none text-bone-500 bg-white hover:bg-bone-500 hover:text-white rounded-xl" href="{{route('about')}}">O nas</a>
                    </li>
                    <li class="mb-1">
                        <a class="shadow block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none text-bone-500 bg-white hover:bg-bone-500 hover:text-white rounded-xl" href="{{route('contact')}}">Kontakt</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <div class="pt-6">
                    <a class="shadow block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none text-bone-500 bg-white hover:bg-bone-500 hover:text-white rounded-xl" href="{{route('login')}}"><i class="fa-solid fa-arrow-right-to-bracket mr-2"></i>Logowanie</a>
                    <a class="shadow block px-4 py-3 mb-2 leading-loose text-xs text-center text-neutral-50 font-semibold bg-bone-600 hover:bg-white hover:text-bone-500  rounded-xl" href="{{route('busket')}}"><i class="fa-solid fa-basket-shopping mr-2"></i>Koszyk</a>
                </div>
                <p class="my-4 text-xs text-center text-neutral-400">
                    <span>Karol Wiśniewski © 2023</span>
                </p>
            </div>
        </nav>
    </div>
</section>
