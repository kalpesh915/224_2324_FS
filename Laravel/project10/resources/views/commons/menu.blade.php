<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="/products">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
        @if (session('username'))
            <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
        @else
            <li class="nav-item"><a class="nav-link" href="/">Login</a></li>
        @endif
    </ul>
</nav>
