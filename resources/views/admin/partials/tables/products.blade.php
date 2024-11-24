<table class="w-full text-sm text-center rtl:text-right text-gray-500">
    <thead class="text-xs text-white uppercase bg-secondary">
        <tr>
            <th scope="col" class="px-6 py-3">
                Gambar
            </th>
            <th scope="col" class="px-5 py-3 whitespace-nowrap">
                No Deptan
            </th>
            <th scope="col" class="px-5 py-3 whitespace-nowrap">
                Nama Produk
            </th>
            <th scope="col" class="px-5 py-3 whitespace-nowrap">
                Harga
            </th>
            <th scope="col" class="px-5 py-3 whitespace-nowrap">
                Jumlah
            </th>
            <th scope="col" class="px-5 py-3">
                Deskripsi
            </th>
            <th scope="col" class="px-5 py-3">
                Komposisi
            </th>
            <th scope="col" class="px-5 py-3">
                Netto
            </th>
            <th scope="col" class="px-5 py-3">
                Catatan
            </th>
            <th scope="col" class="px-5 py-3">
                Aksi
            </th>
        </tr>
    </thead>
    <tbody>
        @if (count($products) <= 0)
            <tr>
                <td colspan="2" class="text-start py-8">Tidak ada data</td>
            </tr>
        @else
            @foreach ($products as $row)
                <tr class="bg-white border-b">
                    <th scope="row" class="py-4 font-regular whitespace-nowrap">
                        <img src="{{ asset('storage/' . $row->image) }}" alt="product image" class="w-24 h-24 object-cover">
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular whitespace-nowrap">
                        {{ $row->no_registration }}
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular whitespace-nowrap">
                        {{ $row->name }}
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular whitespace-nowrap">
                        Rp {{ $row->price }}
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular">
                        {{ $row->quantity }}
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular whitespace-nowrap overflow-y-auto max-w-[150px] no-scroll">
                        {{ $row->description }}
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular whitespace-nowrap overflow-y-auto max-w-[150px] no-scroll">
                        {{ $row->composition }}
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular">
                        {{ $row->netto }}
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular whitespace-nowrap overflow-y-auto max-w-[150px] no-scroll">
                        {{ $row->notes }}
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular whitespace-nowrap">
                        <div class="flex items-center justify-center gap-2">
                            <a href="{{ route('product.view', $row->id) }}" class="text-primary hover:underline">Edit</a>
                            <a href="{{ route('product.destroy', $row->id) }}" class="text-danger hover:underline">Hapus</a>
                        </div>
                    </th>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
