<x-guest-layout>
    @include('components/nav-client')
    <section class="pt-20 dark:bg-stone-800">
        <div class="container mx-auto text-center my-16 relative">
            <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" width="110" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 100 100" x="0px" y="0px">
                <path style="fill-rule: evenodd;" class="cls-1 fill-stone-200 dark:fill-stone-700" d="m68.582,80.523c3.005,0,5.442,2.436,5.442,5.442s-2.437,5.442-5.442,5.442-5.442-2.437-5.442-5.442,2.437-5.442,5.442-5.442h0ZM22.83,33.005c-.254-1.716.965-3.415,2.753-3.415h58.756c1.919,0,3.199,1.953,2.662,3.818-2.174,7.548-4.348,15.095-6.522,22.643-.877,3.045-2.637,7.751-6.65,7.751l-44.037.043c-1.417.001-2.548-1.099-2.755-2.494-1.402-9.449-2.805-18.897-4.207-28.345h0Zm4.987,17.866h7.441v-8.327h-8.677l1.236,8.327h0Zm9.754,0h10.035v-8.327h-10.035v8.327h0Zm12.347,0h10.035v-8.327h-10.035v8.327h0Zm12.347,0h10.035v-8.327h-10.035v8.327h0Zm12.347,0h4.963l2.399-8.327h-7.361v8.327h0Zm4.296,2.313h-4.296v8.173c2.028-.728,3.151-4.195,3.653-5.937l.644-2.235h0Zm-6.609,0h-10.035v8.326l10.035-.01v-8.316h0Zm-12.347,0h-10.035v8.338l10.035-.01v-8.328h0Zm-12.347,0h-10.035v8.35l10.035-.01v-8.34h0Zm-12.347,0h-7.098l1.163,7.833c.04.269.207.525.469.525l5.466-.005v-8.352h0Zm-9.02-12.953h9.02v-8.328l-9.74.003c-.309.046-.447.464-.402.764l1.122,7.56h0Zm11.333,0h10.035v-8.328h-10.035v8.328h0Zm12.347,0h10.035v-8.328h-10.035v8.328h0Zm12.347,0h10.035v-8.328h-10.035v8.328h0Zm12.347,0h8.027l2.147-7.454c.089-.31-.039-.873-.449-.873h-9.726v8.328h0Zm-51.753-13.729c-.601,0-1.094-.458-1.151-1.044l-1.528-10.291c-.089-.601-.425-1.048-.978-1.235l-8.765-2.991c-1.008-.312-1.99,1.05-1.406,2.264.161.336.431.602.771.717l7.274,2.482c.418.124.748.481.815.941l8.655,58.306c.118.731.417,1.505,1.3,1.505h51.665c1.184,0,1.732-1.739.877-2.682-.228-.251-.538-.407-.877-.407H29.92c-.565,0-1.059-.414-1.143-.989l-.735-5.026c0-.639.518-1.156,1.156-1.156h45.667c5.096,0,7.483-5.433,8.676-9.94l7.526-28.446c.253-.958-.31-2.007-1.234-2.007H22.86Zm.996-2.313l-1.389-9.357c-.211-1.423-1.148-2.624-2.491-3.076l-8.738-2.982c-.953-.324-1.964-.199-2.799.284-2.773,1.604-2.392,6.024.624,7.05l6.648,2.269,8.55,57.603c.168,1.877,1.644,3.488,3.587,3.488h51.665c1.013,0,1.927-.449,2.585-1.175,2.227-2.456.564-6.539-2.585-6.539H30.916l-.378-2.546h44.328c6.362,0,9.435-6.1,10.907-11.666l7.526-28.446c.638-2.412-1.019-4.907-3.466-4.907H23.856Zm18.574,62.933c-.639,0-1.156-.518-1.156-1.156s.518-1.156,1.156-1.156,1.156.518,1.156,1.156-.518,1.156-1.156,1.156h0Zm0-6.598c-3.005,0-5.442,2.437-5.442,5.442s2.437,5.442,5.442,5.442,5.442-2.436,5.442-5.442-2.437-5.442-5.442-5.442h0Zm2.213,3.229c-1.966-1.966-5.342-.567-5.342,2.213s3.376,4.178,5.342,2.213c1.222-1.222,1.222-3.203,0-4.425h0Zm23.939,3.369c.639,0,1.156-.518,1.156-1.156s-.518-1.156-1.156-1.156-1.156.518-1.156,1.156.518,1.156,1.156,1.156h0Zm2.213-3.369c-1.966-1.966-5.342-.567-5.342,2.213s3.376,4.178,5.342,2.213c1.222-1.222,1.222-3.203,0-4.425Z" />
            </svg>
            <div class="dark:text-stone-50 text-5xl relative font-display font-bold bg-clip-text bg-gradient-to-l from-stone-950 to-stone-500 text-transparent">PŁATNOŚCI</div>
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
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-stone-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{route('busket')}}" class="ml-1 text-sm font-medium text-stone-700 hover:text-bone-600 md:ml-2 dark:text-stone-400 dark:hover:text-white">{{ Breadcrumbs::render('busket') }}</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-stone-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ml-1 text-sm font-medium text-stone-500 md:ml-2 dark:text-stone-400">{{ Breadcrumbs::render('order.create') }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container mx-auto text-start mt-8">
            <form action="{{route('order.store')}}" method="POST" class="w-full grid grid-cols-1 lg:grid-cols-3 px-4 gap-4">
                <div class="bg-white dark:bg-stone-700 border dark:border-stone-600 rounded-xl shadow px-8 col-span-1 lg:col-span-2 py-16">
                    <div class="w-full">
                        <!--TOKEN-->
                        @csrf
                        @auth
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-stone-900 dark:text-stone-50">Imię i nazwisko</label>
                            <input type="text" id="name" value="{{ old('name') ? old('name') : $user->name}}" name="name" class="bg-white border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-bone-500 focus:border-bone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-stone-50 dark:focus:ring-bone-500 dark:focus:border-bone-500" required>
                            <span class="text-red-500">@error('name') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-stone-900 dark:text-stone-50">Email</label>
                            <input type="email" id="email" value="{{ old('email') ? old('email') : $user->email}}" name="email" class="bg-white border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-bone-500 focus:border-bone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-stone-50 dark:focus:ring-bone-500 dark:focus:border-bone-500" required>
                            <span class="text-red-500">@error('email') {{$message}} @enderror</span>
                        </div>
                        @else
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-stone-900 dark:text-stone-50">Imię i nazwisko</label>
                            <input type="text" id="name" value="{{ old('name') ? old('name') : ''}}" name="name" class="bg-white border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-bone-500 focus:border-bone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-stone-50 dark:focus:ring-bone-500 dark:focus:border-bone-500" required>
                            <span class="text-red-500">@error('name') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-stone-900 dark:text-stone-50">Email</label>
                            <input type="email" id="email" value="{{ old('email') ? old('email') : ''}}" name="email" class="bg-white border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-bone-500 focus:border-bone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-stone-50 dark:focus:ring-bone-500 dark:focus:border-bone-500" required>
                            <span class="text-red-500">@error('email') {{$message}} @enderror</span>
                        </div>
                        @endauth

                        <div class="mb-6">
                            <label for="company" class="block mb-2 text-sm font-medium text-stone-900 dark:text-stone-50">Nazwa firmy (opcjonalne jeśli chcesz fakturę VAT)</label>
                            <input type="text" id="company" value="{{ old('company') ? old('company') : ''}}" name="company" class="bg-white border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-bone-500 focus:border-bone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-stone-50 dark:focus:ring-bone-500 dark:focus:border-bone-500">
                            <span class="text-red-500">@error('company') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-6">
                            <label for="nip" class="block mb-2 text-sm font-medium text-stone-900 dark:text-stone-50">NIP (opcjonalne jeśli chcesz fakturę VAT)</label>
                            <input type="text" id="nip" value="{{ old('nip') ? old('nip') : ''}}" name="nip" class="bg-white border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-bone-500 focus:border-bone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-stone-50 dark:focus:ring-bone-500 dark:focus:border-bone-500">
                            <span class="text-red-500">@error('nip') {{$message}} @enderror</span>
                        </div>
                        <div class="w-100 transition duration-500 ease-in-out" id="adress-container">
                            <div class="mb-6">
                                <label for="post" class="block mb-2 text-sm font-medium text-stone-900 dark:text-stone-50">Kod pocztowy</label>
                                <input type="text" id="post" value="{{ old('post') ? old('post') : ''}}" name="post" class="bg-white border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-bone-500 focus:border-bone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-stone-50 dark:focus:ring-bone-500 dark:focus:border-bone-500" required>
                                <span class="text-red-500">@error('post') {{$message}} @enderror</span>
                            </div>

                            <div class="mb-6">
                                <label for="street" class="block mb-2 text-sm font-medium text-stone-900 dark:text-stone-50">Ulica</label>
                                <input type="text" id="street" value="{{ old('street') ? old('street') : ''}}" name="street" class="bg-white border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-bone-500 focus:border-bone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-stone-50 dark:focus:ring-bone-500 dark:focus:border-bone-500" required>
                                <span class="text-red-500">@error('street') {{$message}} @enderror</span>
                            </div>

                            <div class="mb-6">
                                <label for="street_extra" class="block mb-2 text-sm font-medium text-stone-900 dark:text-stone-50">Ciąg dalszy adresu (opcjonalne)</label>
                                <input type="text" id="street_extra" value="{{ old('street_extra') ? old('street_extra') : ''}}" name="street_extra" class="bg-white border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-bone-500 focus:border-bone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-stone-50 dark:focus:ring-bone-500 dark:focus:border-bone-500">
                                <span class="text-red-500">@error('street_extra') {{$message}} @enderror</span>
                            </div>

                            <div class="mb-6">
                                <label for="city" class="block mb-2 text-sm font-medium text-stone-900 dark:text-stone-50">Miasto</label>
                                <input type="text" id="city" value="{{ old('city') ? old('city') : ''}}" name="city" class="bg-white border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-bone-500 focus:border-bone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-stone-50 dark:focus:ring-bone-500 dark:focus:border-bone-500" required>
                                <span class="text-red-500">@error('city') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="phone" class="block mb-2 text-sm font-medium text-stone-900 dark:text-stone-50">Numer telefonu</label>
                            <input type="text" id="phone" value="{{ old('phone') ? old('phone') : ''}}" name="phone" class="bg-white border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-bone-500 focus:border-bone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-stone-50 dark:focus:ring-bone-500 dark:focus:border-bone-500" required>
                            <span class="text-red-500">@error('phone') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-6">
                            <label for="extra" class="block mb-2 text-sm font-medium text-stone-900 dark:text-stone-50">Uwagi dotyczące zamówienia (opcjonalne)</label>
                            <input type="text" id="extra" value="{{ old('extra') ? old('extra') : ''}}" name="extra" class="bg-white border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-bone-500 focus:border-bone-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-stone-50 dark:focus:ring-bone-500 dark:focus:border-bone-500">
                            <span class="text-red-500">@error('extra') {{$message}} @enderror</span>
                        </div>
                        <div class="flex items-start mb-6">
                            <div class="flex items-center h-5">
                                <input id="rules" type="checkbox" value="{{ old('rules') ? 'checked' : ''}}" class="w-4 h-4 border border-stone-300 rounded bg-white focus:ring-3 focus:ring-bone-300 dark:bg-stone-700 dark:border-stone-600 dark:focus:ring-bone-600 dark:ring-offset-stone-800 dark:focus:ring-offset-stone-800" required>
                            </div>
                            <label for="rules" class="ms-2 text-sm font-medium text-stone-900 dark:text-stone-400">Oświadczam, że zapoznałem/am się z treścią strony <a href="{{route('rule')}}" class="dark:text-bone-600 dark:hover:text-bone-400">regulamin</a></label>
                        </div>

                        <div class="flex justify-start space-x-4">
                            <button type="submit" class="shadow inline-block py-2 px-6 bg-bone-500 hover:bg-white hover:text-bone-500 w-full text-center my-4 text-white font-bold rounded-xl transition duration-200 dark:bg-bone-600 dark:text-bone-50 dark:hover:bg-stone-800 dark:hover:text-bone-600"><i class="fa-solid fa-credit-card mr-2"></i>Zamów i zapłać</button>
                            <a href="{{ url()->previous() }}" class="block mt-6 px-2 py-1.5"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500 dark:text-stone-50">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-stone-700 border dark:border-stone-600 rounded-xl shadow px-8 col-span-1 py-16 h-fit w-full">
                    @php
                    $count = 0
                    @endphp
                    @foreach($cartItems as $item)
                    @if($item->associatedModel->price_promo != null || $item->associatedModel->price_promo != null)
                    @php
                    $count += ($item->associatedModel->price_promo*$item->quantity)
                    @endphp
                    @else
                    @php
                    $count += ($item->price*$item->quantity)
                    @endphp
                    @endif
                    @endforeach
                    <div class="mb-2 flex justify-between">
                        <p class="text-stone-700 dark:text-stone-50">Koszyk</p>
                        <p class="text-stone-700 dark:text-stone-50">{{$count}} zł</p>
                        <input type="hidden" value="{{$count}}" name="count" id="count">
                    </div>
                    <div class="flex justify-between">
                        <p class="text-stone-700 dark:text-stone-50">Wysyłka</p>
                        <p class="text-stone-700 dark:text-stone-50" id="ship-show">{{$ship}} zł</p>
                        <input type="hidden" id="ship-show-input" value="{{$ship}}">
                    </div>
                    <hr class="my-4" />
                    <div class="flex justify-between">
                        <p class="text-lg font-bold dark:text-stone-50">Razem</p>
                        <div class="text-end">
                            <p class="mb-1 text-lg font-bold dark:text-stone-50" id="price-show">{{$count + $ship}} zł</p>
                            <input type="hidden" value="{{$count + $ship}}" name="countship" id="countship">
                            <p class="text-sm text-stone-700 dark:text-stone-50">zawiera VAT</p>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <h3 class="mb-5 text-lg font-medium text-stone-900 dark:text-stone-50">Sposób płatności</h3>
                    <ul class="grid w-full gap-6 md:grid-cols-1">
                        @if($setting['payment_classic'] == '1')
                        <li>
                            <input onclick="$('#price-show').html($('#countship').val()+' zł'); $('#ship-show').html($('#ship-show-input').val()+' zł'); $('#adress-container').removeClass('hidden');" type="radio" id="payment_classic" {{ old('payment_classic') ? 'checked' : ''}} name="hosting" value="payment_classic" class="hidden peer" required>
                            <label for="payment_classic" class="dark:text-stone-50 inline-flex items-center justify-between w-full p-5 text-stone-500 bg-white border border-stone-200 rounded-lg cursor-pointer dark:hover:text-stone-300 dark:border-stone-700 dark:peer-checked:text-bone-500 peer-checked:border-bone-600 peer-checked:text-bone-600 hover:text-stone-600 hover:bg-stone-100 dark:text-stone-400 dark:bg-stone-800 dark:hover:bg-stone-700">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Przelew</div>
                                </div>
                                <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </label>
                        </li>
                        @endif
                        @if($setting['payment_transfer24'] == '1')
                        <li>
                            <input onclick="$('#price-show').html($('#countship').val()+' zł'); $('#ship-show').html($('#ship-show-input').val()+' zł'); $('#adress-container').removeClass('hidden');" type="radio" id="payment_transfer24" {{ old('payment_transfer24') ? 'checked' : 'checked'}} name="hosting" value="payment_transfer24" class="hidden peer">
                            <label for="payment_transfer24" class="dark:text-stone-50 inline-flex items-center justify-between w-full p-5 text-stone-500 bg-white border border-stone-200 rounded-lg cursor-pointer dark:hover:text-stone-300 dark:border-stone-700 dark:peer-checked:text-bone-500 peer-checked:border-bone-600 peer-checked:text-bone-600 hover:text-stone-600 hover:bg-stone-100 dark:text-stone-400 dark:bg-stone-800 dark:hover:bg-stone-700">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Płatność on-line</div>
                                    <div class="w-full dark:text-stone-50">Przelwey24, Blik, ING ...</div>
                                </div>
                                <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </label>
                        </li>
                        @endif
                        @if($setting['payment_shipcash'] == '1')
                        <li>
                            <input onclick="$('#price-show').html($('#countship').val()+' zł'); $('#ship-show').html($('#ship-show-input').val()+' zł'); $('#adress-container').removeClass('hidden');" type="radio" id="payment_shipcash" {{ old('payment_shipcash') ? 'checked' : ''}} name="hosting" value="payment_shipcash" class="hidden peer">
                            <label for="payment_shipcash" class="dark:text-stone-50 inline-flex items-center justify-between w-full p-5 text-stone-500 bg-white border border-stone-200 rounded-lg cursor-pointer dark:hover:text-stone-300 dark:border-stone-700 dark:peer-checked:text-bone-500 peer-checked:border-bone-600 peer-checked:text-bone-600 hover:text-stone-600 hover:bg-stone-100 dark:text-stone-400 dark:bg-stone-800 dark:hover:bg-stone-700">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Płatność przy odbiorze przesyłki</div>
                                </div>
                                <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </label>
                        </li>
                        @endif
                        @if($setting['payment_cash'] == '1')
                        <li>
                            <input onclick="$('#price-show').html($('#count').val()+' zł'); $('#ship-show').html('Brak opłat'); $('#adress-container').addClass('hidden');" type="radio" id="payment_cash" {{ old('payment_cash') ? 'checked' : ''}} name="hosting" value="payment_cash" class="hidden peer">
                            <label for="payment_cash" class="dark:text-stone-50 inline-flex items-center justify-between w-full p-5 text-stone-500 bg-white border border-stone-200 rounded-lg cursor-pointer dark:hover:text-stone-300 dark:border-stone-700 dark:peer-checked:text-bone-500 peer-checked:border-bone-600 peer-checked:text-bone-600 hover:text-stone-600 hover:bg-stone-100 dark:text-stone-400 dark:bg-stone-800 dark:hover:bg-stone-700">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Odbiór osobisty</div>
                                    <div class="w-full dark:text-stone-50">Brak opłat za przesyłkę</div>
                                </div>
                                <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </label>
                        </li>
                        @endif
                    </ul>

                </div>
            </form>
        </div>
    </section>
    @include('components/footer')
    @include('components/busket')
    <!--hamburger menu-->
    <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>