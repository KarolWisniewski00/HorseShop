<x-guest-layout>
    @include('components/nav-client')
    <section class="pt-20">
        <div class="container mx-auto text-center my-16 relative">
            <div class="text-5xl font-horse relative">O nas</div>
        </div>
        <div class="mx-auto container text-center grid grid-cols-1 md:grid-cols-2 items-center mb-4">
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ Breadcrumbs::render('about') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="container mx-auto text-center my-16 relative">
            <div class="grid grid-cols-2">
                <div class="col-span-1 flex flex-col justify-center">
                    <h1>title</h1>
                    <p>paragraf</p>
                </div>
                <div class="col-span-1">
                    <img class="h-auto w-full" src="{{asset('asset/image/logo.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="container mx-auto text-center my-16 relative">
            <div class="grid grid-cols-2">
                <div class="col-span-1">
                    <img class="h-auto w-full" src="{{asset('asset/image/logo.png')}}" alt="">
                </div>
                <div class="col-span-1 flex flex-col justify-center">
                    <h1>title</h1>
                    <p>paragraf</p>
                </div>
            </div>
        </div>
    </section>
    @include('components/fbig')
    @include('components/footer')
    <!--hamburger menu-->
    <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>