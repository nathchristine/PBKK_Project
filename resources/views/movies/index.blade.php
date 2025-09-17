<x-layout>
    <h2>Currently Available Movies</h2>

    <ul>
        @foreach($movies as $movie)
            <li>
                <x-card href="/movies/{{ $movie['id'] }}" :highlight="$movie['skill'] > 70">
                    <h3>{{ $movie['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>