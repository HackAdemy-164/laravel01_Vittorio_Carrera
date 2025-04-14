<x-layout>
    
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
    

</x-layout>