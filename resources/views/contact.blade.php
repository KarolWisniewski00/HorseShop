<x-guest-layout>
    @include('components/nav-client')
    <!--hero-->
    <section class="pt-20">
        <div class="container mx-auto text-center my-16 relative">

            <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" width="110" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        display: none;
                    }

                    .st1 {
                        display: inline;
                    }
                </style>
                <g>
                    <path fill="#f3f4f6" d="M28.029,26.097c-0.497,0-0.9,0.404-0.9,0.901c0,1.159-0.942,2.103-2.102,2.103H6.976c-1.154,0-2.093-0.935-2.103-2.088   c0-0.005,0.003-0.01,0.003-0.015c0-0.555,0.222-1.095,0.607-1.481c0.4-0.4,0.931-0.62,1.493-0.62h18.048c2.15,0,3.9-1.75,3.9-3.9V5   c0-2.15-1.75-3.9-3.9-3.9H6.978c-2.151,0-3.902,1.75-3.902,3.902v21.944c0,0.016-0.005,0.032-0.005,0.048   c0,2.153,1.752,3.905,3.905,3.905h18.052c2.151,0,3.902-1.751,3.902-3.904C28.93,26.499,28.526,26.097,28.029,26.097z M4.876,5.002   c0-1.159,0.942-2.103,2.102-2.103h18.047c1.158,0,2.1,0.942,2.1,2.1v15.996c0,1.158-0.941,2.1-2.1,2.1H6.99   c-0.723-0.015-1.507,0.223-2.114,0.612V5.002z" />
                    <path fill="#f3f4f6" d="M11.156,18.679c0.427,0.261,0.979,0.127,1.238-0.295c0.566-0.921,2.015-1.54,3.605-1.54s3.039,0.619,3.605,1.54   c0.17,0.276,0.465,0.429,0.768,0.429c0.16,0,0.323-0.043,0.471-0.133c0.423-0.26,0.556-0.814,0.295-1.238   c-0.445-0.725-1.169-1.321-2.058-1.738c1.06-0.887,1.75-2.202,1.75-3.689c0-2.664-2.167-4.83-4.831-4.83s-4.831,2.167-4.831,4.83   c0,1.487,0.69,2.803,1.75,3.689c-0.889,0.417-1.613,1.013-2.058,1.738C10.601,17.864,10.733,18.418,11.156,18.679z M12.97,12.014   c0-1.671,1.359-3.03,3.03-3.03s3.03,1.359,3.03,3.03s-1.359,3.03-3.03,3.03S12.97,13.685,12.97,12.014z" />
                </g>
            </svg>
            <div class="text-5xl font-horse relative">Kontakt</div>
        </div>
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 gap-8">
                <div class="grid grid-cols-2 gap-8">
                    <div class="flex flex-col justify-center align-middle text-center bg-gray-100 rounded-3xl">
                        ul.Przykładowa 1
                        00-000 Big City
                    </div>
                    <div class="flex flex-col justify-center align-middle text-center bg-gray-100 rounded-3xl">
                        ul.Przykładowa 1
                        00-000 Big City
                    </div>
                </div>
                <div>
                    <iframe class="w-full h-auto rounded-3xl" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2611.129141927443!2d-77.03738663643693!3d38.897150921288095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7bcdecbb1df%3A0x715969d86d0b76bf!2sBia%C5%82y%20Dom!5e0!3m2!1spl!2spl!4v1697729360006!5m2!1spl!2spl" style="border:0;min-height:450px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    @include('components/fbig')
    @include('components/footer')
    @include('components/busket')
    <!--busket-->
    <script src="{{asset('asset/js/busket.js')}}"></script>
    <!--hamburger menu-->
    <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>