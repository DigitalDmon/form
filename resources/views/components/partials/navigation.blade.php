<nav class="p-4 max-w-screen-lg mx-auto flex items-center justify-between">
    <a href="{{ route('home') }}" class="nav-link">Home</a>

    <div class="flex items-center gap-4">
        <a href="{{ route('auth.login') }}" class="nav-link">Login</a>
        <a href="{{ route('auth.register') }}" class="nav-link">Register</a>
    </div>

</nav>
