<div class="flex flex-col mb-2 w-full">
    <label>{{ $label }}</label>
    <select {{ $attributes->merge(['class' => 'bg-gray-300 h-10 px-4 rounded-md']) }}>{{ $slot }}</select>
</div>
