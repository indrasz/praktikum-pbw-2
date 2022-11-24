<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Peminjam') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <form method="POST" action="{{ route('transaksiStore') }}">
                    @csrf

                    @php
                        $totalPrice = 0;
                    @endphp
                    <div>
                        <x-input-label for="userId" :value="__('Nama Peminjam')" />

                        <select name="userId" id="userId"
                            class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option selected>Pilih user</option>
                            <option>-------------------------</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>


                        <x-input-error :messages="$errors->get('userId')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="vehicleId" :value="__('Nama Kendaraan')" />

                        <select name="vehicleId" id="vehicleId"
                            class="example block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option selected>Pilih kendaraan</option>
                            <option>-------------------------</option>
                            @foreach ($vehicles as $vehicle)
                                <option value="{{ $vehicle->id }}">
                                    {{ $vehicle->name }}
                                    {{-- @php
                                        // $price = ($vehicle->id == $vehicle->id) ? $totalPrice == $vehicle->price : 0 ;
                                        $totalPrice = ($vehicle->id == )
                                    @endphp --}}
                                </option>
                                {{-- <option value="{{ $vehicle->id, $vehicle->dailyPrice }}">{{ $vehicle->name }}</option> --}}
                            @endforeach
                        </select>


                        <x-input-error :messages="$errors->get('vehicleId')" class="mt-2" />
                    </div>

                    {{-- <input type="text" value="{{ $totalPrice }}"> --}}


                    <div class="mt-4">
                        <x-input-label for="startDate" :value="__('Tanggal dipinjamkan')" />

                        <x-text-input id="startDate" class="block mt-1 w-full" type="date" name="startDate"
                            :value="old('startDate')" required autofocus />

                        <x-input-error :messages="$errors->get('startDate')" class="mt-2" />
                    </div>



                    <div class="mt-4">
                        <x-input-label for="endDate" :value="__('Tanggal dikembalikan')" />

                        <x-text-input id="endDate" class="block mt-1 w-full" type="date" name="endDate"
                            :value="old('endDate')" required autofocus />

                        <x-input-error :messages="$errors->get('endDate')" class="mt-2" />
                    </div>


                    {{-- <input name="price" id="otherValue" type="text" value="{{ $otherValue }}" /> --}}

                    {{-- <div>
                        {{ $price }}
                    </div> --}}

                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('transaksi') }}" type="button"
                            class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-300 focus:bg-red-300 active:bg-red-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Reset
                        </a>

                        <x-primary-button class="ml-4">
                            {{ __('Submit') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // $('#select').on('change', function() {
        //     var otherValue = $(this).find('option:selected').attr('data-price');
        //     console.log($('#otherValue').val(otherValue));

        //     // var valueOne = $('#vehicleId').val().split(',')[0];
        //     // var valueTwo = $('#vehicleId').val().split(',')[1];
        //     // console.log(valueOne); //output 1
        //     // console.log(valueTwo);


        // });

        // $('select.example').change(function() {

        //     var other_val = $('select.example option[value="' + $(this).val() + '"]').data('value');

        //     console.log(other_val);

        // });



        // $('select').on('change', function() {
        //     alert('value a is:' + $("select option:selected").data('valuea') +
        //         '\nvalue b is:' + $("select option:selected").data('valueb')
        //     )
        // });
    </script>
</x-app-layout>
