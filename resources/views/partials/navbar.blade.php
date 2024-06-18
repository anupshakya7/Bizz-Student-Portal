<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if(auth()->check())
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
                @endif
            </ul>

            <form class="d-flex" role="search">
                @if(auth()->check())
                <p class="mt-2 me-2">Welcome, <b>{{auth()->user()->name}}</b> </p>
                <a href="{{Auth::logout()}}" class="btn btn-outline-danger mx-1" type="button">Logout</a>
                @else
                <a href="{{route('login')}}" class="btn btn-outline-success mx-1" type="button">Login</a>
                <a href="{{route('register')}}" class="btn btn-outline-danger mx-1" type="button">Register</a>
                @endif
            </form>
        </div>
    </div>
</nav>