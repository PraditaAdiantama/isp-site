<li class="py-2 px-4 rounded-md {{ Route::current()->getName() == $route ? 'bg-blue-500 text-white' : '' }}">
    <a href="{{ route($route) }}" class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            style="fill: {{ Route::current()->getName() == $route ? 'white' : 'rgba(0, 0, 0, 1)' }};transform: ;msFilter:;">
            {{ $slot }}
        </svg>
        {{ $text }}
    </a>
</li>
