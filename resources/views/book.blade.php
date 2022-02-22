@extends('layouts.main')

@section('content')    
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="card mb-5">
                    <div class="row g-0">              
                      <div class="col-md-8">
                        <div class="card-body">   
                          <h3 class="card-title" style="text-align: center">{{ $book->title }}</h3>                  
                          <table class="table mt-4" style="width:100%">
                            <tr>
                              <th style="width:20%">Genre</th>
                              <td>{{ $book->category->name_category }}</td>
                            </tr>
                            <tr>
                              <th>Writer</th>
                              <td>{{ $book->writer->name }}</td>
                            </tr>
                            <tr>
                              <th>Published on</th>
                              <td>{{ $book->publish_year }}</td>
                            </tr>
                            <tr>
                              <th>Total Pages</th>
                              <td>{{ $book->total_pages }} Page</td>
                            </tr>
                            <tr>
                              <th>Published by</th>
                              <td>{{ $book->author }}</td>
                            </tr>
                            <tr>
                              <th>Price</th>
                              <td>Rp. {{ number_format($book->price) }}</td>
                            </tr>
                            <tr>
                              <th>Synopsis</th>                      
                              <td style="text-align: justify">{{ $book->synopsis }}</td>                      
                            </tr>
                          </table>               
                          <a href="/books" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back</a>                  
                        </div>
                      </div>
                      <div class="col-md-4" style="margin: auto; display: block">
                        <img src="" class="img-fluid my-lg-3" >
                      </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
@endsection