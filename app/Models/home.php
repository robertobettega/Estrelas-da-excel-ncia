<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class home extends Model
{
    use HasFactory;

    public static function GetFugulin()
    {

        $table = "censo_fugulin.censo_fugulin_fugulin";
        $fields = "*";
        $where = "";
    
        $dadosMySql = DB::connection('mysql')->select("SELECT $fields FROM $table");
        return response()->json($dadosMySql);


    }
    
}
