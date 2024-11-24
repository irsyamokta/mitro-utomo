<section id="home" class="flex flex-col bg-cover bg-center items-center justify-start lg:px-12">
    <div class="px-6 w-full max-w-screen-xl py-16 lg:pt-40 text-center">
        <h1 class="text-2xl font-semibold tracking-wide text-secondary md:text-5xl">Video Wawasan</h1>
    </div>
    <div class="grid md:grid-cols-3 grid-cols-1 gap-2 mb-20 px-6">
        @foreach ($video as $row)
            @php
                $videoId = last(explode('/', $row->link));
            @endphp
            <div>
                <iframe width="400" height="200" src="https://www.youtube.com/embed/{{ $videoId }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        @endforeach
    </div>
</section>
