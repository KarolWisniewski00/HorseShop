<x-guest-layout>
    @include('components/nav-client')
    <!--filter-->
    <section class="pt-20">

        <div class="container mx-auto text-center my-16 relative">
            <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="" src="{{asset('asset/image/shop-text-bg.svg')}}">
            <div class="text-5xl font-horse relative text-gray-700">Sklep</div>
        </div>
        <div class="mx-auto container text-center grid grid-cols-1 md:grid-cols-2 items-center">
            <!-- Breadcrumb -->
            <nav class="flex text-gray-700 px-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{route('index')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-bone-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            {{ Breadcrumbs::render('index') }}
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="{{route('shop')}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-bone-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{ Breadcrumbs::render('shop') }}</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ Breadcrumbs::render('shop.product.show', $product->id) }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="mx-auto container text-center grid grid-cols-1 md:grid-cols-2 items-center">
            <div class="flex flex-col items-center w-full mx-auto">
                <div class="rounded-3xl md:rounded-none overflow-hidden flex flex-col items-center relative">
                    <img class="h-full md:h-auto w-auto md:rounded-3xl" src="{{asset('asset/image/'.$product->photo)}}">
                </div>
            </div>
            <div class="flex flex-col items-start w-2/3 mx-auto">
                <h5 class="relative m-0 p-0 my-2 text-start text-gray-700 uppercase">
                    @switch($product->attr)
                    @case('oil')
                    OLEJ
                    @break

                    @case('suplement')
                    SUPLEMENT
                    @break

                    @default

                    @endswitch
                </h5>
                <h3 class="relative m-0 p-0 my-2 font-bold text-start text-4xl text-gray-700">{{$product->name}}</h3>
                @if($product->price_promo != 0)
                <div class="flex flex-row align-middle items-center justify-center">
                    <h5 class="relative m-0 p-0 my-2 mb-4 font-bold text-4xl text-bone-500 line-through">{{$product->price}} zł</h5>
                    <h5 class="relative m-0 p-0 my-2 mb-4 mx-2 text-gray-700">{{$product->price_promo}} zł</h5>
                </div>
                @else
                <h5 class="relative m-0 p-0 my-2 mb-4 font-bold text-4xl text-bone-500 product-price">{{$product->price}} zł</h5>
                @endif
                <p class="text-gray-700 my-16">{{$product->description}}</p>
                <div class="flex flex-col items-start text-start relative py-8 w-full">
                    <label for="steps-range" class="block mb-2 font-medium text-gray-700" id="steps-label">1</label>
                    <input id="steps-range" type="range" min="1" max="5" value="1" step="1" class="w-full xl:w-3/4 h-2 bg-gray-200 rounded-xl appearance-none cursor-pointer">
                </div>
                <script>
                    $(document).ready(function() {
                        $("#steps-range").on("input", function() {
                            var value = $(this).val();
                            $("#steps-label").text(value);
                        });
                    });
                </script>
                <form method="POST" action="{{route('product.add', $product)}}" class="w-full">
                    @csrf
                    <button type="submit" class="relative duration-200 block shadow w-full xl:w-3/4 text-bone-50 text-2xl px-4 py-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl"><i class="fa-solid fa-cart-shopping mr-2"></i>Dodaj do koszyka</button>
                </form>
            </div>
        </div>
        <div class="mx-auto text-center relative">
            <div class="text-5xl font-horse relative my-8">Sugerowane produkty</div>
        </div>
        <div class="container mx-auto flex flex-row">
            <div class="grid gap-4 grid-cols-1 lg:grid-cols-3">
                @foreach($products as $product)
                @include('components/product-small')
                @endforeach
            </div>
        </div>
    </section>
    @include('components/footer')
    @include('components/busket')
    <!--hamburger menu-->
    <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>