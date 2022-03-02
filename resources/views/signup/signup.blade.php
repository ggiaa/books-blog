@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class=" col-md-5 mt-5">
            <main class="form-signup">
                <h1 class="h3 mb-3 fw-normal text-center">SIGN-UP</h1>
                <form action="/sign-up" method="POST">                        
                    @csrf
                    
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error ('name') is-invalid @enderror" id="name"  placeholder="Name" name="name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                        
                        @enderror
                    </div>
                    
                    <div class="form-floating">
                        <input type="text" class="form-control @error ('username') is-invalid @enderror" id="username"  placeholder="Username" name="username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                        
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control @error ('email') is-invalid @enderror" id="email"  placeholder="Email address" name="email" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                        
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom @error ('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                        
                        @enderror
                    </div>   

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign Up</button>                    
                </form>

                <small class="d-block text-center mt-3">Already sign-in yet? sign-in <a href="/sign-in">here</a></small>

            </main>  
        </div>        
    </div>
</div>  
@endsection