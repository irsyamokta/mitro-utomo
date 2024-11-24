<div class="grid grid-cols-1 gap-2">
    <div
        class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default">
        <div class="flex flex-col md:flex-row gap-2 items-center justify-between">
            <span>
                <h4 class="text-title-sm font-bold text-black">Daftar Pengguna</h4>
            </span>
        </div>
    </div>
    <div
        class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default">
        <div class="relative overflow-x-auto px-1 py-1">
            @include('admin.partials.tables.users')
            {{-- <div class="flex justify-center mt-8 mb-5">
                {{ $feedback->appends(['sdq_page' => request()->query('sdq_page')])->links('vendor.pagination.custome') }}
            </div> --}}
        </div>
    </div>
</div>