<x-guest-layout>
    @include('components/nav-client')
    @include('components/hero')
    @include('components/products-grid-news')
    @include('components/products-grid-category-suplement')
    @include('components/products-grid-category-liquid')
    @include('components/fbig')
    @include('components/footer')
    @include('components/busket')
    <!--hamburger menu-->
    <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>