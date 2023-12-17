<!--products grid new-->
<section class="px-4 pb-16">
    <div class="container mx-auto text-center my-16 relative">
        <img alt="" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" src="{{asset('asset/image/products-grid-text-bg.svg')}}">
        <div class="text-5xl relative font-display font-bold bg-clip-text bg-gradient-to-l from-stone-950 to-stone-500 text-transparent">NOWOŚCI</div>
    </div>
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-8">
            <div class="col-span-1 row-span-1 lg:col-span-4 lg:row-span-4 flex flex-col items-center justify-center">
                <div>
                    @foreach($products as $key => $product)
                    @if($key == 0)
                    @include('components/product-big')
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="col-span-1 row-span-1 lg:col-span-2 lg:row-span-2 lg:col-start-5 flex flex-col items-center justify-start">
                <div>
                    @foreach($products as $key => $product)
                    @if($key == 1)
                    @include('components/product-small')
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="col-span-1 row-span-1 lg:col-span-2 lg:row-span-2 lg:col-start-5 lg:col-start-3 flex flex-col items-center justify-end">
                <div>
                    @foreach($products as $key => $product)
                    @if($key == 2)
                    @include('components/product-small')
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>