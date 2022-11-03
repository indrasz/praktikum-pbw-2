<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Ini Halaman daftar Pengguna
                </div>
                <div class="w-full p-6">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="w-full text-center">
                                        <thead class="border-b bg-gray-800">
                                            <tr>
                                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                    No
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                    Username
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                    Fullname
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                    Phone Number
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                    Birthday
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                    Address
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead class="border-b">
                                        <tbody>
                                            <tr class="bg-white border-b">
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    1
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    Mark
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    Otto
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    @mdo
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    Mark
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    Otto
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    <a
                                                        href="{{ route('userView', 1) }}"
                                                        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                                        Show
                                                    </a>
                                                </td>
                                            </tr class="bg-white border-b">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
