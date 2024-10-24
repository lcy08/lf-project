<aside {{ $attributes }}>
    <div class="pl-4 py-4 flex-grow">
    {{-- Logo --}}
        <div class="flex items-center mb-4 p-4">
            <img src="{{ asset('images/icon.png') }}" alt="Logo" class="h-10 w-10 mr-2">
            <h1 class="text-2xl font-bold">Dashboard</h1>
        </div>

    {{-- Sidebar --}}
        <x-nav-group />
    </div>
    
    <x-profile />
</aside>

