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
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select id="category" class="form-select" name="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <select id="genre" class="form-select" name="genre">
                    @foreach ($genres as $genre)                        
                        <option value="{{ $genre->id }}">{{ $genre->genre_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="writer" class="form-label">Writer</label>
                <select class="form-select" name="writer">
                    <option value="AL">Alabama</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <select id="author" class="form-select" name="author">
                    <option>Text</option>
                </select>
            </div>            
            <div class="mb-3">
                <label for="total_pages" class="form-label">Total Pages</label>
                <input type="text" class="form-control" id="total_pages" name="total_pages">
            </div>
            <div class="mb-3">
                <label for="publish_year" class="form-label">Publish Year</label>
                <input type="text" class="form-control" id="publish_year" name="publish_year">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="synopsis" class="form-label">Synopsis</label>
                <input id="synopsis" type="hidden" name="content">
                <trix-editor input="synopsis"></trix-editor>
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

    // select button     
    $(document).ready(function() {
        $('#genre').select2();
    });
</script>
@endsection