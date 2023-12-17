<div class="fixed bottom-8 right-8 z-10">
    <div class="relative hidden" id="shopping-cart-window">
        <div class="absolute bottom-0 right-0 bg-white rounded p-4 mb-4 shadow rounded-xl border" style="min-width: 20em; max-height:75vh;">
            <div class="flex flex-col justify-center align-middle text-center">
                <h5 class="leading-loose font-semibold"><i class="fa-solid fa-basket-shopping mr-2"></i>Koszyk</h5>
                <div class="shopping-cart-container" style="height: 32vh; overflow-y:auto">

                </div>
                <div class="flex flex-col justify-center align-middle w-full shopping-cart-buttons">

                </div>
            </div>
        </div>
    </div>
    <button type="button" id="shopping-cart" class="duration-200 block h-full text-bone-50 leading-loose text-2xl text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-full flex flex-col items-center align-middle p-4 m-0 shadow"><i class="fa-solid fa-basket-shopping"></i></button>
</div>
<!--busket-->
<a href="#" class="hidden btn-off hover:text-emerald-500 duration-200 block shadow text-white h-full w-full m-1 px-4 py-2 leading-loose text-center font-semibold bg-emerald-500 hover:bg-emerald-600 rounded-xl border hidden"></a>
<input type="hidden" value="{{route('product.get')}}" id="url-get" name="url-get">
<input type="hidden" value="{{route('busket')}}" id="url-busket" name="url-busket">
<input type="hidden" value="{{route('order.create')}}" id="url-order-create" name="url-order-create">
<input type="hidden" value="{{route('shop')}}" id="url-shop" name="url-shop">
<input type="hidden" value="{{asset('asset/image/empty-busket.svg')}}" id="empty-busket" name="empty-busket">
<input type="hidden" value="{{asset('asset/photo/')}}" id="asset-image" name="asset-image">
@if(Session::has('busket-show'))
<input type="hidden" value="busket-show" id="busket-show" name="busket-show">
@endif
<script src="{{asset('asset/js/busket.js')}}"></script>