<div class="relative inline-block w-full">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <div class="absolute -top-3 left-6 bg-blue-500 rounded-lg w-12 h-12 flex items-center justify-center text-white shadow-lg">
            {{ $icon ?? '⚡' }} <!-- Default icon if none provided -->
        </div>
        <div class="pt-4">
            <h3 class="text-xl font-bold mb-4">{{ $title }}</h3>
            <p {{ $attributes }}>
                {{ $slot }}
            </p>
        </div>
    </div>
</div>