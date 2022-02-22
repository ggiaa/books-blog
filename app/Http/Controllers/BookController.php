<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
}
