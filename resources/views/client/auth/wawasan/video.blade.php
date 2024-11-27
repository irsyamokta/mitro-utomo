<section id="home" class="flex flex-col items-center justify-center mt-20 lg:mt-0 lg:px-12">
    <div class="px-6 w-full max-w-screen-xl py-5 lg:mt-20 text-center">
        <h1 class="text-2xl font-semibold tracking-wide text-secondary md:text-3xl lg:text-4xl">Video Wawasan</h1>
    </div>
    <div>
        <div class="grid md:grid-cols-4 grid-cols-2 gap-2 mb-10 px-6">
            @foreach ($video as $row)
                @php
                    $videoId = last(explode('/', $row->link));
                @endphp
                <div>
                    <iframe class="w-full" src="https://www.youtube.com/embed/{{ $videoId }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            @endforeach
        </div>
    </div>
</section>
