<x-layout>
    <h2>{{ $movie->title }}</h2>

    <div class="bg-gray-200 p-4 rounded">
    <p><strong>Rating:</strong> {{ $movie->rating }}</p>
    <p><strong>Review:</strong> {{ $movie->review }}</p>
  </div>
</x-layout>