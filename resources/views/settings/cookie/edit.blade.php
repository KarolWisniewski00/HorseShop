<x-guest-layout>
    @include('components/nav-client')
    <section class="pt-20">
        <div class="container mx-auto text-center my-16 relative">
            <div class="text-5xl font-horse relative mb-4">Polityka cookies</div>
            <div class="mb-4 flex flex-row gap-4 items-center justify-center">
                <a href="{{route('cookie.create')}}" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-plus mr-2"></i>Utwórz treść
                </a>
                <a href="" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-eye mr-2"></i>Podgląd
                </a>
            </div>
            @foreach($elements as $e)
            @if($e->id == $element->id)
            <form action="{{route('cookie.update', $element)}}" method="POST" class="w-100 border-2 rounded p-4">
                @method('PUT')
                @csrf
                <div class="mb-6">
                    <h3 class="mb-5 text-lg font-medium text-gray-900">Rodzaj treści</h3>
                    <ul class="grid w-full gap-6 grid-cols-1">
                        <li>
                            <input type="radio" id="title" name="type" {{ $element->type == 'title' ? 'checked' : '' }} value="title" class="hidden peer" required>
                            <label for="title" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tytuł</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="subtitle" name="type" {{ $element->type == 'subtitle' ? 'checked' : '' }} value="subtitle" class="hidden peer">
                            <label for="subtitle" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Podtytuł</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="paragraf" name="type" {{ $element->type == 'paragraf' ? 'checked' : '' }} value="paragraf" class="hidden peer">
                            <label for="paragraf" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Paragraf</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    @error('type')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Treść</label>
                    <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Wpisz treść tutaj">{{ $element->content }}</textarea>
                    @error('content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="number" class="block mb-2 text-sm font-medium text-gray-900">Kolejność</label>
                    <input value="{{ old('order') ? old('order') : $element->order }}" name="order" type="number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="0" required>
                    @error('order')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-floppy-disk mr-2"></i>Zapisz
                </button>
                <a href="{{ route('cookie') }}" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-x mr-2"></i>Anuluj
                </a>
            </form>
            @else
            @switch($e->type)
            @case('title')
            <h1 class="text-4xl">{{$e->content}}</h1>
            <div class="mb-4 flex flex-row gap-4 items-center justify-center">
                <a href="{{route('cookie.edit', $e)}}" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-pen-to-square mr-2"></i>Edytuj treść
                </a>
                <form action="{{ route('cookie.delete', $e) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć ten produkt?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <i class="fa-solid fa-trash mr-2"></i>Usuń
                    </button>
                </form>
            </div>
            @break

            @case('subtitle')
            <h3 class="text-2xl">{{$e->content}}</h3>
            <div class="mb-4 flex flex-row gap-4 items-center justify-center">
                <a href="{{route('cookie.edit', $e)}}" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-pen-to-square mr-2"></i>Edytuj treść
                </a>
                <form action="{{ route('cookie.delete', $e) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć ten produkt?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <i class="fa-solid fa-trash mr-2"></i>Usuń
                    </button>
                </form>
            </div>
            @break

            @default
            <p class="text-lg">{{$e->content}}</p>
            <div class="mb-4 flex flex-row gap-4 items-center justify-center">
                <a href="{{route('cookie.edit', $e)}}" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <i class="fa-solid fa-pen-to-square mr-2"></i>Edytuj treść
                </a>
                <form action="{{ route('cookie.delete', $e) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć ten produkt?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <i class="fa-solid fa-trash mr-2"></i>Usuń
                    </button>
                </form>
            </div>
            @endswitch
            @endif
            @endforeach
        </div>
        <section>
            @include('components/footer')
            <!--hamburger menu-->
            <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>