@extends('index')
@section('content')
    @include('components.navbar-auth')
    <section class="flex flex-col items-center mt-20 lg:px-12">
        <div class="px-6 w-full max-w-screen-xl py-5 text-center">
            <h1 class="text-2xl font-semibold tracking-wide text-secondary md:text-3xl lg:text-4xl mb-10">Apa Yang Mereka Katakan
            </h1>
            <div class="w-full mb-10">
                <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm md:mb-12 md:grid-cols-3 bg-white">
                    @foreach ($review as $item)
                        <figure
                            class="flex flex-col items-center justify-center p-8 text-center bg-white border-b-2 border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e">
                            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8">
                                @if ($item->rating == 1)
                                    @include('components.ratings.rating-1')
                                @elseif($item->rating == 2)
                                    @include('components.ratings.rating-2')
                                @elseif($item->rating == 3)
                                    @include('components.ratings.rating-3')
                                @elseif($item->rating == 4)
                                    @include('components.ratings.rating-4')
                                @elseif($item->rating == 5)
                                    @include('components.ratings.rating-5')
                                @endif
                                </h3>
                                <p class="my-4">{{ $item->review }}</p>
                            </blockquote>
                            <figcaption class="flex items-center justify-center ">
                                <img class="rounded-full w-9 h-9"
                                    src="{{ asset('assets/icon/icon-customer.png') }}"
                                    alt="profile picture">
                                <div class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                                    <div>{{ $item->name }}</div>
                                    <div class="text-sm text-gray-500">Pelanggan</div>
                                </div>
                            </figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>
    </section>
@endsection
