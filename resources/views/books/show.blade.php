<x-layout>
    <h1>Book Information</h1>
    <div>
        <p>
            <strong>Title:</strong>
            {{ $book->title }}
        </p>
        <p>
            <strong>Author:</strong>
            {{ $book->author->name }}
        </p>
        <p>
            <strong>Genre:</strong>
            {{ $book->genre }}
        </p>
        <p>
            <strong>ISBN:</strong>
            {{ $book->isbn }}
        </p>
        <p>
            <strong>Pages:</strong>
            {{ $book->pages }}
        </p>
        <p>
            <strong>Description:</strong>
            {{ $book->description }}
        </p>
        <div class="mt-4">
            <a href="{{ route('books.index') }}" class="btn">Back</a>
        </div>
    </div>
</x-layout>