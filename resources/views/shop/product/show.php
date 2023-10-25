<x-guest-layout>
    @include('components/nav-client')
    <!--filter-->
    <section class="pt-20">

        <div class="container mx-auto text-center my-16 relative">
            <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" width="110" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 40" fill="none" x="0px" y="0px">
                <path fill="#f3f4f6" fill-rule="evenodd" clip-rule="evenodd" d="M9 5V8C8.44772 8 8 8.44772 8 9V11.6736C5.63505 12.7971 4 15.2076 4 18V27C4 28.6569 5.34315 30 7 30H17C18.6569 30 20 28.6569 20 27V18C20 15.2076 18.3649 12.7971 16 11.6736V9C16 8.44772 15.5523 8 15 8V5C15 3.34315 13.6569 2 12 2C10.3431 2 9 3.34315 9 5ZM18 19V24H13V19H18ZM12 17H17.9C17.4367 14.7178 15.419 13 13 13H11C8.23858 13 6 15.2386 6 18V27C6 27.5523 6.44772 28 7 28H17C17.5523 28 18 27.5523 18 27V26H12C11.4477 26 11 25.5523 11 25V18C11 17.4477 11.4477 17 12 17ZM10 10V11H14V10H10ZM13 5V8H11V5C11 4.44772 11.4477 4 12 4C12.5523 4 13 4.44772 13 5Z" fill="black" />
                <path fill="#f3f4f6" fill-rule="evenodd" clip-rule="evenodd" d="M25.1272 7.22112C24.761 6.92629 24.239 6.92629 23.8728 7.22112L23.8707 7.22287C23.3492 7.64558 22.8811 8.14792 22.4657 8.67296C21.7956 9.52015 21 10.8195 21 12.3077C21 14.2758 22.4985 16 24.5 16C26.5015 16 28 14.2758 28 12.3077C28 10.8195 27.2044 9.52015 26.5343 8.67296C26.1187 8.14754 25.65 7.64319 25.1272 7.22112ZM24.5 9.3761C24.353 9.53183 24.1933 9.71274 24.0343 9.91377C23.4544 10.6468 23 11.5013 23 12.3077C23 13.3134 23.7401 14 24.5 14C25.2599 14 26 13.3134 26 12.3077C26 11.5013 25.5456 10.6468 24.9657 9.91377C24.8067 9.71274 24.647 9.53183 24.5 9.3761Z" fill="black" />
            </svg>
            <div class="text-5xl font-horse relative">Produkt</div>
        </div>
        <div class="mx-auto text-center grid grid-cols-2">
            <div class="flex flex-col items-center w-1/2">
                <h3 class="relative m-0 p-0 my-2 font-bold">Nazwa produktu z gramaturą 300ml</h3>
                <h5 class="relative m-0 p-0 my-2 mb-4 font-bold text-xl text-bone-500">100 zł</h5>
                <button class="relative duration-200 block shadow w-full text-bone-50 text-xl md:text-xs px-4 py-2 mb-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl"><i class="fa-solid fa-cart-shopping mr-2"></i>Dodaj do koszyka</button>
            </div>
            <div class="flex flex-col items-center w-1/2">
                <div class="rounded-3xl shadow md:rounded-none md:shadow-none overflow-hidden flex flex-col items-center relative">
                    <img class="h-full md:h-auto w-auto md:rounded-3xl" src="{{asset('asset/image/filter-sup.jpg')}}">
                </div>
            </div>
        </div>
        <div class="mx-auto text-center relative">
            <div class="text-5xl font-horse relative my-8">Sugerowane produkty</div>
        </div>
        <div class="container mx-auto flex flex-row">
            <div class="grid gap-4 lg:grid-cols-3">
                @include('components/product-small')
                @include('components/product-small')
                @include('components/product-small')
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