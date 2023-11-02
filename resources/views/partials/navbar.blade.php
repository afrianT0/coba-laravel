<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/dotryn-logo.png" alt="Dotryn Logo" width="150">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
            aria-controls="offcanvasWithBothOptions">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
            aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                    <img src="/img/dotryn-logo.png" alt="Dotryn Logo" width="150">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body bg-primary">
                <div class="navbar-nav">
                    <li class="nav-item px-2"><a class="nav-link {{ request()->is('/*') ? 'active' : '' }}"
                            href="/">Home</a>
                    </li>
                    <li class="nav-item px-2"><a class="nav-link {{ request()->is('about*') ? 'active' : '' }}"
                            href="/about">About</a>
                    </li>
                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('posts*') || request()->is('categories*') ? 'active' : '' }}"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Posts
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item {{ request()->is('posts*') ? 'active' : '' }}"
                                    href="/posts">All
                                    Posts</a>
                            </li>
                            <li><a class="dropdown-item {{ request()->is('categories*') ? 'active' : '' }}"
                                    href="/categories">Categories</a></li>
                        </ul>
                    </li>
                </div>

                <div class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link fs-3 p-0 px-2" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer"></i>
                                        Dashboard</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i>
                                        Logout
                                    </button>
                                </form>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item"><a href="/login"
                                class="btn btn-outline-light {{ request()->is('login*') ? 'active' : '' }}"><i
                                    class="bi bi-box-arrow-in-right"></i> Login</a>
                        </li>
                    @endauth

                </div>
            </div>
        </div>
    </div>
</nav>
