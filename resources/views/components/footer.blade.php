    <!--footer-->
    <section>
        <footer class="m-4 container mx-auto px-4 my-16">

            <div class="mx-auto bg-white dark:bg-stone-700 border dark:border-stone-600 rounded-xl shadow w-full p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-stone-500 sm:text-center dark:text-stone-50">© {{ \Carbon\Carbon::now()->format('Y') }} Karol Wiśniewski. All Rights Reserved.</span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-stone-500 sm:mt-0">
                    <li>
                        <a href="{{route('rule')}}" class="mr-4 hover:underline md:mr-4 dark:text-stone-400">Regulamin</a>
                    </li>
                    <li>
                        <a href="{{route('priv')}}" class="mr-4 hover:underline md:mr-4 dark:text-stone-400">Polityka prywatności</a>
                    </li>
                    <li>
                        <a href="{{route('cookie')}}" class="mr-4 hover:underline md:mr-4 dark:text-stone-400">Polityka Cookies</a>
                    </li>
                </ul>
            </div>
        </footer>
    </section>