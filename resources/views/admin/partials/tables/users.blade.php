<table class="w-full text-sm text-center rtl:text-right text-gray-500">
    <thead class="text-xs text-white uppercase bg-secondary">
        <tr>
            <th scope="col" class="px-5 py-3">
                No
            </th>
            <th scope="col" class="px-5 py-3 whitespace-nowrap">
                Nama Lengkap
            </th>
            <th scope="col" class="px-5 py-3">
                Email
            </th>
            <th scope="col" class="px-5 py-3">
                Telepon
            </th>
            <th scope="col" class="px-5 py-3">
                Alamat
            </th>
        </tr>
    </thead>
    <tbody>
        @if (count($users) <= 0)
            <tr>
                <td colspan="2" class="text-start py-8">Tidak ada data</td>
            </tr>
        @else
            @foreach ($users as $row)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-3 py-4 whitespace-nowrap">
                        {{ $loop->iteration }}
                    </th>
                    <th scope="row" class="px-3 py-4 whitespace-nowrap">
                        {{ $row->name }}
                    </th>
                    <th scope="row" class="px-3 py-4">
                        {{ $row->email }}
                    </th>
                    <th scope="row" class="px-3 py-4 whitespace-nowrap">
                        {{ $row->phone }}
                    </th>
                    <th scope="row" class="px-3 py-4 whitespace-nowrap">
                        {{ $row->address }}
                    </th>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
