<x-guest-layout>
    @include('components/nav-client')
    @include('components/products-filter')
    @include('components/footer')
    @include('components/busket')
    <!--busket-->
    <script src="{{asset('asset/js/busket.js')}}"></script>
    <!--hamburger menu-->
    <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>