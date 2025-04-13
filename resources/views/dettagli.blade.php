<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giocatori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg nav-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="/media/logo bari.png" alt=""
                    class="logo-custom">BariCalcio</a>

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


    <div class="container mt-3">
        <div class="row">
            <h1>{{$giocatore['nome']}}</h1>
            <div class="col-12 col-md-6">
                <img src="{{$giocatore['img']}}" class=" img-fluid " alt="..." >
            </div>
            <div class="col-12 col-md-6">
                <h4 class="card-title">Ruolo: {{$giocatore['ruolo']}}</h4>
                
            </div>
        </div>
    </div>
    


    <footer class=" nav-custom text-white mt-5">
        <div class="row justify-content-evenly">
            <div class="col-12 col-md-6 mb-3">
                <h5>Scopri...</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Merch</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Newsletter</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Punti Vendita</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Social</a></li>
                </ul>
            </div>



            <div class="col-12 col-md-6 mb-3 ">
                <form>
                    <h5>Iscriviti alla nostra Newsletter</h5>
                    <p>Scopri tutte le novità!</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email </label>
                        <input id="newsletter1" type="email" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Iscriviti</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between">
            <p>© 2025 Bari Calcio, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="#" aria-label="Instagram"><svg
                            class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#" aria-label="Facebook"><svg
                            class="bi" width="24" height="24" aria-hidden="true">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </div>
    </footer>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>