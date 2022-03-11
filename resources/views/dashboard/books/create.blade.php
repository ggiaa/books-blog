@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">new book</h1>                  
    </div>
    <div class="row col-lg-7 mb-5">
        <form action="/dashboard/books" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>            
            <div class="mb-3">
                <label for="genre_id" class="form-label">Genre</label>
                <select id="genre_id" class="form-select @error('genre_id') is-invalid @enderror" name="genre_id">
                    <option value="" disabled selected hidden>Choose the Genre...</option>
                    @foreach ($genres as $genre)                        
                        <option value="{{ $genre->id }}">{{ $genre->genre_name }}</option>
                    @endforeach
                </select>
                @error('genre_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="writer_id" class="form-label">Writer</label>
                <select id="writer_id" class="form-select @error('writer_id') is-invalid @enderror" name="writer_id">
                    <option value="" disabled selected hidden>Choose the Writer...</option>
                    @foreach ($writers as $writer)
                        <option value="{{ $writer->id }}">{{ $writer->name }}</option>                              
                    @endforeach
                </select>
                @error('writer_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="publisher_id" class="form-label">Publisher</label>
                <select id="publisher_id" class="form-select @error('publisher_id') is-invalid @enderror" name="publisher_id">
                        <option value="" disabled selected hidden>Choose the publisher...</option>
                    @foreach($publishers as $publisher)
                        <option value="{{ $publisher->id }}">{{ $publisher->company_name }}</option>                              
                    @endforeach
                </select>
                @error('publisher_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>            
            <div class="mb-3">
                <label for="total_pages" class="form-label">Total Pages</label>
                <input type="number" class="form-control @error('total_pages') is-invalid @enderror" id="total_pages" name="total_pages">
                @error('total_pages')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="publish_year" class="form-label">Publish Year</label>
                <input type="date" class="form-control @error('publish_year') is-invalid @enderror" id="publish_year" name="publish_year">
                @error('publish_year')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="synopsis" class="form-label @error('synopsis') is-invalid @enderror">Synopsis</label>
                <input id="synopsis" type="hidden" name="synopsis">
                <trix-editor input="synopsis"></trix-editor>
                @error('synopsis')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Insert Data</button>
            </div>
        </form>  
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/books/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>
@endsection