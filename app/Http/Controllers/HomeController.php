<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function HomePage()
    {
        $content = home::GetFugulin();
        return $content;
        // return view('home')->render();
    }

    public function atribuirGamificacao()
    {


    }
}