<x-modal id="add" text="Tambah Paket">
    <form action="{{ route('packet.store') }}" method="POST" class="mt-2">
        @csrf
        <x-input label="Nama Paket" name="nama" placeholder="Nama Paket" />
        <x-input label="Harga" name="harga" placeholder="Harga" type="number" />
        <div class="flex justify-end w-full gap-2 mt-4">
            <x-button text="Batal" color="gray" onclick="add.close()" />
            <x-button text="Tambah" />
        </div>
    </form>
</x-modal>
<div class="flex justify-end">
    <x-button text="Tambah Paket" onclick="add.showModal()" class="my-5" />
</div>