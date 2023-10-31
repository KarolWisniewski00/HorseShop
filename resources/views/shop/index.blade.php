<x-guest-layout>
    @include('components/nav-client')
    @include('components/products-filter')
    @include('components/footer')
    @include('components/busket')
    <!--hamburger menu-->
    <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>