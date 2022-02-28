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
        $subtitle = 'All Subjects';
        if (request('genre')) {
            $genre = Genre::firstWhere('slug_name', request('genre'));
            $subtitle = $genre->genre_name;
        }

        if (request('writer')) {
            $writer = Writer::firstWhere('username', request('writer'));
            $subtitle = $writer->name;
        }

        if (request('category')) {
            $category = Category::firstWhere('category_slug', request('category'));
            $subtitle = $category->name_category;
        }

        return view('books', [
            "title" => "BOOKS",
            "subtitle" => $subtitle,
            "books" => Book::latest()->filter(request(['search', 'genre', 'writer', 'category']))->get()
        ]);
    }

    public function detail(Book $book)
    {
        return view('book', [
            "title" => "BOOK",
            "book" => $book
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
}
