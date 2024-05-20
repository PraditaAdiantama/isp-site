<dialog {{ $attributes->merge(['class' => 'rounded-md']) }}>
    <div class="bg-white pt-5 pb-3 px-5 w-96 rounded-md">
        <h3 class="font-bold text-xl">{{ $text }}</h3>
        <div>
            {{ $slot }}
        </div>
    </div>
</dialog>
