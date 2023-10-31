<x-guest-layout>
    @include('components/nav-client')
    <!--filter-->
    <section class="pt-20">

        <div class="container mx-auto text-center my-16 relative">
            <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="" src="{{asset('asset/image/shop-text-bg.svg')}}">
            <div class="text-5xl font-horse relative text-gray-700">Sklep</div>
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
                    <h5 class="relative m-0 p-0 my-2 mb-4 font-bold text-4xl text-bone-500 line-through">{{$product->price}}</h5>
                    <h5 class="relative m-0 p-0 my-2 mb-4 mx-2 text-gray-700">{{$product->price_promo}}</h5>
                </div>
                @else
                <h5 class="relative m-0 p-0 my-2 mb-4 font-bold text-4xl text-bone-500 product-price">{{$product->price}}</h5>
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
                <button class="relative duration-200 block shadow w-full xl:w-3/4 text-bone-50 text-2xl px-4 py-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl"><i class="fa-solid fa-cart-shopping mr-2"></i>Dodaj do koszyka</button>
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
    <!--busket-->
    <script src="{{asset('asset/js/busket.js')}}"></script>
    <!--hamburger menu-->
    <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>