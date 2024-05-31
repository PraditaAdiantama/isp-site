<x-customers.add :packets=$packets />
<x-table.header text="Customer" />
<x-table :columns="['Nomor', 'Nama Customer', 'Alamat', 'Tgl Awal Berlangganan', 'Paket', 'Keterangan', 'Aksi']">
    @forelse ($customers as $key => $customer)
        <tr>
            <td class="py-2">{{ $key + 1 }}</td>
            <td>{{ $customer->nama }}</td>
            <td>{{ $customer->alamat }}</td>
            <td>{{ $customer->tanggal_awal_berlangganan }}</td>
            <td>{{ $customer->packet->nama }}</td>
            <td class="text-left">
                {{ $customer->keterangan }}
            </td>
            <td class="py-2">
                <x-customers.update :customer=$customer :packets=$packets />
                <x-customers.delete :id="$customer->id" />
            </td>
        </tr>
    @empty
    @endforelse
</x-table>
<div class="mt-2">
    {{ $customers->links() }}
</div>
