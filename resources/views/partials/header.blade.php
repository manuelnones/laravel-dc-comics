<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                        <img class="logo-img" src=" {{ Vite::asset("resources/img/dc-logo.png") }} " alt="ok">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                                @foreach ($linkNav as $link)
                                <li class="nav-item">
                                    <a class="text-uppercase nav-link" href="#">{{$link}}</a>
                                </li>
                                @endforeach
                          </ul>
                      </div>
                <input class="search-bar" type="text" placeholder="Search">
            </div> 
        </nav>
    </div>
</header>
