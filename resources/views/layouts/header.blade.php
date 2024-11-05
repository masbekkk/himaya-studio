<!-- new header -->
<header class="fixed-top">
    <div class="announcement-bar d-flex align-items-center justify-content-center">
        <p class="mb-0"><b>BOOK NOW</b> AND GET <b>FREE 1 PRINTED PHOTO!</b></p>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container py-3 py-lg-0 px-3 px-lg-0">
            <a class="navbar-brand d-none d-lg-inline" href="{{ route('landing') }}">
                <img src="/assets/img/logo-black-small.avif" alt="Née" width="48" height="48">
            </a>
            <button class="navbar-toggler border-0 text-align-start" onclick="changeIcon(this)" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="d-inline d-lg-none" href="{{ route('landing') }}">
                <img src="/assets/img/logo-black-small.avif" alt="Née" height="54">
            </a>
            <button class="navbar-toggler d-inline d-lg-none v-hidden" type="button" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNav">
                <ul class="navbar-nav text-center mt-4 mt-lg-0">
                    <li class="nav-item my-1 my-lg-0">
                        <a class="nav-link pb-1 mx-3 text-black text-decoration-none"
                            href="{{ route('landing') }}"><span class="nav-active pb-1">Home</span></a>
                    </li>
                    <li class="nav-item my-1 my-lg-0">
                        <a class="nav-link pb-1 mx-3 text-black text-decoration-none"
                            href="{{ route('landing') }}#aboutme"><span class="pb-1">About
                                Née</span></a>
                    </li>
                    <li class="nav-item my-1 my-lg-0">
                        <a class="nav-link pb-1 mx-3 text-black text-decoration-none"
                            href="{{ route('book-now') }}"><span class="pb-1">Book
                                Now</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
