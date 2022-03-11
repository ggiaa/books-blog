@extends('dashboard.layouts.main')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Books</h1>            
    </div>

    @if (session('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>        
    @endif

    <div class="mb-3 d-flex justify-content-end">
        <a href="/dashboard/books/create" class="btn btn-primary"><span data-feather="plus"></span> Add New Book</a>
    </div>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Writer</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{($books->currentPage() - 1) * $books->perPage() + $loop->iteration}}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->writer->name }}</td>
                            <td>
                                <a href="/dashboard/books/{{ $book->slug }}" class="badge bg-primary"><span data-feather="eye"></span></a>
                                <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                                <a href="" class="badge bg-danger"><span data-feather="trash"></span></a>
                            </td>
                        </tr> 
                    @endforeach                               
                </tbody>
            </table>
        </div>
    </div>

    <div>
        {{ $books->links() }}
    </div>
</div>

@endsection