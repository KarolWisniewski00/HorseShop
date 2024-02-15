<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ustawienia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Typ
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Treść
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Edycja
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <input type="hidden" id="link" value="{{url('api/payment')}}">
                                    <td colspan="2" class="px-6 py-4 font-bold text-xl text-center">
                                        Płatność przelewem
                                    </td>
                                    <td class="px-6 py-4 font-bold text-xl">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input id="payment_classic" type="checkbox" value="order_bank_transfer" name="payment" class="sr-only peer" {{ $payment_classic['content'] == '1' ? 'checked' : '' }}>
                                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-blue-600"></div>
                                        </label>
                                    </td>
                                    <script>
                                        $(document).ready(function() {
                                            $('#payment_classic').change(function() {
                                                var val = $(this).is(':checked') ? '1' : '0'; // Zmiana wartości na 1 lub 0 w zależności od stanu checkboxa
                                                $.ajax({
                                                    type: 'GET',
                                                    url: $('#link').val() + '/payment_classic/' + val,
                                                    success: function(data) {
                                                        // Tutaj możesz obsłużyć odpowiedź z serwera po udanej operacji
                                                        console.log('Sukces!', data);
                                                    },
                                                    error: function(xhr, status, error) {
                                                        // Obsługa błędów w przypadku niepowodzenia żądania AJAX
                                                        console.error('Błąd AJAX:', status, error);
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td colspan="2" class="px-6 py-4 font-bold text-xl text-center">
                                        Bramka płatnicza - Przelewy 24
                                    </td>
                                    <td class="px-6 py-4 font-bold text-xl">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input id="payment_transfer24" type="checkbox" value="order_bank_transfer_24" name="payment" class="sr-only peer" {{ $payment_transfer24['content'] == '1' ? 'checked' : '' }}>
                                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300  rounded-full peer  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-blue-600"></div>
                                        </label>
                                    </td>
                                    <script>
                                        $(document).ready(function() {
                                            $('#payment_transfer24').change(function() {
                                                var val = $(this).is(':checked') ? '1' : '0'; // Zmiana wartości na 1 lub 0 w zależności od stanu checkboxa
                                                $.ajax({
                                                    type: 'GET',
                                                    url: $('#link').val() + '/payment_transfer24/' + val,
                                                    success: function(data) {
                                                        // Tutaj możesz obsłużyć odpowiedź z serwera po udanej operacji
                                                        console.log('Sukces!', data);
                                                    },
                                                    error: function(xhr, status, error) {
                                                        // Obsługa błędów w przypadku niepowodzenia żądania AJAX
                                                        console.error('Błąd AJAX:', status, error);
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td colspan="2" class="px-6 py-4 font-bold text-xl text-center">
                                        Płatność przy odbiorze przesyłki
                                    </td>
                                    <td class="px-6 py-4 font-bold text-xl">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input id="payment_shipcash" type="checkbox" value="order_bank_transfer_24" name="payment" class="sr-only peer" {{ $payment_shipcash['content'] == '1' ? 'checked' : '' }}>
                                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300  rounded-full peer  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-blue-600"></div>
                                        </label>
                                    </td>
                                    <script>
                                        $(document).ready(function() {
                                            $('#payment_shipcash').change(function() {
                                                var val = $(this).is(':checked') ? '1' : '0'; // Zmiana wartości na 1 lub 0 w zależności od stanu checkboxa
                                                $.ajax({
                                                    type: 'GET',
                                                    url: $('#link').val() + '/payment_shipcash/' + val,
                                                    success: function(data) {
                                                        // Tutaj możesz obsłużyć odpowiedź z serwera po udanej operacji
                                                        console.log('Sukces!', data);
                                                    },
                                                    error: function(xhr, status, error) {
                                                        // Obsługa błędów w przypadku niepowodzenia żądania AJAX
                                                        console.error('Błąd AJAX:', status, error);
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td colspan="2" class="px-6 py-4 font-bold text-xl text-center">
                                        Odbiór osobisty - Brak opłat za przesyłkę
                                    </td>
                                    <td class="px-6 py-4 font-bold text-xl">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input id="payment_cash" type="checkbox" value="order_bank_transfer_24" name="payment" class="sr-only peer" {{ $payment_cash['content'] == '1' ? 'checked' : '' }}>
                                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300  rounded-full peer  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-blue-600"></div>
                                        </label>
                                    </td>
                                    <script>
                                        $(document).ready(function() {
                                            $('#payment_cash').change(function() {
                                                var val = $(this).is(':checked') ? '1' : '0'; // Zmiana wartości na 1 lub 0 w zależności od stanu checkboxa
                                                $.ajax({
                                                    type: 'GET',
                                                    url: $('#link').val() + '/payment_cash/' + val,
                                                    success: function(data) {
                                                        // Tutaj możesz obsłużyć odpowiedź z serwera po udanej operacji
                                                        console.log('Sukces!', data);
                                                    },
                                                    error: function(xhr, status, error) {
                                                        // Obsługa błędów w przypadku niepowodzenia żądania AJAX
                                                        console.error('Błąd AJAX:', status, error);
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                </tr>
                                @foreach($elements as $element)
                                <tr class="bg-white border-b  hover:bg-gray-50 ">
                                    <td class="px-6 py-4">
                                        {{$element->pl}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$element->content}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('dashboard.settings.edit', $element->id) }}" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <ol class="relative border-s border-gray-200 dark:border-gray-700 mt-4">
                    <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-whites"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400">15 Luty 2024 V 1.1.0</time>
                            <h3 class="text-lg font-semibold text-gray-900">Bramka Płatnicza</h3>
                            <p class="text-gray-900 my-2">- Dodanie trybu "SANDBOX" integracji z <span class="text-rose-500">przelewy 24</span></p>
                            <p class="text-gray-900 my-2">- Dodanie statusów do zamówienia: error i weryfikacja płatności</p>
                            <p class="text-gray-900 my-2">- Dodanie odpowiedniej kolorystyki zamówień według statusu + poprawa wyglądu na telefon</p>
                            <p class="text-gray-900 my-2">- Naprawa nie pokazującego się paska nawigacyjnego na telefon + dodanie ikon</p>
                            <p class="text-gray-900 my-2">- Naprawa błędnie pokazującego się stanu zalogowania na wyglądzie mobilnym</p>
                            <p class="text-gray-900 my-2">- Naprawa notatek w zamówieniu - brakowało kolumny</p>
                            <p class="text-gray-900 my-2">- Dodanie Kodu pocztowego w szczegółach zamówienia w panelu admina</p>

                        </li>
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-whites"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400">15 Luty 2024 V 1.0.3</time>
                            <h3 class="text-lg font-semibold text-gray-900">2 seria poprawek</h3>
                            <p class="text-gray-900 my-2">- Zmiana tekstów an stronie głównej</p>
                            <p class="text-gray-900 my-2">- Dodanie linków facebook i instagram do ustawień</p>
                            <p class="text-gray-900 my-2">- Dodanie widoku punktów "dodano punkty"</p>
                            <p class="text-gray-900 my-2">- zwiększenie czcionki</p>
                            <p class="text-gray-900 my-2">- <span class="text-rose-500">usunięcie</span> ssuwaka wyboru ilość - zostanie zrobione w <span class="text-emerald-500">etapie 2</span></p>
                            <p class="text-gray-900 my-2">- Dodanie kategorii zioła - zapis w bazie + pokazywanie w sklepie - ale konieczna przebudowa algorytmu filtrującego zostanie zrobione w <span class="text-emerald-500">etapie 2</span></p>

                        </li>
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-whites"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400">14 Styczeń 2024 V 1.0.2</time>
                            <h3 class="text-lg font-semibold text-gray-900">1 seria poprawek</h3>
                            <p class="text-gray-900 my-2">- Dodanie kategorii zestawów</p>
                            <p class="text-gray-900 my-2">- Dodanie znikania danych adresowych w momencie wybrania odbioru osobistego</p>
                            <p class="text-gray-900 my-2">- Dodanie widoku punktów, roli i logowania google w użytkownikach w panelu admina</p>
                            <p class="text-gray-900 my-2">- Zabezpieczenie scieżek i podział na role użytkownik niezalogowany, użytkownik zalogowany i administrator</p>

                        </li>
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-whites"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400">13 Styczeń 2024 V 1.0.1</time>
                            <h3 class="text-lg font-semibold text-gray-900">1 seria poprawek</h3>
                            <p class="text-gray-900 my-2">- Dodanie pobierania certyfikatów na podstronie "o nas" z wyznaczonym miejscem na tekst</p>
                            <p class="text-gray-900 my-2">- Dodanie większej ilości pokazywania punktów. Dodano w: strona sklepu pod filtrami, strona produktu pomiędzy produktem a sugerowanymi</p>
                            <p class="text-gray-900 my-2">- Reset bazy danych</p>
                            <p class="text-gray-900 my-2">- Ustawienie domeny jako <span class="text-rose-500">osobny projekt</span> - <a href="http://suplementyhealthyhorse.pl/" class="text-blue-500">link do strony głównej serwera produkcyjnego</a> oraz <a href="http://vps-699e8f36.vps.ovh.net:8005/" class="text-blue-500">link do strony głównej serwera testowego</a></p>
                        </li>
                        <li class="mb-10 ms-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-whites"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400">8 Styczeń 2024 V 1.0.0</time>
                            <h3 class="text-lg font-semibold text-gray-900">Stworzenie Projektu</h3>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>