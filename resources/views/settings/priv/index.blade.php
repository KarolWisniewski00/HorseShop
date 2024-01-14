<x-guest-layout>
    @include('components/nav-client')
    <section class="pt-20">
        <div class="container mx-auto text-center my-16 relative">
            <div class="text-5xl relative font-display font-bold bg-clip-text bg-gradient-to-l from-stone-950 to-stone-500  dark:from-stone-50 dark:to-stone-50 text-transparent">POLITYKA PRYWATNOŚCI</div>
        </div>
        <div class="mx-auto container text-center grid grid-cols-1 items-center mb-4">
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center w-full">
                <nav class="flex text-gray-700 px-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{route('index')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-bone-600 dark:text-stone-400 dark:hover:text-white">
                                <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                {{ Breadcrumbs::render('index') }}
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 dark:text-stone-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-stone-400">{{ Breadcrumbs::render('priv') }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container mx-auto text-center my-16 relative">
            @if(auth()->check() && auth()->user()->role === 'ADMIN')
            <div class="mb-4 flex flex-row gap-4 items-center justify-center">
                <a href="{{route('priv.create')}}" class="text-white bg-green-500 hover:bg-green-600 dark:bg-green-700 dark:hover:bg-green-800 dark:focus:ring-green-500 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-plus mr-2"></i>Utwórz treść
                </a>
            </div>
            @endif
            @foreach($elements as $element)
            @switch($element->type)
            @case('title')
            <h1 class="text-4xl dark:text-stone-200">{{$element->content}}</h1>
            @if(auth()->check() && auth()->user()->role === 'ADMIN')
            <div class="mb-4 flex flex-row gap-4 items-center justify-center">
                <a href="{{route('priv.edit', $element)}}" class="text-white bg-blue-500 hover:bg-blue-600 dark:bg-blue-700 dark:hover:bg-blue-800 dark:focus:ring-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-pen-to-square mr-2"></i>Edytuj treść
                </a>
                <form action="{{ route('priv.delete', $element) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć ten produkt?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-white border border-red-600 dark:text-red-700 dark:border-red-800 dark:hover:bg-red-700 dark:focus:ring-red-500 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <i class="fa-solid fa-trash mr-2"></i>Usuń
                    </button>
                </form>
            </div>
            @endif

            @break

            @case('subtitle')
            <h3 class="text-2xl dark:text-stone-200">{{$element->content}}</h3>
            @if(auth()->check() && auth()->user()->role === 'ADMIN')
            <div class="mb-4 flex flex-row gap-4 items-center justify-center">
                <a href="{{route('priv.edit', $element)}}" class="text-white bg-blue-500 hover:bg-blue-600 dark:bg-blue-700 dark:hover:bg-blue-800 dark:focus:ring-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-pen-to-square mr-2"></i>Edytuj treść
                </a>
                <form action="{{ route('priv.delete', $element) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć ten produkt?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 dark:text-red-700 dark:border-red-800 dark:hover:bg-red-700 dark:focus:ring-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <i class="fa-solid fa-trash mr-2"></i>Usuń
                    </button>
                </form>
            </div>
            @endif

            @break

            @default
            <p class="text-lg dark:text-stone-200">{{$element->content}}</p>
            @if(auth()->check() && auth()->user()->role === 'ADMIN')
            <div class="mb-4 flex flex-row gap-4 items-center justify-center">
                <a href="{{route('priv.edit', $element)}}" class="text-white bg-blue-500 hover:bg-blue-600 dark:bg-blue-700 dark:hover:bg-blue-800 dark:focus:ring-blue-500  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-pen-to-square mr-2"></i>Edytuj treść
                </a>
                <form action="{{ route('priv.delete', $element) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć ten produkt?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 dark:text-red-700 dark:border-red-800 dark:hover:bg-red-700 dark:focus:ring-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <i class="fa-solid fa-trash mr-2"></i>Usuń
                    </button>
                </form>
            </div>
            @endif

            @endswitch
            @endforeach
        </div>
        <section>
            @include('components/footer')
            <!--hamburger menu-->
            <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>