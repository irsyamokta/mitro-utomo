<section class="mx-4 lg:mx-14 mt-28">
    <div class="flex flex-col gap-5 justify-center">
        <h1 class="text-2xl font-semibold tracking-wide text-secondary">Pesanan Saya</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="border w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <span>Order</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span>Gambar</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Produk
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Total Produk
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Total Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor Resi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Pembayaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Pengiriman
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Pembelian
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $item)
                        <tr class="bg-white">
                            <td class="px-6 py-4">
                                ORDS{{ $item->id }}{{ $item->created_at->format('dmy') }}
                            </td>
                            <td class="p-4 w-2">
                                <img src="{{ asset('storage/' . $item->product_details[0]['image']) }}" class="md:w-20" alt="Product">
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900">
                                {{ $item->product_details[0]['name'] }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div>
                                        {{ $item->total_products }}
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                                Rp {{ number_format($item->total_price, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900">
                                {{ $item->resi }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900">
                                {{ $item->payment_status }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900">
                                @if ($item->status == 'Pending')
                                    <button type="button"
                                            class="text-white bg-red-700 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">{{ $item->status }}</button>
                                @elseif($item->status == 'Dikirim')
                                    <button type="button"
                                            class="text-white bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">{{ $item->status }}</button>
                                @else
                                    <button type="button"
                                            class="text-white bg-secondary font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">{{ $item->status }}</button>
                                @endif
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900">
                                {{ $item->created_at->format('d-m-Y') }}
                            </td>
                        </tr>
                        <tr>
                            <thead>
                                <tr>
                                    <td scope="col" class="px-6 py-3 whitespace-nowrap">
                                        <span>Detail Produk</span>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <td colspan="9" class="px-6 py-4 border-b border-gray-400 border-dashed">
                                    <div class="flex gap-10 items-center justify-between">
                                        <div class="flex flex-col gap-10">
                                            @foreach ($item->product_details as $product)
                                            <div class="flex items-center gap-5">
                                                <div>
                                                    <img src="{{ asset('storage/' . $product['image']) }}" alt="Product Image" class="w-12">
                                                </div>
                                                {{ $product['name'] }} - {{ $product['quantity'] }} x Rp
                                                {{ number_format($product['price'], 0, ',', '.') }}
                                            </div>
                                            @endforeach
                                        </div>
                                        <div>
                                            @if ($item->payment_status == 'Belum dibayar' && $item->status == 'Pending')
                                                <button type="button" class="text-white bg-secondary hover:bg-primary font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Bayar Sekarang</button>
                                            @elseif($item->payment_status == 'Sudah dibayar' || $item->status == 'Dikirim')
                                                <form action="{{ route('order.confirm', $item->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="text-white bg-secondary hover:bg-primary font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Pesanan Diterima</button>
                                                </form>
                                            @else
                                                <a href="{{ route('review', $item->id)}}">
                                                    <button type="button" class="text-white bg-accent hover:bg-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Review Produk</button>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tbody>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
