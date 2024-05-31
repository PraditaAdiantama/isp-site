@if (session()->has('success'))
    <div id="success-container"
        class="w-96 py-3 px-3 bg-[#EEFBF2] border-l-4 absolute z-20 border-green-500 flex justify-between transition transform duration-300 ease-out opacity-0 -translate-y-4">
        <h3 class="text-green-600 flex items-start gap-2">
            <div class="w-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: rgb(22 163 74);transform: ;msFilter:;">
                    <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                </svg>
            </div>
            {{ session()->get('success') }}
        </h3>
        <button onclick="handleClick()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                <path
                    d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z">
                </path>
            </svg>
        </button>
    </div>
    <script>
        const handleClick = () => {
            document.getElementById('success-container').classList.add('opacity-0', '-translate-y-4');
        }
        window.addEventListener('load', function() {
            document.getElementById('success-container').classList.remove('opacity-0', '-translate-y-4');
            setTimeout(() => {
                document.getElementById('success-container').classList.add('opacity-0', '-translate-y-4');
            }, 5000);
            setTimeout(() => {
                document.getElementById('success-container').remove()
            }, 5100);
        });
    </script>
@endif
