<div class="slider h-56" style="
    --width: 150px;
    --height: 150px;
    --quantity: 5;
">
    <div class="list">
        <div class="item relative group overflow-hidden rounded-lg shadow-2xl border-t-3 border-l-3 border-white/50" style="--position: 1">
            <img src="{{ Vite::asset('resources/images/gojek.png') }}" alt="Client 1" class="bg-gradient-to-tl from-gray-300 to-gray-100 p-5 rounded-lg object-cover ">
            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 group-hover:backdrop-blur flex items-center justify-center transition-opacity duration-200 rounded-lg text-black font-semibold text-lg">
            Gojek
            </div>
        </div>
        <div class="item" style="--position: 2">
            <img src="{{ Vite::asset('resources/images/google.png') }}" alt="Client 2" class="bg-amber-200 p-5 rounded-lg object-cover">
        </div>
        <div class="item" style="--position: 3">
            <img src="{{ Vite::asset('resources/images/meta.png') }}" alt="Client 2" class="bg-amber-200 p-5 rounded-lg object-cover">
        </div>
        <div class="item" style="--position: 4">
            <img src="{{ Vite::asset('resources/images/playstation.png') }}" alt="Client 2" class="bg-amber-200 p-5 rounded-lg object-cover">
        </div>
        <div class="item" style="--position: 5">
            <img src="{{ Vite::asset('resources/images/roblox.png') }}" alt="Client 2" class="bg-amber-200 p-5 rounded-lg object-cover">
        </div>
    </div>
</div>