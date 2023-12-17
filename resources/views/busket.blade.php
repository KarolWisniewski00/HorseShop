<x-guest-layout>
    @include('components/nav-client')
    <section class="pt-20">
        <div class="container mx-auto text-center my-16 relative">
            <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" width="110" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 100 100" x="0px" y="0px">
                <defs>
                    <style>
                        .cls-1 {
                            fill-rule: evenodd;
                        }
                    </style>
                </defs>
                <path fill="#e7e5e4" class="cls-1" d="m68.582,80.523c3.005,0,5.442,2.436,5.442,5.442s-2.437,5.442-5.442,5.442-5.442-2.437-5.442-5.442,2.437-5.442,5.442-5.442h0ZM22.83,33.005c-.254-1.716.965-3.415,2.753-3.415h58.756c1.919,0,3.199,1.953,2.662,3.818-2.174,7.548-4.348,15.095-6.522,22.643-.877,3.045-2.637,7.751-6.65,7.751l-44.037.043c-1.417.001-2.548-1.099-2.755-2.494-1.402-9.449-2.805-18.897-4.207-28.345h0Zm4.987,17.866h7.441v-8.327h-8.677l1.236,8.327h0Zm9.754,0h10.035v-8.327h-10.035v8.327h0Zm12.347,0h10.035v-8.327h-10.035v8.327h0Zm12.347,0h10.035v-8.327h-10.035v8.327h0Zm12.347,0h4.963l2.399-8.327h-7.361v8.327h0Zm4.296,2.313h-4.296v8.173c2.028-.728,3.151-4.195,3.653-5.937l.644-2.235h0Zm-6.609,0h-10.035v8.326l10.035-.01v-8.316h0Zm-12.347,0h-10.035v8.338l10.035-.01v-8.328h0Zm-12.347,0h-10.035v8.35l10.035-.01v-8.34h0Zm-12.347,0h-7.098l1.163,7.833c.04.269.207.525.469.525l5.466-.005v-8.352h0Zm-9.02-12.953h9.02v-8.328l-9.74.003c-.309.046-.447.464-.402.764l1.122,7.56h0Zm11.333,0h10.035v-8.328h-10.035v8.328h0Zm12.347,0h10.035v-8.328h-10.035v8.328h0Zm12.347,0h10.035v-8.328h-10.035v8.328h0Zm12.347,0h8.027l2.147-7.454c.089-.31-.039-.873-.449-.873h-9.726v8.328h0Zm-51.753-13.729c-.601,0-1.094-.458-1.151-1.044l-1.528-10.291c-.089-.601-.425-1.048-.978-1.235l-8.765-2.991c-1.008-.312-1.99,1.05-1.406,2.264.161.336.431.602.771.717l7.274,2.482c.418.124.748.481.815.941l8.655,58.306c.118.731.417,1.505,1.3,1.505h51.665c1.184,0,1.732-1.739.877-2.682-.228-.251-.538-.407-.877-.407H29.92c-.565,0-1.059-.414-1.143-.989l-.735-5.026c0-.639.518-1.156,1.156-1.156h45.667c5.096,0,7.483-5.433,8.676-9.94l7.526-28.446c.253-.958-.31-2.007-1.234-2.007H22.86Zm.996-2.313l-1.389-9.357c-.211-1.423-1.148-2.624-2.491-3.076l-8.738-2.982c-.953-.324-1.964-.199-2.799.284-2.773,1.604-2.392,6.024.624,7.05l6.648,2.269,8.55,57.603c.168,1.877,1.644,3.488,3.587,3.488h51.665c1.013,0,1.927-.449,2.585-1.175,2.227-2.456.564-6.539-2.585-6.539H30.916l-.378-2.546h44.328c6.362,0,9.435-6.1,10.907-11.666l7.526-28.446c.638-2.412-1.019-4.907-3.466-4.907H23.856Zm18.574,62.933c-.639,0-1.156-.518-1.156-1.156s.518-1.156,1.156-1.156,1.156.518,1.156,1.156-.518,1.156-1.156,1.156h0Zm0-6.598c-3.005,0-5.442,2.437-5.442,5.442s2.437,5.442,5.442,5.442,5.442-2.436,5.442-5.442-2.437-5.442-5.442-5.442h0Zm2.213,3.229c-1.966-1.966-5.342-.567-5.342,2.213s3.376,4.178,5.342,2.213c1.222-1.222,1.222-3.203,0-4.425h0Zm23.939,3.369c.639,0,1.156-.518,1.156-1.156s-.518-1.156-1.156-1.156-1.156.518-1.156,1.156.518,1.156,1.156,1.156h0Zm2.213-3.369c-1.966-1.966-5.342-.567-5.342,2.213s3.376,4.178,5.342,2.213c1.222-1.222,1.222-3.203,0-4.425Z" />
            </svg>
            <div class="text-5xl relative font-display font-bold bg-clip-text bg-gradient-to-l from-stone-950 to-stone-500 text-transparent">SZCZEGÓŁY KOSZYKA</div>
        </div>
        <div class="mx-auto container text-center grid grid-cols-1 items-center">
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center w-full">
                <nav class="flex text-stone-700 px-4" aria-label="Breadcrumb">
                    <ol class="inline-flex flex-wrap wrap justify-center items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{route('index')}}" class="inline-flex items-center text-sm font-medium text-stone-700 hover:text-bone-600 dark:text-stone-400 dark:hover:text-white">
                                <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                {{ Breadcrumbs::render('index') }}
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-stone-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{route('shop')}}" class="ml-1 text-sm font-medium text-stone-700 hover:text-bone-600 md:ml-2 dark:text-stone-400 dark:hover:text-white">{{ Breadcrumbs::render('shop') }}</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-stone-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ml-1 text-sm font-medium text-stone-500 md:ml-2 dark:text-stone-400">{{ Breadcrumbs::render('busket') }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container mx-auto px-4 mt-8">
            <div class="mx-auto justify-center md:flex md:space-x-6">
                <div class="rounded-xl md:w-2/3">
                    @php
                    $count = 0
                    @endphp
                    @foreach($cartItems as $item)
                    <div class="justify-between mb-6 rounded-xl bg-white p-6 shadow sm:flex sm:justify-start">
                        <img src="{{asset('asset/photo/'.$item->associatedModel->photo)}}" alt="product-image" class="w-full rounded-xl sm:w-40" />
                        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                            <div class="mt-5 sm:mt-0">
                                <h2 class="text-lg font-bold text-stone-900">{{$item->name}}</h2>
                                <p class="mt-1 text-xs text-stone-700">{{$item->attributes[0]}}</p>
                            </div>
                            <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                <div class="flex items-center border-stone-100">
                                    <form method="POST" action="{{route('product.minus', $item->associatedModel)}}">
                                        @csrf
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="cursor-pointer rounded-l bg-stone-100 py-3 px-3.5 duration-100 hover:bg-bone-500 hover:text-bone-50">
                                            -
                                        </button>
                                    </form>
                                    <div class="h-12 w-12 border bg-white text-xs outline-none flex flex-col items-center">
                                        <div class="my-auto w-full text-center">{{$item->quantity}}</div>
                                    </div>
                                    <form method="POST" action="{{route('product.add', $item->associatedModel)}}">
                                        @csrf
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="cursor-pointer rounded-r bg-stone-100 py-3 px-3 duration-100 hover:bg-bone-500 hover:text-bone-50">
                                            +
                                        </button>
                                    </form>
                                </div>
                                <div class="flex justify-end space-x-4">
                                    <p class="text-sm">{{$item->price*$item->quantity}} PLN</p>
                                    @php
                                    $count += ($item->price*$item->quantity)
                                    @endphp
                                    <form method="POST" action="{{route('product.remove', $item->associatedModel)}}">
                                        @csrf
                                        <button type="submit" onclick="return confirm('Czy na pewno chcesz usunąć ten produkt?');"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @if($count == 0)
                    <div class="flex flex-col justify-center align-middle text-center h-full">
                        <img style="max-height:10vh;" class="h-auto max-w-full" alt="" src="{{asset('asset/image/empty-busket.svg')}}">
                        <div class="h4 m-0 p-0 my-3 leading-loose font-semibold">Twój koszyk jest pusty!</div>
                    </div>
                    @endif
                </div>
                <!-- Sub total -->
                <div class="mt-6 h-full rounded-xl border bg-white p-6 shadow md:mt-0 md:w-1/3">
                    <div class="mb-2 flex justify-between">
                        <p class="text-stone-700">Koszyk</p>
                        <p class="text-stone-700">{{$count}} PLN</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-stone-700">Wysyłka</p>
                        <p class="text-stone-700">14 PLN</p>
                    </div>
                    <hr class="my-4" />
                    <div class="flex justify-between">
                        <p class="text-lg font-bold">Razem</p>
                        <div class="text-end">
                            <p class="mb-1 text-lg font-bold">{{$count + 14}} PLN</p>
                            <p class="text-sm text-stone-700">zawiera VAT</p>
                        </div>
                    </div>
                    @if($count == 0)
                    <a class="shadow inline-block py-2 px-6 bg-bone-500 hover:bg-white hover:text-bone-500 w-full text-center my-4 text-white font-bold rounded-xl transition duration-200" href="{{route('shop')}}"><i class="fa-solid fa-shop mr-2"></i>Przejdź do sklepu</a>
                    @else
                    <a class="shadow inline-block py-2 px-6 bg-bone-500 hover:bg-white hover:text-bone-500 w-full text-center my-4 text-white font-bold rounded-xl transition duration-200" href="{{route('order.create')}}"><i class="fa-solid fa-cash-register mr-2"></i>Przejdź do płatności</a>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @include('components/footer')
    @include('components/busket')
    <!--hamburger menu-->
    <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>