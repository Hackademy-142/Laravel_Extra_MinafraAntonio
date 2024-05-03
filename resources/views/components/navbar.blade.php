<nav class="navbar navbar-expand-lg  bg-secondary-subtle  ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="bi fs-3 bi-twitter"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active fs-3" aria-current="page" href="{{route('home')}}">Home</a>
                </li>

                @guest
                {{-- se l utente non è registrato --}}
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi fs-3 text-dark bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Registrati</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Accedi</a>
                        </li>
                    </ul>
                </div>
                @endguest

                @auth
                <li class="nav-item ">
                    <form
                    method="POST"
                    action="{{route('logout')}}">
                    @csrf
                    <button class="nav-link" type="submit"><i class="bi fs-3 bi-door-open-fill"></i></button>
                </form>
            </li>
        </ul>
        @endauth
    </div>
</div>
</nav>