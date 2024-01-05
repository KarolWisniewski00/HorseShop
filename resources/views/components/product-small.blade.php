<a href="{{route('product.show',$product)}}" class="w-full h-full product-small">
    <div class="overflow-hidden aspect-square rounded-xl border shadow flex flex-col justify-center items-center relative dark:border-stone-600">
        <img class="w-full h-auto bg-white" src="{{asset('asset/photo/'.$product->photo)}}" onerror="this.onerror=null; this.src=`{{ asset('asset/image/photo-noloaded.svg') }}`;">
    </div>
    <div class="overflow-hidden relative bg-white rounded-xl border shadow p-4 mx-4 -mt-12 relative text-center flex flex-col items-center justify-center dark:bg-stone-700 dark:border-stone-600">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full dark:hidden">
            <img alt="" src="{{asset('asset/image/products-grid-product-bg.svg')}}">
        </div>
        <h3 class="relative m-0 p-0 my-2 font-bold text-stone-950 text-2xl dark:text-bone-50">{{$product->name}}</h3>
        @if($product->price_promo != 0)
        <div class="flex flex-row align-middle items-center justify-center">
            <h5 class="relative m-0 p-0 my-2 mb-4 text-3xl text-rose-500 line-through">{{$product->price}} zł</h5>
            <h5 class="relative m-0 p-0 my-2 mb-4 mx-2 font-bold text-bone-500 product-price dark:text-bone-600">{{$product->price_promo}} zł</h5>
        </div>
        @else
        <h5 class="relative m-0 p-0 my-2 mb-4 font-bold text-2xl text-bone-500 product-price dark:text-bone-600">{{$product->price}} zł</h5>
        @endif
        <form method="POST" action="{{route('product.add', $product)}}" class="w-full">
            @csrf
            <button type="submit" class="relative duration-200 block shadow w-full text-bone-50 text-xl md:text-xs px-4 py-2 mb-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl border dark:bg-bone-600 dark:text-bone-50 dark:hover:bg-stone-800 dark:hover:text-bone-600 dark:border-0"><i class="fa-solid fa-cart-shopping mr-2"></i>Dodaj do koszyka</button>
        </form>

    </div>
</a>