<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>Company Dashboard</title>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <x-dropdown class="md:hidden sticky" />
    <div class="flex">
        <x-sidebar class="hidden md:flex w-64 bg-gray-800 text-white sticky top-0 h-screen flex-col" />

        {{-- content --}}
        <main class="flex-1 p-6">
                <header class="mb-4">
                    <h2 class="text-3xl font-semibold">{{ $header }}</h2>
                </header>

                <div class="bg-white rounded-lg shadow p-4">
                    {{ $slot }}
                </div>
            </main>
        </div>

    <script
      src="https://kit.fontawesome.com/fa387c549b.js"
      crossorigin="anonymous"
    ></script>
</body>
</html>