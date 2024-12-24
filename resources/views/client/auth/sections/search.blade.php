@extends('index')
@section('content')
    @include('components.navbar-auth')
    @if ($product->count() > 0)
        @foreach ($product as $item)
            <section id="product"
                class="flex flex-col lg:flex-row-reverse justify-center items-center h-[100vh] overflow-hidden gap-3 md:gap-12 lg:px-12 relative">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('mitroutomo/public/storage/' . $item->image) }}" class="w-56 md:w-[400px] lg:w-[800px]"
                        alt="">
                </div>
                <div class="px-6 w-full max-w-screen-xl md:py-16 text-center lg:text-left">
                    <h1 class="text-2xl font-semibold tracking-wide text-accent md:text-5xl 2xl:text-6xl">
                        {{ $item->name }}
                    </h1>
                    <p class="lg:text-justify text-xs md:text-base font-regular mt-5 lg:mt-10 lg:pr-12 text-gray-700">
                        {{ $item->description }}</p>
                    <a href="{{ route('view', $item->id) }}">
                        <button type="button"
                            class="mt-10 text-white bg-accent hover:bg-yellow-500 font-medium rounded-lg text-sm px-6 py-2 text-center">Dapatkan</button>
                    </a>
                </div>
            </section>
        @endforeach
    @else
        <div class="flex justify-center h-[100vh] overflow-hidden lg:px-12">
            @include('components.empty-search')
        </div>
    @endif
@endsection
