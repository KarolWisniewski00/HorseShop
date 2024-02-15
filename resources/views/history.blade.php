<x-guest-layout>
    @include('components/nav-client')
    <div class="pt-20">
        <div class="container mx-auto text-center my-16 relative">
            <div class="text-5xl relative font-display font-bold bg-clip-text bg-gradient-to-l from-stone-950 to-stone-500  dark:from-stone-50 dark:to-stone-50 text-transparent">HISTORIA</div>
        </div>
        <div class="mx-auto container text-center grid grid-cols-1 items-center">
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center w-full">
                <nav class="flex text-gray-700 px-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{route('index')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-bone-600 dark:text-stone-400 dark:hover:text-white">
                                <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                </svg>
                                {{ Breadcrumbs::render('index') }}
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 dark:text-stone-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{route('profile')}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-bone-600 md:ml-2 dark:text-stone-400 dark:hover:text-white">{{ Breadcrumbs::render('account') }}</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 dark:text-stone-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-stone-400">{{ Breadcrumbs::render('history') }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container mx-auto text-center my-16 relative px-4">
            <ul class="text-sm font-medium text-center text-stone-500 rounded-xl shadow sm:flex dark:divide-stone-700 dark:text-stone-400">
                <li class="w-full">
                    <a href="{{route('profile')}}" class="my-2 sm:my-2 inline-block w-full p-4 bg-white border-r border-stone-200 dark:border-stone-700 hover:text-stone-700 rounded-xl sm:rounded-s-xl sm:rounded-e-none  hover:bg-stone-50 focus:ring-4 focus:ring-bone-600 focus:outline-none dark:hover:text-white dark:bg-stone-700 dark:hover:bg-stone-600"><i class="fa-solid fa-user me-2"></i>Profil</a>
                </li>
                <li class="w-full">
                    <a href="{{route('history')}}" class="my-2 sm:my-2 inline-block w-full p-4 text-stone-900 bg-stone-100 border-r border-stone-200 dark:border-stone-700 rounded-xl sm:rounded-none sm:rounded-e-none focus:ring-4 focus:ring-bone-600 active focus:outline-none dark:bg-stone-600 dark:text-white" aria-current="page"><i class="fa-solid fa-clock-rotate-left me-2"></i>Historia</a>
                </li>
                @if(auth()->check() && auth()->user()->role === 'ADMIN')
                <li class="w-full">
                    <a href="{{route('dashboard')}}" class="my-2 sm:my-2 inline-block w-full p-4 bg-white border-r border-stone-200 dark:border-stone-700 hover:text-stone-700 rounded-xl sm:rounded-none hover:bg-stone-50 focus:ring-4 focus:ring-bone-600 focus:outline-none dark:hover:text-white dark:bg-stone-700 dark:hover:bg-stone-600"><i class="fa-brands fa-black-tie me-2"></i>Panel Admina</a>
                </li>
                @endif
                <li class="w-full">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="my-2 sm:my-2 inline-block w-full p-4 bg-white border-r border-stone-200 dark:border-stone-700 hover:text-stone-700 rounded-xl sm:rounded-e-xl sm:rounded-s-none hover:bg-stone-50 focus:ring-4 focus:ring-bone-600 focus:outline-none dark:hover:text-white dark:bg-stone-700 dark:hover:bg-stone-600"><i class="fa-solid fa-right-from-bracket me-2"></i>Wyloguj</button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="container mx-auto my-16 relative px-4">
            <div class="relative overflow-x-auto shadow-md rounded-xl my-6 overflow-auto">
                <table class="md:w-full text-sm text-left text-gray-500 table-fixed dark:text-stone-50">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-stone-700 dark:text-stone-50">
                        <tr>
                            <th scope="col" class="px-3 py-3 text-center">
                                #
                            </th>
                            <th scope="col" class="px-3 py-3 text-center">
                                Numer zamówienia
                            </th>
                            <th scope="col" class="px-3 py-3 text-center">
                                Cena
                            </th>
                            <th scope="col" class="px-3 py-3 text-center">
                                Status
                            </th>
                            <th scope="col" class="px-3 py-3 text-center">
                                Data
                            </th>
                            <th scope="col" class="px-3 py-3 text-center">
                                Podgląd
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $k => $o)
                        <tr class="bg-white border-b hover:bg-gray-50
                        @if($o->status == $status['CANCEL'])
                        bg-rose-100 dark:bg-rose-800 dark:border-rose-600 dark:hover:bg-rose-700
                        @elseif($o->status == $status['DONE'])
                        bg-emerald-100 dark:bg-emerald-800 dark:border-emerald-600 dark:hover:bg-emerald-700
                        @elseif($o->status == $status['PROGRESS'])
                        bg-lime-100 dark:bg-lime-800 dark:border-lime-600 dark:hover:bg-lime-700
                        @elseif($o->status == $status['PENDING'])
                        bg-amber-100 dark:bg-amber-800 dark:border-amber-600 dark:hover:bg-amber-700
                        @elseif($o->status == $status['ERROR'])
                        bg-rose-200 dark:bg-rose-900 dark:border-rose-700 dark:hover:bg-rose-800
                        @elseif($o->status == $status['CHECK'])
                        bg-amber-200 dark:bg-amber-900 dark:border-amber-700 dark:hover:bg-amber-800
                        @endif">
                            <th scope="row" class="sm:px-3 sm:py-4 text-center">
                                {{$k+1}}
                            </th>
                            <td class="sm:px-3 sm:py-4 text-center">
                                {{$o->number}}
                            </td>
                            <td class="sm:px-3 sm:py-4 text-center">
                                {{$o->total}}{{$o->status == $status['DONE'] ? ' +'.$o->total.' pkt' : ''}}
                            </td>
                            <td class="sm:px-3 sm:py-4 text-center">
                                {{$o->status}}
                            </td>
                            <td class="sm:px-3 sm:py-4 text-center">
                                {{$o->created_at}}
                            </td>
                            <td class="sm:px-3 sm:py-4 text-center">
                                <a class="shadow block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none text-bone-500 bg-white hover:bg-bone-500 hover:text-white rounded-xl dark:bg-stone-800 dark:text-bone-600 dark:hover:bg-bone-600 dark:hover:text-bone-50" href="{{route('order.show', $o->url)}}"><i class="fa-solid fa-eye"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="px-4 py-2">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
    @include('components/footer')
    @include('components/busket')
    <!--hamburger menu-->
    <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>