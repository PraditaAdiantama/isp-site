<x-modal text="Hapus Paket" class="text-left" id="delete_{{ $id }}">
    <form action="{{ route('customers.destroy', $id) }}" method="POST">
        @method('DELETE')
        @csrf
        <h3>Yakin ingin hapus customer?</h3>
        <div class="flex justify-end gap-2 items-center mt-5">
            <x-button color="gray" type="button" text="Batal" onclick="delete_{{ $id }}.close()" />
            <x-button color="red" text="Hapus" />
        </div>
    </form>
</x-modal>
<x-button.icon onclick="delete_{{ $id }}.showModal()">
    <path
        d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z">
    </path>
</x-button.icon>
