<x-modal text="Edit Customer" id="update_{{ $customer->id }}" class="text-left">
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @method('PUT')
        @csrf
        <x-textarea label="Alamat" name="alamat">
            {{ $customer->alamat }}
        </x-textarea>
        <x-input label="Tanggal Awal Berlangganan" name="tanggal_awal_berlangganan" type="date"
            value="{{ $customer->tanggal_awal_berlangganan }}" />
        <div class="grid grid-cols-2 gap-2">
            <x-select label="Paket" name="packet_id">
                @foreach ($packets as $packet)
                    <option value="{{ $packet->id }}" {{ $customer->packet->id == $packet->id ?? 'selected' }}>
                        {{ $packet->nama }}</option>
                @endforeach
            </x-select>
            <x-input label="Keterangan" name="keterangan" value="{{ $customer->keterangan }}" />
        </div>
        <div class="flex justify-end gap-2 mt-4">
            <x-button text="Batal" color="gray" type="button" onclick="update_{{ $customer->id }}.close()" />
            <x-button text="Simpan" />
        </div>
    </form>
</x-modal>
<x-button.icon onclick="update_{{ $customer->id }}.showModal()">
    <path d="m18.988 2.012 3 3L19.701 7.3l-3-3zM8 16h3l7.287-7.287-3-3L8 13z"></path>
    <path
        d="M19 19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .896-2 2v14c0 1.104.897 2 2 2h14a2 2 0 0 0 2-2v-8.668l-2 2V19z">
    </path>
</x-button.icon>
