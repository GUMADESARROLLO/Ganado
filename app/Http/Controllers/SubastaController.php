<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subasta;


class SubastaController extends Controller
{
    function ViewHome()  
    {

        $Headers = array(
            'Header'    => 'Subasta del LOTE: 001',
            'subHeader' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, voluptates!',
            'Path'      => array('Subasta'),
        );

        $video = Subasta::YoutubeID('https://www.youtube.com/watch?v=ujbGqWsRLeA');
        


        return view('Subasta.home', compact('Headers','video'));
    }
}
