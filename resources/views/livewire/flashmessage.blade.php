<div>
    @if (session()->has('success'))
        <div class="bg-green-600 text-white p-3 rounded flex items-center gap-2">
            <i class="fa-solid fa-check"></i>
            {{ session('success') }}
        </div>
    @endif
</div>
