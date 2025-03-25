<x-layout>
    <h1>Books List</h1>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Genre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ISBN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pages
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr class="bg-white-[500] border-b  dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <a href="{{ route('books.show', $book) }}">{{ $book->title }}</a>
                    </th>
                    <td class="px-6 py-4">
                        {{ $book->genre }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $book->isbn }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $book->pages }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $books->links() }}
        </div>
    </div>
</x-layout>