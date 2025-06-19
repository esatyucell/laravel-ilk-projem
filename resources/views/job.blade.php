<x-layout>
    <x-slot:heading>Meslek</x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>
        Bu Meslek yılda {{ $job['kazanc'] }} kazandrıyor.
    </p>
</x-layout>