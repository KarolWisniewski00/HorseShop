<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Zamówienia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <x-application-logo class="block h-12 w-auto" />
                    <div class="flex flex-row justify-between">
                        <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900">
                            Wszystkie zamówienia
                        </h1>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-2 py-1">
                                        Numer zamówienia
                                    </th>
                                    <th scope="col" class="px-2 py-1">
                                        Imię i Nazwisko
                                    </th>
                                    <th scope="col" class="px-2 py-1">
                                        Firma i NIP
                                    </th>
                                    <th scope="col" class="px-2 py-1">
                                        Adres
                                    </th>
                                    <th scope="col" class="px-2 py-1">
                                        Miasto
                                    </th>
                                    <th scope="col" class="px-2 py-1">
                                        Status
                                    </th>
                                    <th scope="col" class="px-2 py-1">
                                        Status płatności
                                    </th>
                                    <th scope="col" class="px-2 py-1">
                                        Data utworzenia
                                    </th>
                                    <th scope="col" class="px-2 py-1">
                                        Data edycji
                                    </th>
                                    <th scope="col" class="px-2 py-1">
                                        Kwota
                                    </th>
                                    <th scope="col" class="px-2 py-1">
                                        Podgląd
                                    </th>
                                    <th scope="col" class="px-2 py-1">
                                        Anuluj
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $key => $order)
                                <tr class="
                                    @if($order->status == $status['CANCEL'])
                                    bg-rose-100
                                    @elseif($order->status == $status['DONE'])
                                    bg-emerald-100
                                    @elseif($order->status == $status['PROGRESS'])
                                    bg-lime-100
                                    @elseif($order->status == $status['PENDING'])
                                    bg-amber-100
                                    @endif
                                    ">
                                    <td class="px-2 py-1">
                                        {{$order->number}}
                                    </td>
                                    <td class="px-2 py-1">
                                        {{$order->name}}
                                    </td>
                                    <td class="px-2 py-1">
                                        {{$order->company}}
                                        {{$order->nip}}
                                    </td>
                                    <td class="px-2 py-1">
                                        {{$order->adres}}
                                        {{$order->adres_extra}}
                                    </td>
                                    <td class="px-2 py-1">
                                        {{$order->city}}
                                        {{$order->post}}
                                    </td>
                                    <td class="px-2 py-1">
                                        {{$order->status}}
                                    </td>
                                    <td class="px-2 py-1">
                                        @if ($order->payment)
                                        {{$order->payment->status}}
                                        @else
                                        @endif
                                    </td>
                                    <td class="px-2 py-1">
                                        {{$order->created_at}}
                                    </td>
                                    <td class="px-2 py-1">
                                        {{$order->updated_at}}
                                    </td>
                                    <td class="px-2 py-1">
                                        {{$order->total}}
                                    </td>
                                    <td class="px-2 py-1">
                                        <a href="{{route('dashboard.order.show', $order)}}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-600 focus:z-10 focus:ring-4 focus:ring-gray-200"><i class="fa-solid fa-eye"></i></a>
                                    </td>
                                    <td class="px-2 py-1">
                                        <a href="{{route('dashboard.order.status', ['id'=>$order->id, 'slug'=>'6'])}}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-rose-500 rounded-lg hover:bg-rose-600 focus:z-10 focus:ring-4 focus:ring-rose-300"><i class="fa-solid fa-x"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-4 py-2">
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>