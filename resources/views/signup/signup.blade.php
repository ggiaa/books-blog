@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class=" col-md-5 mt-5">
            <main class="form-signup">
                <h1 class="h3 mb-3 fw-normal text-center">SIGN-UP</h1>
                
                <form>                        
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" id="name"  placeholder="Name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="username"  placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email"  placeholder="Email address">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>            
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>                    
                </form>

                <small class="d-block text-center mt-3">Already sign-in yet? sign-in <a href="/sign-in">here</a></small>

            </main>  
        </div>        
    </div>
</div>  
@endsection