@extends('layouts.main')

@section('content')    
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="card mb-5 mt-3">
                    <div class="row g-0">              
                      <div class="col-md-8">
                        <div class="card-body">   
                          <h3 class="card-title" style="text-align: center">{{ $book->title }}</h3>                  
                          <table class="table mt-4" style="width:100%">
                            <tr>
                              <th style="width:20%">Genre</th>
                              <td><a href="/genre/{{ $book->genre->slug_name }}" style="text-decoration: none">{{ $book->genre->genre_name }}</a></td>
                            </tr>
                            <tr>
                              <th>Writer</th>
                              <td><a href="/book/{{ $book->writer->username }}" style="text-decoration: none">{{ $book->writer->name }}</a></td>
                            </tr>
                            <tr>
                              <th>Published on</th>
                              <td>{{ date('F Y', strtotime($book->publish_year)) }}</td>
                            </tr>
                            <tr>
                              <th>Total Pages</th>
                              <td>{{ $book->total_pages }} Page</td>
                            </tr>
                            <tr>
                              <th>Published by</th>
                              <td>{{ $book->publisher->company_name }}</td>
                            </tr>
                            <tr>
                              <th>Price</th>
                              <td>Rp. {{ number_format($book->price) }}</td>
                            </tr>
                            <tr>
                              <th>Synopsis</th>                      
                              <td style="text-align: justify">{!! $book->synopsis !!}</td>                      
                            </tr>
                          </table>               
                          <a href="/books" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back</a>                  
                        </div>
                      </div>
                      <div class="col-md-4" style="margin: auto; display: block">
                        <img src="http://source.unsplash.com/800x1280?{{ $book->genre->genre_name }}" class="img-fluid my-lg-3" >
                      </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
@endsection