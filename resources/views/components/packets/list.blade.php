<div>
    <x-table.header text="Paket" />
    <x-table :columns="['Nomor', 'Nama Paket', 'Harga', 'Aksi']">
        @forelse ($packets as $key => $packet)
            <tr>
                <td class="py-2">{{ $key + 1 }}</td>
                <td>{{ $packet->nama }}</td>
                <td>Rp. {{ number_format($packet->harga) }}</td>
                <td class="flex items-center justify-center gap-2 py-2">
                    <x-packets.update :packet=$packet />
                    <x-packets.delete id="{{ $packet->id }}" />
                </td>
            </tr>
        @empty
        @endforelse
    </x-table>
    <div class="mt-2">
        {{ $packets->links() }}
    </div>
</div>
