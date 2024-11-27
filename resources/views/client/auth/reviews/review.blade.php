<section class="mx-4 lg:mx-14 mt-28">
    <div class="flex flex-col gap-5 justify-center">
        <h1 class="text-2xl font-semibold tracking-wide text-secondary">Review Produk</h1>
        <form action="{{ route('review.store') }}" method="POST">
            @csrf
            {{-- @foreach ($productDetails as $item) --}}
            <div class="grid grid-cols-1 gap-5 mt-4 rounded-sm border border-stroke bg-white px-7.5 py-4 shadow-default">
                <div class="grid gap-5 sm:grid-cols-1">
                    <div>
                        <input type="text" placeholder="Pupuk ABG" name="order_id" value="{{ $order->id }}"
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter hidden"
                            required readonly />
                    </div>
                    <div>
                        <div class="flex flex-row-reverse justify-center items-center gap-2 mb-6 mt-5">
                            <input id="hs-ratings-readonly-1" type="radio"
                                class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="rating" value="5">
                            <label for="hs-ratings-readonly-1"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-neutral-600">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                            <input id="hs-ratings-readonly-2" type="radio"
                                class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="rating" value="4">
                            <label for="hs-ratings-readonly-2"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-neutral-600">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                            <input id="hs-ratings-readonly-3" type="radio"
                                class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="rating" value="3">
                            <label for="hs-ratings-readonly-3"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-neutral-600">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                            <input id="hs-ratings-readonly-4" type="radio"
                                class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="rating" value="2">
                            <label for="hs-ratings-readonly-4"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-neutral-600">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                            <input id="hs-ratings-readonly-5" type="radio"
                                class="peer -ms-5 size-5 bg-transparent border-0 text-transparent cursor-pointer appearance-none checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="rating" value="1" checked>
                            <label for="hs-ratings-readonly-5"
                                class="peer-checked:text-yellow-400 text-gray-300 pointer-events-none dark:peer-checked:text-yellow-600 dark:text-neutral-600">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                    </path>
                                </svg>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="mb-3 block text-sm font-medium text-black">
                            Nama Pengguna
                        </label>
                        <input type="text" placeholder="Pupuk ABG" name="name" value="{{ auth()->user()->name }}"
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter"
                            required readonly />
                    </div>
                </div>
                <div>
                    <label class="mb-3 block text-sm font-medium text-black">
                        Review
                    </label>
                    <textarea rows="4" placeholder="Ceritakan ulasan anda..." name="review"
                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter"
                        required></textarea>
                </div>
                <button type="submit"
                    class="text-white bg-secondary hover:bg-primary font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Kirim</button>
            </div>
            {{-- @endforeach --}}
        </form>

    </div>
</section>
