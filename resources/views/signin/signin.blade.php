@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class=" col-md-5 mt-5">
            <main class="form-signin">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>                    
                @endif

                @if (session()->has('failedmessage'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('failedmessage') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>                    
                @endif

                <h1 class="h3 mb-3 fw-normal text-center">SIGN-IN</h1>
                
                <form action="/sign-in" method="POST">                        
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feed">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>            
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>                    
                </form>

                <small class="d-block text-center mt-3">Not sign-up yet? sign-up <a href="/sign-up">here</a></small>

            </main>  
        </div>        
    </div>
</div>  
@endsection