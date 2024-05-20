<div class="flex flex-col mb-2">
    <label>{{ $label }}</label>
    <textarea {{ $attributes->merge(['class' => 'bg-gray-300 h-20 py-2 px-4 rounded-md']) }}>{{ $slot }}</textarea>
</div>
