<nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <x-navigation-link :href="route('home')" :active="request()->routeIs('home')">
                    Home
                </x-navigation-link>
                <x-navigation-link :href="route('posts.index')" :active="request()->routeIs('posts.*')">
                    Posts
                </x-navigation-link>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item bg-primary rounded">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-light btn">Logout</button>
                        </form>
                    </li>
                @else
                    <x-navigation-link :href="route('login')">
                        Login
                    </x-navigation-link>
                @endauth
            </ul>


        </div>
    </div>
</nav>
