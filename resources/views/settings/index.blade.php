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
                                    <td colspan="2" class="px-6 py-4 font-bold text-xl text-center">
                                        Płatność przelewem
                                    </td>
                                    <td class="px-6 py-4 font-bold text-xl">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <form method="GET" action="">
                                                @foreach($elements as $e)
                                                @if($e->type == 'order_bank_transfer')
                                                @if($e->content == '1')
                                                <input id="payment-checkbox" type="checkbox" value="order_bank_transfer" name="payment" class="sr-only peer" checked>
                                                @else
                                                <input id="payment-checkbox" type="checkbox" value="order_bank_transfer" name="payment" class="sr-only peer">
                                                @endif
                                                @endif
                                                @endforeach
                                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                            </form>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td colspan="2" class="px-6 py-4 font-bold text-xl text-center">
                                        Bramka płatnicza - Przelewy 24
                                    </td>
                                    <td class="px-6 py-4 font-bold text-xl">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <form method="GET" action="">
                                                @foreach($elements as $e)
                                                @if($e->type == 'order_bank_transfer_24')
                                                @if($e->content == '1')
                                                <input id="payment-checkbox-24" type="checkbox" value="order_bank_transfer_24" name="payment" class="sr-only peer" checked>
                                                @else
                                                <input id="payment-checkbox-24" type="checkbox" value="order_bank_transfer_24" name="payment" class="sr-only peer">
                                                @endif
                                                @endif
                                                @endforeach
                                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                            </form>
                                        </label>
                                    </td>
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
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">29 Listopad 2023 V 1.0</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Stworzenie Projektu</h3>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>