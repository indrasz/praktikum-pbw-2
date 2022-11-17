<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="flex flex-col p-8">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">

                        <div class="py-4 inline-block w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <a href="{{ route('userRegistration') }}" type="button"
                                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 mb-4 border border-blue-500 hover:border-transparent rounded">
                                    Tambah data pengguna
                                </a>
                                <table class="w-full text-center">
                                    <thead class="border-b bg-gray-800">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                ID
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Fullname
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Email
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Alamat
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Action
                                            </th>
                                        </tr>
                                    </thead class="border-b">
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr class="bg-white border-b">
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $item->id }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->username }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->email }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->alamat }}
                                                </td>
                                                <td class="flex-row">
                                                    <a
                                                        href="{{ route('userView', $item->id) }}"
                                                        type="button"
                                                        class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                                        Show
                                                    </a>
                                                    <button
                                                        class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 border border-red-400 rounded shadow">
                                                        Delete
                                                    </button>
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
