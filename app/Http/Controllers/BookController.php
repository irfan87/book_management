<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::with('author')->orderBy('title', 'ASC')->paginate(10);

        return view('books.index', [
            'books' => $books
        ]);
    }

    public function show(Book $book) {
        return view('books.show', [
            'book' => $book
        ]);
    }
}
