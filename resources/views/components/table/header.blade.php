<div class="flex items-center justify-between px-6 py-4 bg-white rounded-t-md">
    <h3 class="font-semibold text-2xl">{{ $text }}</h3>
    <div class="flex gap-2">
        <x-search />
        <div class="text-sm">
            <p>Urutkan Beradasarkan</p>
            <button class="font-bold relative pr-6 group">
                <span>{{ request()->get('order') == 'desc' ? 'Terbaru' : 'Terlama' }}</span>
                <divc
                    class="hidden bg-white absolute w-full group-focus:grid hover:grid rounded-md border text-left px-2">
                    <a href="?order=desc" class="py-1">Terbaru</a>
                    <a href="?order=asc" class="py-1">Terlama</a>
                </divc>
            </button>
        </div>
    </div>
</div>
