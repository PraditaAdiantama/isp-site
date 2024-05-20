<x-modal text="Tambah Transaksi" id="add">
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <div>
            <x-input id="customer" label="Alamat Customer" oninput="handleChange()" required />
            <div class="bg-white fixed z-20" id="customer_select">

            </div>
        </div>
        <input type="text" class="hidden" id="customer_id" name="customer_id">
        <input type="text" class="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
        <x-input type="date" name="tanggal_bayar" label="Tanggal Bayar" required />
        <x-input name="keterangan" label="Keterangan" />
        <div class="flex justify-end w-full gap-2 mt-4">
            <x-button text="Batal" color="gray" onclick="add.close()" />
            <x-button text="Tambah" />
        </div>
    </form>
</x-modal>
<div class="flex justify-end">
    <x-button text="Tambah Transaksi" onclick="add.showModal()" class="my-4" />
</div>

<script>
    const handleChange = () => {
        const customer = document.getElementById('customer');
        const customerId = document.getElementById('customer_id')
        const customerSelect = document.getElementById('customer_select');
        if (customer.value.length > 2) {
            fetch('customers?search=' + customer.value)
                .then(res => res.json())
                .then(data => {
                    customerSelect.innerHTML = '';
                    data?.data.forEach(item => {
                        const option = document.createElement('div');
                        option.innerHTML = item.alamat;
                        option.onclick = () => {
                            customerId.value = item.id;
                            customer.value = item.alamat;
                            customerSelect.innerHTML = '';
                        }
                        customerSelect.append(option);
                    });
                });
        } else {
            customerSelect.innerHTML = '';
        }
    }
</script>
