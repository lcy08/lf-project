@php
    $lastContract = collect($contractData)->last();
@endphp

<x-layout>
    <x-slot:header>
        Company Dashboard
    </x-slot:header>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <x-card id="Occ">
            <x-slot:title>Occupancy Percentage</x-slot:title>
            <x-slot:icon><i class="fa-solid fa-house"></i></x-slot:icon>
        </x-card>
        <x-card>
            <x-slot:title>Expiring Contracts</x-slot:title>
            <x-slot:icon><i class="fa-solid fa-person-walking-arrow-right"></i></x-slot:icon>
            <span class="font-bold">{{ $lastContract['contracts_expiring'] }}</span> Contracts Expired Last Month
        </x-card>
        <x-card>
            <x-slot:title>New & Extended Contracts</x-slot:title>
            <x-slot:icon><i class="fa-solid fa-sign-hanging"></i></x-slot:icon>
            <span class="font-bold">{{ $lastContract['contracts_renewed'] + $lastContract['new_leases']}}</span> Contracts Deals Last Month
        </x-card>
    </div>
    @include('charts.contracts')
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-4">
        @include('charts.occupancy')
        @include('charts.revenue')
        @include('charts.energy')
        @include('charts.maintenance')
    </div>    
</x-layout>
<script>
    const Occupancy = {!! json_encode($occupancyData->pluck('OccupancyRate_percent')->last()) !!}
    const Occ = document.querySelector('#Occ');
    Occ.innerHTML = `Last month's Occupancy Rate is <span class="font-bold">${Occupancy}%</span>`
</script>
