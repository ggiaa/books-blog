<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-family: sans-serif">
    <div class="container">
        <a class="navbar-brand" href="/"><strong><h3>GBOOKS</h3></strong></a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item" style="padding-right: 20px">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/"><strong>HOME</strong></a>
            </li>
            <li class="nav-item" style="padding-right: 20px">
                <a class="nav-link {{ request::is(['books*', 'category*', 'genre*','book*']) ? 'active' : '' }}" href="/books"><strong>BOOKS</strong></a>
            </li>
            <li class="nav-item" style="padding-right: 20px">
                <a class="nav-link {{ request::is('list') ? 'active' : '' }}" href="/list"><strong>GENRE LIST</strong></a>
            </li>
            <li class="nav-item" style="padding-right: 20px">
                <a class="nav-link {{ request::is('about') ? 'active' : '' }}" href="/about"><strong>ABOUT</strong></a>
            </li>

            @auth
                <li class="nav-item dropdown">
                    
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hello, {{ auth()->user()->name }}
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-house-door"></i> My Dashboard</a></li>                    
                        <li><hr class="dropdown-divider"></li>                    
                        <form action="/sign-out" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i> Sign-Out</a></button>
                        </form>
                    </ul>
                
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link {{ request::is('sign-in') ? 'active' : '' }}" href="/sign-in"><i class="bi bi-box-arrow-in-right"></i><strong> SIGN IN</strong></a>
                </li>                
            @endauth
        </div>
        
    </div>
</nav>