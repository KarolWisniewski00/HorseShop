<!--filter-->
<section class="pt-20">

    <div class="container mx-auto text-center my-16 relative">
        <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" alt="" src="{{asset('asset/image/shop-text-bg.svg')}}">
        <div class="text-5xl font-horse relative text-gray-700">Sklep</div>
    </div>
    <div class="mx-auto text-center relative">
        <div class="text-5xl font-horse relative my-8 text-gray-700">Wszystkie produkty</div>
    </div>
    <div class="container mx-auto flex flex-col lg:flex-row px-4">
        <div class="w-full lg:w-1/3 my-16 bg-gray-100 shadow rounded-3xl pb-4">
            <div class="mx-auto text-center relative">
                <div class="text-5xl font-horse relative my-8 text-gray-700">Kategorie produktów</div>
            </div>
            <div class="mx-auto flex flex-col items-center px-4 text-center relative pb-3">
                <div class="flex grid grid-cols-2 gap-4">
                    <div class="flex flex-col hover-filter bg-white rounded-3xl p-4">
                        <img class="h-full w-auto -mb-4" src="{{asset('asset/image/filter-oil.jpg')}}">
                        <div class="text-3xl font-horse relative text-gray-700">Oleje</div>
                    </div>
                    <div class="flex flex-col hover-filter bg-white rounded-3xl p-4">
                        <img class="h-full w-auto -mb-4" src="{{asset('asset/image/filter-sup.jpg')}}">
                        <div class="text-3xl font-horse relative text-gray-700">Suplementy</div>
                    </div>
                </div>
            </div>
            <div class="mx-auto text-center relative">
                <div class="text-5xl font-horse relative my-8 text-gray-700">Cena</div>
            </div>
            <div class="mx-auto flex flex-col items-start px-4 text-start relative pb-3">
                <label for="steps-range" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Od 0 zł</label>
                <input id="steps-range" type="range" min="0" max="5" value="2.5" step="0.5" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
            </div>
            <div class="mx-auto flex flex-col items-start px-4 text-start relative pb-3">
                <label for="steps-range" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Do 100 zł</label>
                <input id="steps-range" type="range" min="0" max="5" value="2.5" step="0.5" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
            </div>
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