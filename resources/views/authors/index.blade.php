<x-layout>
    <h1>Authors List</h1>
    <ul>
        @foreach ($authors as $author)
        <li class="card">
            {{ $author->name }}
            <a href="{{ route('authors.show', $author) }}" class="btn">View Author</a>
        </li>
        @endforeach
    </ul>
    {{ $authors->links() }}
</x-layout>