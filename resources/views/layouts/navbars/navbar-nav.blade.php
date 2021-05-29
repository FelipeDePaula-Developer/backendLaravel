@section('navbar-nav')
    <div class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class=" navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class=" nav-link" href="#">Share</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="#">Discover</a>
                </li>
                <li class="nav-item">
                    <a class=" nav-link" href="#">Best Photos</a>
                </li>
                <li>

                    <form class="d-flex">
                        <button class="btn-color btn input-group-prepend" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                        <input class="form-control me-2" type="search" placeholder="Search Your Photos Style"
                            aria-label="Search">
                    </form>

                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class=" nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="link-color nav-link" href="/register">Register</a>
                </li>
            </ul>
        </div>

    </div>
@show
