<!--products grid new-->
<section class="px-4 pb-16">
    <div class="container mx-auto text-center my-16 relative">
        <img alt="" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" src="{{asset('asset/image/products-grid-text-bg.svg')}}">
        <div class="text-5xl relative font-display font-bold bg-clip-text bg-gradient-to-l from-stone-950 to-stone-500 text-transparent">NOWOŚCI</div>
    </div>
    <div class="container mx-auto px-4 mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-6 grid-rows-3 md:grid-rows-4 gap-8">
            <div class="md:col-span-4 md:row-span-4 flex items-center">
                @foreach($products as $key => $product)
                @if($key == 0)
                @include('components/product-big')
                @endif
                @endforeach
            </div>
            <div class="flex items-center md:items-start md:col-span-2 md:row-span-2 md:col-start-5">
                @foreach($products as $key => $product)
                @if($key == 1)
                @include('components/product-small')
                @endif
                @endforeach
            </div>
            <div class="md:col-span-2 md:row-span-2 md:col-start-5 md:col-start-3 flex items-start md:items-end">
                @foreach($products as $key => $product)
                @if($key == 2)
                @include('components/product-small')
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>