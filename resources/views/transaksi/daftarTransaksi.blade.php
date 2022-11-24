<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="flex flex-col p-8">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">

                        <div class="py-4 inline-block w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <a href="{{ route('transaksiTambah') }}" type="button"
                                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 mb-4 border border-blue-500 hover:border-transparent rounded">
                                    Tambah data peminjam
                                </a>
                                <table class="w-full text-center">
                                    <thead class="border-b bg-gray-800">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                ID
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Nama User
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Vehicle
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Mulai
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Berakhir
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Harga
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Status
                                            </th>
                                        </tr>
                                    </thead class="border-b">
                                    <tbody>
                                        @foreach ($transactions as $item)
                                            <tr class="bg-white border-b">
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $item->id }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->user->name }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->vehicle->name }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->startDate }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->endDate }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->price }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->status }}
                                                </td>

                                            </tr class="bg-white border-b">
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
