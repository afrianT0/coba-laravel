<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Afrian Blog</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item ">
                    <a class="nav-link gap-2 fs-6 text-dark {{ request()->is('dashboard') ? 'active bg-dark-subtle' : '' }}"
                        aria-current="page" href="/dashboard">
                        <i class="bi bi-speedometer me-1"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link gap-2 fs-6 text-dark {{ request()->is('dashboard/posts*') ? 'active bg-dark-subtle' : '' }}"
                        href="/dashboard/posts">
                        <i class="bi bi-file-text me-1"></i> My Posts
                    </a>
                </li>

                <hr class="my-3">

                @can('admin')
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
                        <span>ADMINISTRATOR</span>
                    </h6>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link gap-2 fs-6 text-dark {{ request()->is('dashboard/categories*') ? 'active bg-dark-subtle' : '' }}"
                                href="/dashboard/categories">
                                <i class="bi bi-grid me-1"></i> Post Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link gap-2 fs-6 text-dark {{ request()->is('dashboard/settings') ? 'active bg-dark-subtle' : '' }}"
                                href="#">
                                <i class="bi bi-gear me-1"></i> Settings
                            </a>
                        </li>

                    </ul>

                    <hr class="my-3">
                @endcan

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link gap-2 fs-6 text-dark" href="/" target="_blank">
                            <i class="bi bi-house-door me-1"></i> Website
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="nav-link gap-2 fs-6 text-dark" type="submit"><i
                                    class="bi bi-box-arrow-right me-1"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
        </div>
    </div>
</div>
