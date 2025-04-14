<nav class="navbar navbar-expand-lg nav-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="/media/logo bari.png" alt="" class="logo-custom">
            BariCalcio</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Giocatori') }}">Giocatori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Sponsor') }}">Sponsor</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

