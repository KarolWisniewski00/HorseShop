<a href="{{route('product.show',$product)}}" class="w-full product-small h-full flex flex-col justify-between">
    <div class="rounded-xl shadow overflow-hidden flex flex-col items-center relative">
        <img class="h-full md:h-auto w-auto md:rounded-xl" src="{{asset('asset/photo/'.$product->photo)}}">
    </div>
    <div class="overflow-hidden relative bg-white rounded-xl shadow p-4 -mt-12 mx-4 relative text-center flex flex-col items-center justify-center">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full">
            <img alt="" src="{{asset('asset/image/products-grid-product-bg.svg')}}">
        </div>
        <h3 class="relative m-0 p-0 my-2 font-bold text-stone-950 text-2xl">{{$product->name}}</h3>
        @if($product->price_promo != 0)
        <div class="flex flex-row align-middle items-center justify-center">
            <h5 class="relative m-0 p-0 my-2 mb-4 font-bold text-3xl text-bone-500 line-through">{{$product->price}} zł</h5>
            <h5 class="relative m-0 p-0 my-2 mb-4 mx-2 text-stone-700 product-price">{{$product->price_promo}} zł</h5>
        </div>
        @else
        <h5 class="relative m-0 p-0 my-2 mb-4 font-bold text-2xl text-bone-500 product-price">{{$product->price}} zł</h5>
        @endif
        <form method="POST" action="{{route('product.add', $product)}}" class="w-full">
            @csrf
            <button type="submit" class="relative duration-200 block shadow w-full text-bone-50 text-xl md:text-xs px-4 py-2 mb-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-stone-50 hover:text-bone-600 rounded-xl"><i class="fa-solid fa-cart-shopping mr-2"></i>Dodaj do koszyka</button>
        </form>

    </div>
</a>