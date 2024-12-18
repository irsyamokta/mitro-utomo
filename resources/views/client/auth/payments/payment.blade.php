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
                    <tr class="bg-white">
                        <td class="px-6 py-4">
                            ORDS{{ $orders->id }}{{ $orders->created_at->format('dmy') }}
                        </td>
                        <td class="p-4 w-2">
                            <img src="{{ asset('storage/' . $orders->product_details[0]['image']) }}" class="md:w-20"
                                alt="Product">
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900">
                            {{ $orders->product_details[0]['name'] }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div>
                                    {{ $orders->total_products }}
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap">
                            Rp {{ number_format($orders->total_price, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900">
                            {{ $orders->resi }}
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900">
                            {{ $orders->payment_status }}
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900">
                            <button type="button"
                                class="text-white bg-red-700 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">{{ $orders->status }}</button>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900">
                            {{ $orders->created_at->format('d-m-Y') }}
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
                                @foreach ($orders->product_details as $product)
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
                            <div>
                                <button id="pay-button" type="button"
                                    class="text-white bg-secondary hover:bg-primary font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Bayar
                                    Sekarang</button>
                            </div>
                        </div>
                    </td>
                </tbody>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    Swal.fire({
                        title: "Pembayaran Berhasil!",
                        text: "Status pembayaran Anda berhasil",
                        icon: "success",
                        confirmButtonText: "OK",
                        confirmButtonColor: "#365E32",
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('order.detail') }}";
                        }
                    });
                },
                onPending: function(result) {
                    alert("Menunggu pembayaran!");
                    console.log(result);
                },
                onError: function(result) {
                    alert("Pembayaran gagal!");
                    console.log(result);
                },
                onClose: function() {
                    alert('Anda menutup pop-up tanpa menyelesaikan pembayaran');
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</section>
