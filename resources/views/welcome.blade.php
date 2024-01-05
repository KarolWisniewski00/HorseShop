<x-guest-layout>
    @include('components/nav-client')
    @include('components/hero')
    @include('components/products-grid-news')
    <!-- Announcement Banner -->
    <div class="container mx-auto px-4 mt-8">
        <div class="bg-gradient-to-r from-bone-600 to-bone-400 dark:from-bone-800 dark:to-bone-600 border rounded-xl shadow p-4 dark:border-stone-600">
            <!-- Grid -->
            <div class="grid justify-center md:grid-cols-2 md:justify-between md:items-center gap-2">
                <div class="text-center md:text-start md:order-2 md:flex md:justify-end md:items-center">
                    @auth
                    <div class="flex flex-col mx-4">
                        <span class="text-white text-2xl">Masz</span>
                        <span class="text-white text-2xl">{{$user->points != null ? $user->points : 0 }} pkt</span>
                    </div>
                    @else
                    <a class="py-2 m-4 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border-2 border-white text-white hover:border-white/70 hover:text-white/70 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                        Zaloguj przez google
                    </a>
                    @endauth
                </div>
                <!-- End Col -->

                <div class="flex items-center">
                    <p class="text-center text-2xl py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg font-medium text-white transition-all">
                        Zbieraj punkty
                    </p>
                    <span class="inline-block border-e border-white/[.3] w-px h-5 mx-2"></span>
                    <p class="text-center py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg font-medium text-white transition-all text-sm">
                        Na każde konto w momencie zakupu zdobywasz punkty które możesz później wymienić na nagrody i rabaty
                    </p>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
    </div>
    <!-- End Announcement Banner -->
    @include('components/products-grid-category-suplement')
    @include('components/products-grid-category-liquid')
    @include('components/fbig')
    @include('components/footer')
    @include('components/busket')
    <!--hamburger menu-->
    <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>