<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::with('books')->paginate(10);

        return view('authors.index', [
            'authors' => $authors
        ]);
    }


    public function showBooks(Author $author) {
        $books = $author->books;

        return view('authors.show', [
            'author' => $author,
            'books' => $books,
        ]);
    }
}
