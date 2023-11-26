<x-guest-layout>
    @include('components/nav-client')
    <section class="pt-20">
        <div class="container mx-auto text-center my-16 relative">
            <div class="text-5xl font-horse relative mb-4">Polityka prywatności</div>
            <div class="mb-4 flex flex-row gap-4 items-center justify-center">
                <a href="{{route('priv.create')}}" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-plus mr-2"></i>Utwórz treść
                </a>
                <a href="" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-eye mr-2"></i>Podgląd
                </a>
            </div>
            @foreach($elements as $element)
            @switch($element->type)
            @case('title')
            <h1 class="text-4xl">{{$element->content}}</h1>
            <div class="mb-4 flex flex-row gap-4 items-center justify-center">
                <a href="{{route('priv.edit', $element)}}" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-pen-to-square mr-2"></i>Edytuj treść
                </a>
                <form action="{{ route('priv.delete', $element) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć ten produkt?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <i class="fa-solid fa-trash mr-2"></i>Usuń
                    </button>
                </form>
            </div>
            @break

            @case('subtitle')
            <h3 class="text-2xl">{{$element->content}}</h3>
            <div class="mb-4 flex flex-row gap-4 items-center justify-center">
                <a href="{{route('priv.edit', $element)}}" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-pen-to-square mr-2"></i>Edytuj treść
                </a>
                <form action="{{ route('priv.delete', $element) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć ten produkt?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <i class="fa-solid fa-trash mr-2"></i>Usuń
                    </button>
                </form>
            </div>
            @break

            @default
            <p class="text-lg">{{$element->content}}</p>
            <div class="mb-4 flex flex-row gap-4 items-center justify-center">
                <a href="{{route('priv.edit', $element)}}" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-pen-to-square mr-2"></i>Edytuj treść
                </a>
                <form action="{{ route('priv.delete', $element) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć ten produkt?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <i class="fa-solid fa-trash mr-2"></i>Usuń
                    </button>
                </form>
            </div>
            @endswitch
            @endforeach
        </div>
        <section>
            @include('components/footer')
            <!--hamburger menu-->
            <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>