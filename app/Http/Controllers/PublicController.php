<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('welcome');  
    }

    public function giocatori()
    {
        $giocatori = [
            ['id'=>1, 'nome' => 'Boris Radunović', 'ruolo' => 'Portiere', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2879-vudcNsaZr4.jpg' ],
            ['id'=>2, 'nome' => 'Valerio Mantovani', 'ruolo' => 'Difensore', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2886-AqV9b47lTa.jpg' ],
            ['id'=>3, 'nome' => 'Alessandro Tripaldelli', 'ruolo' => 'Difensore', 'img' => 'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2897-6P8FN906U0.jpg'],
            ['id'=>4, 'nome' => 'Francesco Vicari', 'ruolo' => 'Difensore', 'img' => 'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2237-D0Ai9zUEDL.jpg'],
            ['id'=>5, 'nome' => 'Raffaele Pucino', 'ruolo' => 'Difensore', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/1601-1FQGGDS446.jpg' ],
            ['id'=>6, 'nome' => 'Mattia Maita', 'ruolo' => 'Centocampista', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/1095-3gOvg7CGCS.jpg' ],
            ['id'=>7, 'nome' => 'Andrea Oliveri', 'ruolo' => 'Centocampista', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2884-o38l9dmDc9.jpg' ],
            ['id'=>8, 'nome' => 'Ahmad Benali', 'ruolo' => 'Centocampista', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2609-DE79pQRFhm.jpg' ],
            ['id'=>9, 'nome' => 'Raffaele Maiello', 'ruolo' => 'Centocampista', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2157-sVnZ0gA3au.jpg' ],
            ['id'=>10, 'nome' => 'Nicola Bellomo', 'ruolo' => 'Attaccante', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2242-FUmcPUSCs4.jpg'],
            ['id'=>11, 'nome' => 'Kevin Lasagna', 'ruolo' => 'Attaccante', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2880-oQrSAQh5T4.jpg' ],
        ];

        return view('Giocatori', ['giocatori' => $giocatori]);
    } 

    public function dettagli($id)
    {
        $giocatori = [
            ['id'=>1, 'nome' => 'Boris Radunović', 'ruolo' => 'Portiere', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2879-vudcNsaZr4.jpg' ],
            ['id'=>2, 'nome' => 'Valerio Mantovani', 'ruolo' => 'Difensore', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2886-AqV9b47lTa.jpg' ],
            ['id'=>3, 'nome' => 'Alessandro Tripaldelli', 'ruolo' => 'Difensore', 'img' => 'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2897-6P8FN906U0.jpg'],
            ['id'=>4, 'nome' => 'Francesco Vicari', 'ruolo' => 'Difensore', 'img' => 'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2237-D0Ai9zUEDL.jpg'],
            ['id'=>5, 'nome' => 'Raffaele Pucino', 'ruolo' => 'Difensore', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/1601-1FQGGDS446.jpg' ],
            ['id'=>6, 'nome' => 'Mattia Maita', 'ruolo' => 'Centocampista', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/1095-3gOvg7CGCS.jpg' ],
            ['id'=>7, 'nome' => 'Andrea Oliveri', 'ruolo' => 'Centocampista', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2884-o38l9dmDc9.jpg' ],
            ['id'=>8, 'nome' => 'Ahmad Benali', 'ruolo' => 'Centocampista', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2609-DE79pQRFhm.jpg' ],
            ['id'=>9, 'nome' => 'Raffaele Maiello', 'ruolo' => 'Centocampista', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2157-sVnZ0gA3au.jpg' ],
            ['id'=>10, 'nome' => 'Nicola Bellomo', 'ruolo' => 'Attaccante', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2242-FUmcPUSCs4.jpg'],
            ['id'=>11, 'nome' => 'Kevin Lasagna', 'ruolo' => 'Attaccante', 'img' =>'https://cdn.enjore.com/wl/ssc_bari/img/player/institutional/2880-oQrSAQh5T4.jpg' ],
        ];

        foreach ($giocatori as $giocatore) {
            if ($giocatore['id'] == $id) {
                return view('dettagli', ['giocatore' => $giocatore]);
            }
        }

        abort(404, 'Giocatore non trovato');
    }

    public function Sponsor()
    {
        return view('Sponsor');
    } 
}
