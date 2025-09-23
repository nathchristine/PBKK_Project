<x-layout>
    <h2>Currently Available Movies</h2>

    <ul>
        @foreach($movies as $movie)
            <li>
                <x-card href="{{ route('movies.show', $movie->id) }}" :highlight="$movie->rating >= 9">
                    <h3>{{ $movie->title }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $movies->links() }}
</x-layout>