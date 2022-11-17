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
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <table id="crudTable">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Alamat</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                    { data: 'id', name: 'id', width: '5%'},
                    { data: 'username', name: 'username' },
                    { data: 'email', name: 'email' },
                    { data: 'alamat', name: 'alamat' },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: true,
                        width: '20%'
                    },
                ],
        });

    </script>


</x-app-layout>
