<table class="w-full rounded-b">
    <thead class="font-semibold">
        <tr>
            @foreach ($columns as $column)
                <th class="bg-blue-100 px-4 py-3">{{ $column }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody class="bg-white rounded-b text-center">
        {{ $slot }}
    </tbody>
</table>
