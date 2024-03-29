<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Karol Wiśniewski">
    <meta name="robots" content="index, follow, max-image-preview:large" />
    <meta property="og:locale" content="pl_PL" />
    <link rel="icon" href="{{asset('asset/image/logo.png')}}" type="image/png">
    <link rel="apple-touch-icon" href="{{asset('asset/image/logo.png')}}">
    <meta name="base-url" content="https://suplementyhh.pl/">
    <link rel="canonical" href="https://suplementyhh.pl/">
    <meta property="og:url" content="https://suplementyhh.pl/">
    <meta property="og:site_name" content="Suplementy Healthy Horse" />
    <meta property="og:type" content="article" />
    <meta name="twitter:card" content="summary" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suplementy Healthy Horse</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/e37acf9c2e.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
    <!-- Styles -->
    @livewireStyles
    
</head>

<body class="bg-stone-50 dark:bg-stone-800">
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
    <div class="absolute top-28 right-4">
        @if(Session::has('success'))
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-stone-500 bg-white rounded-lg shadow dark:text-stone-400 dark:bg-stone-700" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{Session::get('success')}}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-stone-400 hover:text-stone-900 rounded-lg focus:ring-2 focus:ring-stone-300 p-1.5 hover:bg-stone-100 inline-flex items-center justify-center h-8 w-8 dark:text-stone-500 dark:hover:text-white dark:bg-stone-700 dark:hover:bg-stone-700" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        @endif
        @if(Session::has('fail'))
        <div id="toast-danger" class="flex items-center w-full max-w-xs p-4 mb-4 text-stone-500 bg-white rounded-lg shadow dark:text-stone-400 dark:bg-stone-700" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{Session::get('fail')}}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-stone-400 hover:text-stone-900 rounded-lg focus:ring-2 focus:ring-stone-300 p-1.5 hover:bg-stone-100 inline-flex items-center justify-center h-8 w-8 dark:text-stone-500 dark:hover:text-white dark:bg-stone-700 dark:hover:bg-stone-700" data-dismiss-target="#toast-danger" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        @endif
    </div>
    <script>
        $(document).ready(function() {
            $('[data-dismiss-target]').on('click', function() {
                var targetId = $(this).attr('data-dismiss-target');
                $(targetId).remove(); // lub $(targetId).hide(); aby ukryć
            });
        });
    </script>
    @livewireScripts
</body>

</html>