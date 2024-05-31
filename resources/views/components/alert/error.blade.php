@if (session()->has('errors'))
    <div id="error-container"
        class="bg-[#ff4d4dda] w-96 absolute z-20 border-l-4 border-red-500 px-3 py-3 rounded-r-md mt-5 transition transform duration-300 ease-out opacity-0 -translate-y-4">
        <h3 class="text-white flex gap-2 font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: white;transform: ;msFilter:;">
                <path
                    d="M9.172 16.242 12 13.414l2.828 2.828 1.414-1.414L13.414 12l2.828-2.828-1.414-1.414L12 10.586 9.172 7.758 7.758 9.172 10.586 12l-2.828 2.828z">
                </path>
                <path
                    d="M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z">
                </path>
            </svg>
            Terjadi beberapa kesalahan
        </h3>
        <ul class="px-8 text-white">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <script>
        window.addEventListener('load', function() {
            document.getElementById('error-container').classList.remove('opacity-0', '-translate-y-4');
            setTimeout(() => {
                document.getElementById('error-container').classList.add('opacity-0', '-translate-y-4');
            }, 5000);
            setTimeout(() => {
                document.getElementById('error-container').remove()
            }, 5100);
        });
    </script>
@endif
