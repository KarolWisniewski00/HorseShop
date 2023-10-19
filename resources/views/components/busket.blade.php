<div class="fixed bottom-8 right-8 z-10">
    <div class="relative hidden" id="shopping-cart-window">
        <div class="absolute bottom-0 right-0 bg-white rounded p-4 mb-4 shadow rounded-3xl" style="min-width: 20em; max-height:75vh;">
            <div class="flex flex-col justify-center align-middle text-center">
                <h5 class="leading-loose font-semibold"><i class="fa-solid fa-basket-shopping mr-2"></i>Koszyk</h5>
                <div id="shopping-cart-container" style="height: 32vh; overflow-y:auto" class="">
                    <div class="flex flex-col justify-center align-middle text-center h-full">
                        <img style="max-height:10vh;" class="h-auto max-w-full" alt="" src="{{asset('asset/image/empty-busket.svg')}}">
                        <div class="h4 m-0 p-0 my-3 leading-loose font-semibold">Twój koszyk jest pusty!</div>
                    </div>
                </div>
                <div class="flex flex-col justify-center align-middle w-full" id="shopping-cart-buttons">
                    <a href="" class="duration-200 block shadow h-full w-full text-bone-50 m-1 px-4 py-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl">Zobacz pełne podsumowanie</a>
                    <a href="" class="duration-200 block shadow h-full w-full text-bone-600 m-1 px-4 py-2 leading-loose text-center font-semibold bg-gray-50 hover:bg-bone-600 hover:text-bone-50 rounded-xl">Przejdź do płatności</a>
                </div>
            </div>
        </div>
    </div>
    <button type="button" id="shopping-cart" class="duration-200 block h-full text-bone-50 leading-loose text-2xl text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-full flex flex-col items-center align-middle p-4 m-0 shadow"><i class="fa-solid fa-basket-shopping"></i></button>
</div>