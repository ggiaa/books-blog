<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Writer;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "HOME"
        ]);
    }

    public function allbooks()
    {
        return view('books', [
            "title" => "BOOKS",
            "books" => Book::all()
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "ABOUT"
        ]);
    }

    public function detail(Book $book)
    {
        return view('book', [
            "title" => "BOOK",
            "book" => $book
        ]);
    }

    public function sort(Writer $writer)
    {
        return view('books', [
            "title" => $writer->name,
            "books" => $writer->book
        ]);
    }
}
