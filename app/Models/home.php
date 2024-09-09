<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class home extends Model
{
    use HasFactory;

    /**
     * 
     * Puxando todos os usuarios do banco da central de servicos
     */
    public static function GetAllUsers()
    {
        $table = "centralservicos.usuario";
        $fields = "nome, sobrenome";
        $where = "";
    
        $dadosMySql = DB::connection('mysql')->select("SELECT $fields FROM $table");
        return response()->json($dadosMySql);
    }

    /**
     * 
     * Consulta resonsável por puxar todas as atribuições
     */
    public static function GetAllAtributes()
    {
        
    }

    public static function GetQualidades()
    {

    }

    /**
     * Método resposnável em reornas os atributos da qualidade selecionada
     */
    public static function atributesReturn()
    {

    }
    
}
