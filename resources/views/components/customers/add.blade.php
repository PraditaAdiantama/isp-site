<x-modal text="Tambah Customer" id="add">
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <x-textarea label="Alamat" name="alamat" />
        <x-input label="Tanggal Awal Berlangganan" name="tanggal_awal_berlangganan" type="date" />
        <div class="grid grid-cols-2 gap-2">
            <x-select label="Paket" name="packet_id">
                @foreach ($packets as $packet)
                    <option value="{{ $packet->id }}">{{ $packet->nama }}</option>
                @endforeach
            </x-select>
            <x-input label="Keterangan" name="keterangan" />
        </div>
        <div class="flex justify-end gap-2 mt-4">
            <x-button text="Batal" color="gray" type="button" onclick="add.close()" />
            <x-button text="Tambah" />
        </div>
    </form>
</x-modal>
<div class="flex justify-end">
    <x-button text="Tambah Customer" onclick="add.showModal()" class="my-7" />
</div>
