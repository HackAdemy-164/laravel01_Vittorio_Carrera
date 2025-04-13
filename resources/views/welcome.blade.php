<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BARI CALCIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
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




    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="/media/immagine1.webp" alt="" class="img-fluid welcome-custom mt-3">
            </div>
            <div class="col-12 col-md-6 mt-3">
                <p>La Società Sportiva Calcio Bari, meglio nota come Bari, è una società calcistica italiana con sede
                    nella città di Bari. Milita in Serie B, la seconda divisione del campionato italiano.
                    È erede della tradizione dell'Associazione Sportiva Bari, società costituita nel 1928 dalla fusione
                    dei sodalizi calcistici baresi Liberty e Ideale, e con questa si richiama al Bari Foot-Ball Club,
                    fondato nel 1908.
                    È tradizionalmente soprannominata "squadra ascensore" per le numerose promozioni e retrocessioni
                    susseguitesi negli anni tra la Serie A e le categorie inferiori, soprattutto la Serie B. Chiamata
                    comunemente, anche presso la stampa, "la Bari" fino agli anni sessanta, è stata poi indicata come
                    "il Bari", sebbene alcuni suoi tifosi usino talvolta indicare ancora la squadra al femminile. Lo
                    storico barese Gianni Antonucci ha definito, in alcune sue pubblicazioni, il Bari come "la squadra
                    più stramba del calcio italiano". I colori sociali sono il bianco e il rosso, mentre comune è il
                    soprannome Galletti, desunto dalla mascotte.
                </p>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 mt-3">
                <p>Simici raddoppia dopo Maggiore e il momentaneo pari di Pohjanpalo
                    Il Bari di mister Moreno Longo si prepara ad ospitare il Palermo guidato da mister Dionisi in occasione dell'anticipo della 33a giornata Serie BKT in programma al San Nicola a partire dalle ore 20:30. 
                    
                    Per la sfida ai rosanero il tecnico biancorosso conferma in avanti Lasagna, a segno con il Catanzaro, supportato da Falletti e, all'occorrenza da Maggiore, che partirà in mediana al fianco di Maita e Maiello, con Favasuli a destra e Dorval a sinistra. In difesa spazio a Mantovani a destra, Simici centrale e Obaretin a sinistra.  
                    
                    Squadre in campo al San Nicola: Bari in completo bianco con inserti rossi, Palermo in completo nero con inserti rosa e dorati. 
                </p>
            </div>
            <div class="col-12 col-md-6">
                <img src="https://pianetabari.com/wp-content/uploads/2023/09/239-DSPe5ZclA41d4QI5zEm4-e1695637051807.jpg" alt="" class="img-fluid welcome-custom mt-3">
            </div>

        </div>
    </div>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner mt-5">
            <div class="carousel-item active">
                <img src="https://www.borderline24.com/wp-content/uploads/2019/09/6a2b4a97-62fe-41ac-b3bc-40063650f88e.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.socialmediasoccer.com/fileadmin/_processed_/c/7/csm_as-bari-v-parma-calcio-tim-cup_55d81131f2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i0.wp.com/www.barinrete.it/wp-content/uploads/2023/01/P_20230128_135726-scaled.jpg?fit=2560%2C1920&ssl=1" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
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
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Punti
                            Vendita</a></li>
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

    <a href="#top" class="back-to-top">↑ Torna su</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>
