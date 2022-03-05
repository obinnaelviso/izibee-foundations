<!-- START MAIN NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="img/Izibee editable file.png" alt="izibee hallmark foundation" width="50px" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('causes') }}">Causes</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Get Involved
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('donation') }}">Donation</a></li>
                        <li><a class="dropdown-item" href="{{ route('volunteer') }}">Be A Volunteer</a></li>
                        <li><a class="dropdown-item" href="{{ route('volunteer') }}">Partnership</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('stories') }}">Our Stories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
            <button class="btn btn-large btn-block">
                <a href="{{ route('donation') }}">
                    Donate
                </a>
            </button>
        </div>
    </div>
</nav>
<!-- END MAIN NAVBAR -->
