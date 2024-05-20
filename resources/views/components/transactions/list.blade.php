<div>
    <x-transactions.add />
    <x-table.header text="Riwayat Transaksi" />
    <x-table :columns="['Nomor', 'Tanggal', 'Alamat', 'Aksi']">
        @forelse ($transactions as $key => $transaction)
            <tr >
                <td class="py-2">{{ $key + 1 }}</td>
                <td>{{ $transaction->tanggal_bayar }}</td>
                <td>{{ $transaction->customer->alamat }}</td>
                <td>
                    <a class="py-1 px-3 bg-blue-500 text-white rounded-md">Detail</a>
                </td>
            </tr>
        @empty
        @endforelse
    </x-table>
</div>
