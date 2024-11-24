@extends('index')
@section('content')
    @include('components.navbar-cart')
    <section class="flex flex-col h-[100vh] overflow-hidden mx-4 lg:mx-14 mt-28">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="border w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-accent bg-gray-100 border-gray-300 rounded focus:ring-accent">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-16 py-3">
                            <span>Gambar</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($carts->count() <= 0)
                    <tr>
                        <td colspan="2" class="text-black text-start py-8 px-4">Tidak ada data</td>
                    </tr>
                    @else
                        @foreach ($carts as $item)
                            <tr class="bg-white border-b">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-product-{{ $item->id }}" type="checkbox"
                                            data-id="{{ $item->id }}"
                                            data-price="{{ $item->product->price * $item->quantity }}"
                                            class="checkbox-product w-4 h-4 text-accent bg-gray-100 border-gray-300 rounded focus:ring-accent">
                                        <label for="checkbox-product-{{ $item->id }}" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <td class="p-4 w-2">
                                    <img src="{{ asset('storage/' . $item->product->image) }}" class="md:w-32"
                                        alt="Product">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    {{ $item->product->name }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <button
                                            class="inline-flex items-center justify-center p-1 me-3 text-sm font-medium h-6 w-6 text-black bg-accent border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200"
                                            type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 2">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>
                                        <div>
                                            <input type="number" id="first_product" value="{{ $item->quantity }}"
                                                class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1"
                                                placeholder="1" required />
                                        </div>
                                        <button
                                            class="inline-flex items-center justify-center h-6 w-6 p-1 ms-3 text-sm font-medium text-black bg-accent border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200"
                                            type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    Rp {{ number_format($item->product->price, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('cart.destroy', $item->id) }}"
                                        class="font-medium text-red-600 hover:underline">
                                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 11V17" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M14 11V17" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M4 7H20" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div
            class="flex flex-col md:flex-row md:justify-end md:items-center mt-5 w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow-md">
            <div class="flex flex-col md:flex-row md:items-center gap-5 md:space-x-5">
                <p class="text-start text-base text-gray-500 sm:text-lg">Total ({{ $carts->count() }} Produk): <span
                        class="font-semibold text-lg md:text-3xl text-accent">Rp
                        {{ number_format($total, 0, ',', '.') }}</span></p>
                <a href="{{ route('checkout') }}"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-accent rounded-lg hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300">
                    <button>
                        Checkout
                    </button>
                </a>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxAll = document.getElementById('checkbox-all-search');
            const checkboxes = document.querySelectorAll('.checkbox-product');
            const totalElement = document.querySelector('.total-price');
            let totalPrice = 0;

            function calculateTotal() {
                totalPrice = 0;
                checkboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        totalPrice += parseFloat(checkbox.dataset.price);
                    }
                });

                totalElement.innerText = `Rp ${totalPrice.toLocaleString()}`;
            }

            checkboxAll.addEventListener('change', function() {
                const isChecked = checkboxAll.checked;
                checkboxes.forEach(checkbox => {
                    checkbox.checked = isChecked;
                });
                calculateTotal();
            });

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', calculateTotal);
            });
        });
    </script>
@endsection