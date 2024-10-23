<nav class="mt-4">
    <ul>
        <x-sidebar-item href="/" :active="request()->is('/')">Dashboard</x-sidebar-item>
        <x-sidebar-item href="#" :active="request()->is('/#')">Messages</x-sidebar-item>
        <x-sidebar-item href="#" :active="request()->is('/#')">Settings</x-sidebar-item>
        <x-sidebar-item href="#" :active="request()->is('/#')">Profile</x-sidebar-item>
        <x-sidebar-item href="#" :active="request()->is('/#')">Logout</x-sidebar-item>
    </ul>
</nav>