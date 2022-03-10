@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="mb-4 mt-3 text-danger"><i class="bi bi-list"></i> Fiction Category</h3>
            @foreach ($fiction as $fic)                            
            <div class="col-md-2 mb-3">
                <a href="/books?genre={{ $fic->slug_name }}">
                <div class="card bg-dark text-white">
                    <img src="http://source.unsplash.com/300x200?{{ $fic->genre_name }}" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h6 class="card-title text-center flex-fill p-2 fs-5" style="background-color: rgba(0, 0, 0, 0.8)"><small>{{ $fic->genre_name }}</small></h6>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
            <hr>
        </div>
        <div class="row mb-4">
            <h3 class="mb-4 mt-3 text-danger"> <i class="bi bi-list"></i> Nonfiction Category</h3>
            @foreach ($nonfiction as $nonfic)                            
            <div class="col-md-2 mb-3">
                <a href="/books?genre={{ $nonfic->slug_name }}">
                <div class="card bg-dark text-white">
                    <img src="http://source.unsplash.com/300x200?{{ $nonfic->genre_name }}" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-2 fs-5" style="background-color: rgba(0, 0, 0, 0.8)"><small>{{ $nonfic->genre_name }}</small></h5>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection