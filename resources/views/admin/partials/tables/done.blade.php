<table class="w-full text-sm text-left rtl:text-right text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">
                <span>Order</span>
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                Nama Penerima
            </th>
            <th scope="col" class="px-6 py-3">
                Alamat
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                Telepon
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                Total Harga
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                Catatan
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                Pengiriman
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                Nomor Resi
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                Status Pembayaran
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                Status Pengiriman
            </th>
            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                Tanggal Pembelian
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $item)
            @if ($item->status == 'Selesai' || $item->payment_status == 'Dibatalkan' || $item->status == 'Diambil')
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 font-semibold text-gray-900">
                        ORDS{{ $item->id }}{{ $item->created_at->format('dmy') }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                        {{ $item->user->name }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900">
                        {{ $item->user->address }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900">
                        {{ $item->user->phone }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                        Rp {{ number_format($item->total_price, 0, ',', '.') }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                        {{ $item->notes }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                        {{ $item->shipping }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                        {{ $item->resi }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900">
                        {{ $item->payment_status }}
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900">
                        @if ($item->status == 'Selesai' || $item->status == 'Diambil')
                            <button type="button"
                                class="text-white bg-secondary font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">{{ $item->status }}</button>
                        @elseif($item->payment_status == 'Dibatalkan')
                            <button type="button"
                                class="text-white bg-red-700 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Dibatalkan</button>
                        @endif
                    </td>
                    <td class="px-6 py-4 font-semibold text-gray-900">
                        {{ $item->created_at->format('d-m-Y') }}
                    </td>
                </tr>
                <tr>
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                <span>Detail Produk</span>
                            </th>
                        </tr>
                    </thead>
    <tbody>
        <td colspan="8" class="px-6 py-4">
            <div class="flex gap-10 items-center justify-between">
                <div class="flex flex-col gap-10">
                    @foreach ($item->product_details as $product)
                        <div class="flex items-center gap-5">
                            <div>
                                <img src="{{ asset('storage/' . $product['image']) }}" alt="Product Image"
                                    class="w-12">
                            </div>
                            {{ $product['name'] }} - {{ $product['quantity'] }} x Rp
                            {{ number_format($product['price'], 0, ',', '.') }}
                        </div>
                    @endforeach
                </div>
            </div>
        </td>
    </tbody>
    </tr>
    @endif
    @endforeach
    </tbody>
</table>
