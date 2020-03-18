<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Youtubeur;

class YoutubeurController extends Controller
{
    public function getYoutubeurs () {

        $youtubeurs = Youtubeur::all();
        

        return view('youtubeur',
            [
                'youtubeurs' => $youtubeurs,
            ]
        );
        
    }
}
