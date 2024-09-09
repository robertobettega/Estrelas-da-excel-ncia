<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    
    public function HomePage()
    {

        $content = home::GetAllUsers();
        return $content;
        
        // return view('home')->render();
    }

    public function atribuirGamificacao()
    {


    }
}