<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-family: sans-serif">
    <div class="container">
        <a class="navbar-brand" href="/"><strong><h3>GBOOKS</h3></strong></a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item" style="padding-right: 25px">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/"><strong>HOME</strong></a>
            </li>
            <li class="nav-item" style="padding-right: 25px">
                <a class="nav-link {{ request::is('books*') ? 'active' : '' }}" href="/books"><strong>BOOKS</strong></a>
            </li>
            <li class="nav-item" style="padding-right: 25px">
                <a class="nav-link {{ request::is('categories') ? 'active' : '' }}" href="/categories"><strong>CATEGORY</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request::is('about') ? 'active' : '' }}" href="/about"><strong>ABOUT</strong></a>
            </li>
        </div>
        
    </div>
</nav>