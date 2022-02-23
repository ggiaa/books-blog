<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Genre;
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

    public function about()
    {
        return view('about', [
            "title" => "ABOUT"
        ]);
    }

    public function allbooks()
    {
        return view('books', [
            "title" => "BOOKS",
            "subtitle" => "All Books",
            "books" => Book::with(['writer', 'genre', 'genre.category'])->get()->all()
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
            "subtitle" => 'Books by ' . $writer->name,
            "books" => $writer->book->load('writer', 'genre', 'genre.category')
        ]);
    }

    public function genresort(Genre $genre)
    {
        return view('books', [
            "title" => $genre->genre_name,
            "subtitle" => 'All ' . $genre->genre_name . 'genre',
            "books" => $genre->book->load('writer', 'genre', 'genre.category')
        ]);
    }

    public function category_list()
    {
        return view('categories', [
            "title" => "CATEGORIES",
            "fiction" => Genre::where('category_id', 1)->get(),
            "nonfiction" => Genre::where('category_id', 2)->get()
        ]);
    }

    public function categorysort(Category $category)
    {
        return view('books', [
            "title" => $category->name_category,
            "subtitle" => 'All ' . $category->name_category . ' category',
            "books" => $category->books()->get()->load(['genre', 'writer', 'genre.category'])
        ]);
    }
}
