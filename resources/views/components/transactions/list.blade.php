<div>
    <div class="flex justify-end">
        <a href="{{ route('transactions.create') }}" class="my-4">
            <x-button text="Tambah Transaksi" class="my-4" />
        </a>
    </div>
    <x-table.header text="Riwayat Transaksi" />
    <x-table :columns="['Nomor', 'Tanggal', 'Nama Customer', 'Alamat', 'Keterangan']">
        @forelse ($transactions as $key => $transaction)
            <tr>
                <td class="py-2">{{ $key + 1 }}</td>
                <td>{{ $transaction->tanggal_bayar }}</td>
                <td>{{ $transaction->customer->nama }}</td>
                <td>{{ $transaction->customer->alamat }}</td>
                <td>
                    {{ $transaction->keterangan }}
                </td>
            </tr>
        @empty
        @endforelse
    </x-table>
    <div class="mt-2">
        {{ $transactions->links() }}
    </div>
</div>
