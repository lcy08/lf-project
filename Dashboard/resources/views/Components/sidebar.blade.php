<aside {{ $attributes }}>
    <div class="flex-grow py-4 pl-4">
    {{-- Logo --}}
        <div class="flex items-center p-4 mb-4">
            <img src="{{ asset('images/icon.png') }}" alt="Logo" class="w-10 h-10 mr-2">
            <h1 class="text-2xl font-bold">Dashboard</h1>
        </div>

    {{-- Sidebar --}}
        <x-nav-group />
    </div>

    <x-profile />
</aside>

