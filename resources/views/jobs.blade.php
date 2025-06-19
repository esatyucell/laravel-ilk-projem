<x-layout>
    <x-slot:heading>Meslekler</x-slot:heading>

    <ul>
        @foreach ($jobs as $job)

            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">

                <li><strong>{{ $job['title'] }}:</strong> Kazandığı {{ $job['kazanc'] }} her yıl. </li>

            </a>
        @endforeach
    </ul>

</x-layout>