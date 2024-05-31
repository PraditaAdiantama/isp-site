@extends('layouts.default')

@section('content')
    <form action="{{ route('transactions.store') }}" class="bg-white pt-10 pb-5 px-10 rounded-md mt-5" method="POST">
        @csrf
        <h3 class="text-2xl font-semibold mb-5">Tambah Transaksi</h3>
        <div class="grid grid-cols-2 gap-5">
            <div class="relative">
                <x-input label="Nama Customer" id="customer_name" oninput="handleChange()" />
                <div id="customer_option" class="bg-white w-full absolute z-20 w-full border px-3 py-2 rounded-md hidden">

                </div>
            </div>
            <x-input label="Tanggal Bayar" type="date" name="tanggal_bayar" />
        </div>
        <x-textarea label="Keterangan">
        </x-textarea>
        <input type="text" name="customer_id" id="customer_id" class="hidden">
        <input type="text" name="user_id" value="{{ Auth::user()->id }}" class="hidden">
        <div class="flex justify-end mt-5 gap-2">
            <a href="{{ route('transaction') }}">
                <x-button type="button" text="Batal" color="gray" />
            </a>
            <x-button text="Tambah" />
        </div>
    </form>
    <script>
        const handleChange = () => {
            const customerName = document.getElementById('customer_name');
            const customerOption = document.getElementById('customer_option');
            if (customerName.value.length > 2) {
                fetch('/customers?search=' + customerName.value)
                    .then(res => res.json())
                    .then(data => {
                        data.data.map(item => {
                            customerOption.innerHTML = '';
                            customerOption.classList.remove('hidden')
                            const option = document.createElement('div');
                            option.innerHTML = item.nama;
                            option.onclick = () => {
                                document.getElementById('customer_id').value = item.id;
                                customerName.value = item.nama;
                                customerOption.innerHTML = ''
                                customerOption.classList.add('hidden')
                            }
                            customerOption.append(option);
                        })
                    });
            } else {
                customerOption.innerHTML = ''
                customerOption.classList.add('hidden')
            }
        }
    </script>
@endsection
