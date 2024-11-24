<table class="w-full text-sm text-center rtl:text-right text-gray-500">
    <thead class="text-xs text-white uppercase bg-secondary">
        <tr>
            <th scope="col" class="px-6 py-3">
                No
            </th>
            <th scope="col" class="px-5 py-3 whitespace-nowrap">
                Nama Lengkap
            </th>
            <th scope="col" class="px-30 py-3">
                Ulasan
            </th>
            <th scope="col" class="px-5 py-3">
                Rating
            </th>
            <th scope="col" class="px-5 py-3">
                Tanggal
            </th>
        </tr>
    </thead>
    <tbody>
        {{-- @if (count($review) <= 0) --}}
            <tr>
                <td colspan="2" class="text-start py-8">Tidak ada data</td>
            </tr>
        {{-- @else --}}
            {{-- @foreach ($review as $row) --}}
                <tr class="bg-white border-b">
                    <th scope="row" class="px-3 py-4 font-regular whitespace-nowrap">
                        {{-- {{ $loop->iteration }} --}}
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular whitespace-nowrap">
                        {{-- {{ $row->nama }} --}}
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular whitespace-nowrap overflow-y-auto max-w-[200px] no-scroll dark:text-white">
                        {{-- {{ $row->ulasan }} --}}
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular whitespace-nowrap">
                        {{-- @if ($row->rating == 1)
                            @include('admin.dashboard.partials.ratings.rating-1')
                        @elseif($row->rating == 2)
                            @include('admin.dashboard.partials.ratings.rating-2')
                        @elseif($row->rating == 3)
                            @include('admin.dashboard.partials.ratings.rating-3')
                        @elseif($row->rating == 4)
                            @include('admin.dashboard.partials.ratings.rating-4')
                        @elseif($row->rating == 5)
                            @include('admin.dashboard.partials.ratings.rating-5')
                        @endif --}}
                    </th>
                    <th scope="row" class="px-3 py-4 font-regular whitespace-nowrap">
                        {{-- {{ $row->created_at->locale('id')->isoFormat('dddd, D MMMM YYYY') }} --}}
                    </th>
                </tr>
            {{-- @endforeach --}}
        {{-- @endif --}}
    </tbody>
</table>
