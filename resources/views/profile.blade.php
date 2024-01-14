<x-guest-layout>
    @include('components/nav-client')
    <div class="pt-20">
        <div class="container mx-auto text-center my-16 relative">
            <div class="text-5xl relative font-display font-bold bg-clip-text bg-gradient-to-l from-stone-950 to-stone-500  dark:from-stone-50 dark:to-stone-50 text-transparent">KONTO</div>
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
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 mx-1 text-gray-400 dark:text-stone-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-stone-400">{{ Breadcrumbs::render('account') }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container mx-auto text-center my-16 relative px-4">
            <ul class="hidden text-sm font-medium text-center text-stone-500 rounded-xl shadow sm:flex dark:divide-stone-700 dark:text-stone-400">
                <li class="w-full">
                    <a href="{{route('profile')}}" class="inline-block w-full p-4 text-stone-900 bg-stone-100 border-r border-stone-200 dark:border-stone-700 rounded-s-xl focus:ring-4 focus:ring-bone-600 active focus:outline-none dark:bg-stone-600 dark:text-white" aria-current="page">Profil</a>
                </li>
                <li class="w-full">
                    <a href="{{route('history')}}" class="inline-block w-full p-4 bg-white border-r border-stone-200 dark:border-stone-700 hover:text-stone-700 hover:bg-stone-50 focus:ring-4 focus:ring-bone-600 focus:outline-none dark:hover:text-white dark:bg-stone-700 dark:hover:bg-stone-600">Historia</a>
                </li>
                @if(auth()->check() && auth()->user()->role === 'ADMIN')
                <li class="w-full">
                    <a href="{{route('dashboard')}}" class="inline-block w-full p-4 bg-white border-r border-stone-200 dark:border-stone-700 hover:text-stone-700 hover:bg-stone-50 focus:ring-4 focus:ring-bone-600 focus:outline-none dark:hover:text-white dark:bg-stone-700 dark:hover:bg-stone-600">Panel Admina</a>
                </li>
                @endif
                <li class="w-full">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="inline-block w-full p-4 bg-white border-r border-stone-200 dark:border-stone-700 hover:text-stone-700 rounded-e-xl hover:bg-stone-50 focus:ring-4 focus:ring-bone-600 focus:outline-none dark:hover:text-white dark:bg-stone-700 dark:hover:bg-stone-600">Wyloguj</button>
                    </form>
                </li>
            </ul>
        </div>
        <!-- Announcement Banner -->
        <div class="container mx-auto my-16 relative px-4">
            <div class="bg-gradient-to-r from-bone-600 to-bone-400 dark:from-bone-800 dark:to-bone-600 border rounded-xl shadow p-4 dark:border-stone-600">
                <!-- Grid -->
                <div class="grid justify-center md:grid-cols-2 md:justify-between md:items-center gap-2">
                    <div class="text-center md:text-start md:order-2 md:flex md:justify-end md:items-center">
                        <div class="flex flex-col mx-4">
                            <span class="text-white text-2xl">Masz</span>
                            <span class="text-white text-2xl">{{$user->points != null ? $user->points : 0 }} pkt</span>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="flex items-center">
                        <p class="text-center text-2xl py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg font-medium text-white transition-all">
                            Zbieraj punkty
                        </p>
                        <span class="inline-block border-e border-white/[.3] w-px h-5 mx-2"></span>
                        <p class="text-center py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg font-medium text-white transition-all text-sm">
                            Punkty są przyznawane w momencie zrealizowania zamówienia
                        </p>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
        </div>
        <!-- End Announcement Banner -->
        <div class="container mx-auto my-16 relative px-4">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('profile.update-profile-information-form')

            <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-password-form')
            </div>

            <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <div class="mt-10 sm:mt-0">
                @livewire('profile.two-factor-authentication-form')
            </div>

            <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <x-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
            @endif
        </div>
    </div>
    @include('components/footer')
    @include('components/busket')
    <!--hamburger menu-->
    <script src="{{asset('asset/js/hamburger-menu.js')}}"></script>
</x-guest-layout>