@extends('layouts.main')

@section('content') 
<div class="container mt-2">
    <div class="row">      
        @foreach ($books as $book)                                       
        <div class="col-md-6">
            <div class="card mb-3" style="margin-right: 1px">
                <div class="row g-0"> 

                    <div class="col-md-8">                        
                        <div class="card-body">
                            <strong class="d-inline-block mb-3 text-danger">{{ $book->genre->category->name_category }}</strong> / <strong class="d-inline-block mb-3 text-danger">{{ $book->genre->genre_name }}</strong>                            
                            <h4 class="card-title mb-1">{{ $book->title }}</h4>
                            <p class="card-text text-muted mb-2"><small><a href="/book/{{ $book->writer->username }}" class="text-muted" style="text-decoration: none">{{ $book->writer->name }}</a></small></p> 
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
@endsection