<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Writer;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.books.index', [
            "books" => Book::latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.books.create', [
            "title" => "ADD",
            "genres" => Genre::orderBy('genre_name', 'ASC')->get(),
            "writers" => Writer::orderBy('name', 'ASC')->get(),
            "publishers" => Publisher::orderBy('company_name', 'ASC')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:books',
            'slug' => 'required|unique:books',
            'genre_id' => 'required',
            'writer_id' => 'required',
            'publisher_id' => 'required',
            'total_pages' => 'required|numeric|min:1',
            'publish_year' => 'required',
            'price' => 'required|numeric|min:1',
            'synopsis' => 'required'
        ]);
        $validated['excerpt'] = Str::limit(strip_tags($request->synopsis), 100);

        Book::create($validated);

        return redirect('dashboard/books')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('dashboard.books.detail', [
            "book" => $book,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('dashboard.books.edit', [
            'book' => $book,
            "genres" => Genre::orderBy('genre_name', 'ASC')->get(),
            "writers" => Writer::orderBy('name', 'ASC')->get(),
            "publishers" => Publisher::orderBy('company_name', 'ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $rules = [
            'title' => 'required',
            'genre_id' => 'required',
            'writer_id' => 'required',
            'publisher_id' => 'required',
            'total_pages' => 'required|numeric|min:1',
            'publish_year' => 'required',
            'price' => 'required|numeric|min:1',
            'synopsis' => 'required'
        ];

        if ($request->slug != $book->slug) {
            $rules['slug'] = 'required|unique:books';
        };

        $validated = $request->validate($rules);
        $validated['excerpt'] = Str::limit(strip_tags($request->synopsis), 100);

        Book::where('id', $book->id)->update($validated);

        return redirect('dashboard/books')->with('success', 'Changes has been save!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('dashboard/books')->with('success', 'Record has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Book::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
