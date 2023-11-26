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
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ Breadcrumbs::render('shop') }}</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <div class="mx-auto text-center hidden lg:block relative">
        <div class="text-5xl font-horse relative my-8 text-gray-700">Wszystkie produkty</div>
    </div>
    <div class="container mx-auto flex flex-col lg:flex-row px-4">
        <div class="w-full lg:w-1/3 my-16 bg-gray-100 shadow rounded-xl pb-4">
            <form method="POST" action="{{route('shop.store')}}" id="myForm">
                @csrf
                <div class="mx-auto text-center relative">
                    <div class="text-5xl font-horse relative my-8 text-gray-700">Kategorie produktów</div>
                </div>
                <div class="mx-auto flex flex-col items-center px-4 text-center relative pb-3">
                    <ul class="flex grid grid-cols-2 gap-4">
                        <li>
                            <input @if($category=='oil' || $category=='all' ) {{'checked'}} @endif name="category[]" type="checkbox" id="oil" value="oil" class="hidden peer">
                            <label for="oil" class="flex flex-col hover-filter bg-white rounded-xl p-4 border-2 border-transparent peer-checked:border-2 peer-checked:border-bone-500">
                                <img class="h-full w-auto -mb-4" src="{{asset('asset/image/filter-oil.jpg')}}">
                                <div class="text-xl font-horse relative text-gray-700">Oleje</div>
                            </label>
                        </li>
                        <li>
                            <input @if($category=='suplement' || $category=='all' ) {{'checked'}} @endif name="category[]" type="checkbox" id="sup" value="suplement" class="hidden peer">
                            <label for="sup" class="flex flex-col hover-filter bg-white rounded-xl p-4 border-2 border-transparent peer-checked:border-2 peer-checked:border-bone-500">
                                <img class="h-full w-auto -mb-4" src="{{asset('asset/image/filter-sup.jpg')}}">
                                <div class="text-xl font-horse relative text-gray-700">Suplementy</div>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto text-center relative">
                    <div class="text-5xl font-horse relative my-8 text-gray-700">Cena</div>
                </div>
                <div class="mx-auto flex flex-col items-start px-4 text-start relative pb-3">
                    <label for="steps-range-1" id="min-label" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Od @if($r_price_min!=null){{$r_price_min}}@else{{$price_min}}@endif zł</label>
                    <input id="steps-range-1" name="price_min" type="range" min="{{$price_min}}" max="{{$price_max}}" value="@if($r_price_min!=null){{$r_price_min}}@else{{$price_min}}@endif" step="1" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                </div>
                <div class="mx-auto flex flex-col items-start px-4 text-start relative pb-3">
                    <label for="steps-range-2" id="max-label" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Do @if($r_price_max!=null){{$r_price_max}}@else{{$price_max}}@endif zł</label>
                    <input id="steps-range-2" name="price_max" type="range" min="{{$price_min}}" max="{{$price_max}}" value="@if($r_price_max!=null){{$r_price_max}}@else{{$price_max}}@endif" step="1" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                </div>

                <script>
                    $(document).ready(function() {
                        $('#steps-range-1').on('input', function() {
                            $('#min-label').text('Od ' + $(this).val() + ' zł');
                        });

                        $('#steps-range-2').on('input', function() {
                            $('#max-label').text('Do ' + $(this).val() + ' zł');
                        });
                    });
                </script>
            </form>
        </div>
        <div class="mx-auto text-center lg:hidden relative">
            <div class="text-5xl font-horse relative my-8 text-gray-700">Wszystkie produkty</div>
        </div>
        <div class="w-full lg:w-2/3 my-16">
            <div class="flex flex-row justify-between align-center">
                <div class="flex flex-row justify-center align-center">
                    <p class="m-0 p-0 text-gray-300 ml-4">Pokazano: {{count($products)}}</p>
                </div>
                <div class="relative inline-block text-left">
                    <div>
                        <button type="button" class="duration-200 inline-flex w-full justify-center align-middle items-center gap-x-1.5 shadow h-full text-bone-50 m-1 px-4 py-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            Sortowanie
                            <svg class="-mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="dropdown-menu">
                        <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:text-white hover:bg-bone-500" role="menuitem" tabindex="-1" id="menu-item-0">Domyślnie</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:text-white hover:bg-bone-500" role="menuitem" tabindex="-1" id="menu-item-1">Ceny rosnąco</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:text-white hover:bg-bone-500" role="menuitem" tabindex="-1" id="menu-item-2">Ceny malejąco</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-1 md:grid-cols-2 xl:grid-cols-3 px-4" id="grid">
                @foreach($products as $product)
                @include('components/product-small')
                @endforeach
            </div>
        </div>
    </div>
</section>
<script src="{{asset('asset/js/products-sort.js')}}"></script>
<script>
    // Nasłuchiwanie na zmianę opcji radio
    $('input[name="category[]"]').change(function() {

        $('#myForm').submit();
    });
    $('input[name="price_min"]').change(function() {

        $('#myForm').submit();
    });
    $('input[name="price_max"]').change(function() {

        $('#myForm').submit();
    });
</script>