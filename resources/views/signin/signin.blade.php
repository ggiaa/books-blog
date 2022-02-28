@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class=" col-md-5 mt-5">
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">SIGN-IN</h1>
                
                <form>                        
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>            
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>                    
                </form>

                <small class="d-block text-center mt-3">Not sign-up yet? sign-up <a href="/sign-up">here</a></small>

            </main>  
        </div>        
    </div>
</div>  
@endsection