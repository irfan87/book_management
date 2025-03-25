<x-layout>
    <h3>Author Name: {{ $author->name }}</h3>
    <div>
        <h3>Books</h3>
        <ul>
            @foreach ($author->books as $book)
                <li class="card">{{ $book->title }}</li>
            @endforeach
        </ul>
    </div>
</x-layout>