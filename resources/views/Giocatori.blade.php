<x-layout>
    <div class="container-fluid mt-3">
        <div class="row">
            @foreach ($giocatori as $giocatore)
                <div class="col-12 col-md-4">
                    <div class="card mb-4">
                        <img src="{{$giocatore['img']}}" class="card-img-top img-fluid img-custom" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title">{{$giocatore['nome']}}</h5>
                            <p class="card-text">Ruolo: {{$giocatore['ruolo']}}</p>
                            <a href="{{route('dettagli', ['id' => $giocatore['id']])}}" class="btn btn-danger">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
