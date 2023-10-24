<!--filter-->
<section class="pt-20">

    <div class="container mx-auto text-center my-16 relative">
        <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" width="110" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 40" fill="none" x="0px" y="0px">
            <path fill="#f3f4f6" fill-rule="evenodd" clip-rule="evenodd" d="M9 5V8C8.44772 8 8 8.44772 8 9V11.6736C5.63505 12.7971 4 15.2076 4 18V27C4 28.6569 5.34315 30 7 30H17C18.6569 30 20 28.6569 20 27V18C20 15.2076 18.3649 12.7971 16 11.6736V9C16 8.44772 15.5523 8 15 8V5C15 3.34315 13.6569 2 12 2C10.3431 2 9 3.34315 9 5ZM18 19V24H13V19H18ZM12 17H17.9C17.4367 14.7178 15.419 13 13 13H11C8.23858 13 6 15.2386 6 18V27C6 27.5523 6.44772 28 7 28H17C17.5523 28 18 27.5523 18 27V26H12C11.4477 26 11 25.5523 11 25V18C11 17.4477 11.4477 17 12 17ZM10 10V11H14V10H10ZM13 5V8H11V5C11 4.44772 11.4477 4 12 4C12.5523 4 13 4.44772 13 5Z" fill="black" />
            <path fill="#f3f4f6" fill-rule="evenodd" clip-rule="evenodd" d="M25.1272 7.22112C24.761 6.92629 24.239 6.92629 23.8728 7.22112L23.8707 7.22287C23.3492 7.64558 22.8811 8.14792 22.4657 8.67296C21.7956 9.52015 21 10.8195 21 12.3077C21 14.2758 22.4985 16 24.5 16C26.5015 16 28 14.2758 28 12.3077C28 10.8195 27.2044 9.52015 26.5343 8.67296C26.1187 8.14754 25.65 7.64319 25.1272 7.22112ZM24.5 9.3761C24.353 9.53183 24.1933 9.71274 24.0343 9.91377C23.4544 10.6468 23 11.5013 23 12.3077C23 13.3134 23.7401 14 24.5 14C25.2599 14 26 13.3134 26 12.3077C26 11.5013 25.5456 10.6468 24.9657 9.91377C24.8067 9.71274 24.647 9.53183 24.5 9.3761Z" fill="black" />
        </svg>
        <div class="text-5xl font-horse relative">Sklep</div>
    </div>
    <div class="mx-auto text-center relative">
        <div class="text-5xl font-horse relative my-8">Wszystkie produkty</div>
    </div>
    <div class="container mx-auto flex flex-row">
        <div class="w-1/3 my-16 bg-gray-100 shadow rounded-3xl pb-4">
            <div class="mx-auto text-center relative">
                <div class="text-5xl font-horse relative my-8">Kategorie produktów</div>
            </div>
            <div class="mx-auto flex flex-col items-center px-4 text-center relative pb-3">
                <div class="flex grid grid-cols-2 gap-4">
                    <div class="flex flex-col hover-filter bg-white rounded-3xl p-4">
                        <img class="h-full w-auto -mb-4" src="{{asset('asset/image/filter-oil.jpg')}}">
                        <div class="text-3xl font-horse relative">Olejki</div>
                    </div>
                    <div class="flex flex-col hover-filter bg-white rounded-3xl p-4">
                        <img class="h-full w-auto -mb-4" src="{{asset('asset/image/filter-sup.jpg')}}">
                        <div class="text-3xl font-horse relative">Suplementy</div>
                    </div>
                </div>
            </div>
            <div class="mx-auto text-center relative">
                <div class="text-5xl font-horse relative my-8">Cena</div>
            </div>
            <div class="mx-auto flex flex-col items-start px-4 text-start relative pb-3">
                <label for="steps-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Od 0 zł</label>
                <input id="steps-range" type="range" min="0" max="5" value="2.5" step="0.5" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
            </div>
            <div class="mx-auto flex flex-col items-start px-4 text-start relative pb-3">
                <label for="steps-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Do 100 zł</label>
                <input id="steps-range" type="range" min="0" max="5" value="2.5" step="0.5" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
            </div>
        </div>
        <div class="w-2/3">
            <div class="flex flex-row justify-between align-center">
                <div class="flex flex-row justify-center align-center">
                    <p class="m-0 p-0 text-gray-300">Pokazano: 19</p>
                </div>
                <a href="{{route('shop')}}" class="duration-200 block shadow h-full text-bone-50 m-1 px-4 py-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl">Sortuj: domyślnie</a>
            </div>
            <div class="grid gap-4 lg:grid-cols-4">
                @include('components/product-small')
                @include('components/product-small')
                @include('components/product-small')
                @include('components/product-small')
                @include('components/product-small')
                @include('components/product-small')
                @include('components/product-small')
            </div>
        </div>
    </div>
</section>