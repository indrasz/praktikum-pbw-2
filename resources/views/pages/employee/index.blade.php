<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">

                        <div class="py-4 inline-block w-full sm:px-6 lg:px-8">
                            <div class="px-4 py-4">
                                <a href="{{ route('employeeCreate') }}"
                                    class="shadow-lg bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Tambah Data Karyawan
                                </a>
                            </div>
                            <div class="overflow-hidden px-6">

                                <table class="w-full text-center">
                                    <thead class="border-b bg-gray-800">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                #
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Nama
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Agama
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
                                        @foreach ($employees as $employee)
                                            <tr class="bg-white border-b">
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $employee->id }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $employee->name }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $employee->religion }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $employee->address }}
                                                </td>
                                                <td>
                                                    <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                                                        href="{{ route('employeeEdit', $employee->id) }}">
                                                        Edit
                                                    </a>

                                                    <a class="inline-block border border-gray-700 bg-blue-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                                                        href="">
                                                        Show
                                                    </a>

                                                    <form class="inline-block" action="{{ route('employeeDelete', $employee->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button
                                                            class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                                                            Hapus
                                                        </button>
                                                    </form>
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
