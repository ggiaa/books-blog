@extends('layouts.main')

@section('content') 
<div class="container mt-3">
    <div class="row mb-2">
        <h4>Subject <span class="text-danger">{{ $subtitle }}</span></h4>
    </div>

    <div class="row justify-content-end">
        <div class="col-md-6">
            <form action="/books">
                @if (request('genre'))
                    <input type="hidden" name="genre" value="{{ request('genre') }}">
                @endif
                @if (request('writer'))
                    <input type="hidden" name="writer" value="{{ request('writer') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    
    @if ($books->count())    
    <div class="row">      
        @foreach ($books as $book)                                       
        <div class="col-md-6">
            <div class="card mb-3" style="margin-right: 1px">
                <div class="row g-0"> 

                    <div class="col-md-8">                        
                        <div class="card-body">
                            <p class="d-inline-block mb-3"><a style="text-decoration: none" class="text-danger" href="/books?category={{ $book->genre->category->category_slug }}">{{ $book->genre->category->name_category }}</a></p> / 
                            <p class="d-inline-block mb-3"><a style="text-decoration: none" class="text-danger" href="/books?genre={{ $book->genre->slug_name }}">{{ $book->genre->genre_name }}</a></p>                            
                            <h4 class="card-title mb-1">{{ $book->title }}</h4>
                            <p class="card-text text-muted mb-2"><small><a href="/books?writer={{ $book->writer->username }}" class="text-muted" style="text-decoration: none">{{ $book->writer->name }}</a></small></p> 
                            <p class="card-text mb-3" style="text-align: justify">{{ $book->excerpt }}</p> 
                            <a href="/books/{{ $book->slug }}" style="text-decoration: none">Continue reading</a>                              
                        </div>
                    </div>

                    <div class="col-md-4">
                        <img src="" class="img-fluid rounded-end rounded-start">
                    </div>

                </div>
            </div>
        </div>  
        @endforeach 
    </div>
</div>

@else
    <p class="text-center fs-4">No Post Found</p>
@endif

@endsection