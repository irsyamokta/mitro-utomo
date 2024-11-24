@extends('index')
@section('content')
    @include('components.navbar-auth')
    <form action="{{ route('cart.store') }}" method="POST">
        @csrf
        <section class="flex flex-col lg:flex-row justify-center items-center py-5 overflow-hidden px-4 lg:px-12 mt-14">
            <div class="flex flex-col lg:flex-row justify-center items-center mt-8">
                <img src="{{ asset('storage/' . $product->image) }}" class="w-56 md:w-[400px] lg:w-[500px]" alt="">
                <div>
                    <h1 class="text-2xl font-semibold tracking-wide md:text-4xl mb-3">{{ $product->name }}</h1>
                    <h1 class="text-2xl font-semibold tracking-wide mb-5">Rp Rp
                        {{ number_format($product->price, 0, ',', '.') }}</h1>
                    <div class="flex flex-col lg:flex-row gap-2 mb-5">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit"
                            class="flex justify-center items-center border-2 border-accent hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center lg:inline-flex lg:items-center me-2">
                            <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 18 21">
                                <path
                                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                            </svg>
                            Masukkan Keranjang
                        </button>
                        <a href="{{ route('checkout', $product->id) }}">

                            <button type="button"
                                class="flex justify-center items-center text-white bg-accent hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center lg:inline-flex lg:items-center">
                                Beli Sekarang
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                        </a>
                        </button>
                    </div>
                    <p class="font-semibold mb-5">Stok : {{ $product->quantity }}</p>
                    <div class="mb-5">
                        <form>
                            <label for="counter-input" class="block mb-1 font-semibold text-gray-900">Jumlah :</label>
                            <div class="relative flex items-center">
                                <button type="button" id="decrement-button" data-input-counter-decrement="counter-input"
                                    class="flex-shrink-0 bg-accent hover:bg-yellow-500 inline-flex items-center justify-center border border-gray-300 rounded-md h-8 w-8 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                    <svg class="w-2.5 h-2.5 text-gray-900" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 1h16" />
                                    </svg>
                                </button>
                                <input type="text" id="counter-input" name="quantity" data-input-counter
                                    class="flex-shrink-0 text-gray-900 border-0 bg-transparent text-lg font-normal focus:outline-none focus:ring-0 max-w-[3.5rem] text-center"
                                    placeholder="" value="1" required />
                                <button type="button" id="increment-button" data-input-counter-increment="counter-input"
                                    class="flex-shrink-0 bg-accent hover:bg-yellow-500 inline-flex items-center justify-center border border-gray-300 rounded-md h-8 w-8 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                                    <svg class="w-2.5 h-2.5 text-gray-900" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <p class="font-semibold mb-5">Deskripsi Produk :</p>
                    <p class="mb-5">{{ $product->description }}</p>
                    <p class="font-semibold mb-5">Komposisi :</p>
                    <ol class="list-decimal px-10 mb-5">
                        <li>{{ $product->composition }}
                        </li>
                    </ol>
                    <p class="mb-5">Netto: {{ $product->netto }}g<br>NO.DEPTAN: {{ $product->no_registration }}</p>
                    <p>{{ $product->notes }}</p>
                </div>
            </div>
        </section>
    </form>
@endsection
