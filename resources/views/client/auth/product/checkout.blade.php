@extends('index')
@section('content')
    @include('components.navbar-checkout')
    <section class="flex flex-col overflow-hidden mx-4 lg:mx-14 mt-28">
        <div
            class="flex flex-row md:justify-between w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow-md">
            <div class="flex flex-col md:flex-row md:justify-between gap-5 md:space-x-5">
                <div>
                    <div class="flex gap-2">
                        <img src="{{ asset('assets/icon/icon-address.svg') }}" alt="address" class="w-8 h-8">
                        <p class="text-start text-base text-gray-500 sm:text-lg">
                            Alamat Pengiriman
                        </p>
                    </div>
                    <div class="text-start mt-5">
                        <p>Sri Rejeki | (+62)82268400482</p>
                        <p>Padang Canduah A, Kinali, Kec. Kinali, Kabupaten Pasaman Barat, Sumatera Barat 26567</p>
                    </div>
                </div>
            </div>
            <a href="#">
                Edit
            </a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
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
                    <tr class="bg-white border-b">
                        <td class="p-4 w-2">
                            <img src="{{ asset('assets/img/img-product-1.png') }}" class="md:w-32" alt="Product">
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900">
                            Pupuk & Agen Hayati Organik ABG-Bio
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
                                    <input type="number" id="first_product"
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
                            Rp 150.000
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-red-600 hover:underline">
                                <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 11V17" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M14 11V17" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M4 7H20" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div
            class="flex flex-col md:justify-between md:items-center mt-5 w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow-md gap-10">
            <div class="flex flex-col md:flex-row justify-between md:items-center w-full gap-10">
                <div class="flex flex-col md:flex-row gap-8">
                    <div
                        class="flex flex-col gap-3 justify-center">
                        <h1 class="text-start">Opsi Pengiriman</h1>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-white bg-accent hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                            type="button">Dropdown button <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="flex flex-col gap-3 justify-center">
                        <h1 class="text-start">Metode Pembayaran</h1>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-white bg-accent hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                            type="button">Dropdown button <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown-1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="flex flex-col gap-3 justify-center">
                        <h1 class="text-start">Catatan Untuk Penjuan</h1>
                        <div>
                            <label for="default-input" class="block text-sm font-medium text-gray-900"></label>
                            <input type="text" id="default-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                    </div>
                </div>
                <div class="flex flex-row md:items-center md:space-x-4 space-x-2">
                    <a href=""
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-500 focus:ring-4 focus:ring-red-300">
                        <button>
                            Batal
                        </button>
                    </a>
                    <a href=""
                        class="w-full inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-accent rounded-lg hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300">
                        <button>
                            Buat Pesanan
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
