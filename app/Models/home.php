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
        $fields = "*";
        $where = "";
    
        $dadosMySql = DB::connection('mysql')->select("SELECT $fields FROM $table");
        return $dadosMySql;
    }

    /**
     * 
     * Consulta resonsável por puxar todas as atribuições
     */
    public static function GetAllAtributes()
    {
        
        $table = "estrelaexcelencia.atributos";
        $fields = "*";
        $where = "";
    
        $dadosMySql = DB::connection('mysql')->select("SELECT $fields FROM $table");
        return $dadosMySql;

    }

    public static function GetQualidades()
    {
        $table = "estrelaexcelencia.qualidade";
        $fields = "*";
        $where = "";
    
        $dadosMySql = DB::connection('mysql')->select("SELECT $fields FROM $table");
        return $dadosMySql;
    }

    /**
     * Método resposnável em reornas os atributos da qualidade selecionada
     */
    public static function atributesReturn()
    {

    }

    /**
     * 
     * Metodo responsavel por retornar os maiores dos ranks de excelência
     */
    public static function getAllExcelenciasUsers($excelencia){

        $query = "
        WITH rankusuarios AS (
            SELECT
                USUARIO,
                ATRIBUTOS_idATRIBUTOS,
                COUNT(*) AS count_valor,
                ROW_NUMBER() OVER (PARTITION BY ATRIBUTOS_idATRIBUTOS ORDER BY COUNT(*) DESC) AS rankvalor
            FROM estrelaexcelencia.pin
            GROUP BY USUARIO, ATRIBUTOS_idATRIBUTOS
        )
        SELECT
            concat(cs.nome, ' ', cs.sobrenome) as USUARIO,
            ATRIBUTOS_idATRIBUTOS,
            count_valor,
            rankvalor as posicoes
        FROM rankusuarios AS usu
		inner join centralservicos.usuario as cs ON cs.id = usu.USUARIO
        WHERE rankvalor <= 3 and ATRIBUTOS_idATRIBUTOS = $excelencia
        order by posicoes asc;
    ";

    
    $dadosMySql = DB::select($query);
    return $dadosMySql;
    }


    /**
     * 
     * Método usado para realizar inserts das atribuições
     */
    public static function insertPin($dados)
    {
        return DB::table('estrelaexcelencia.pin')->insert([
            'ATRIBUTOS_idATRIBUTOS' => $dados['ATRIBUTOS_idATRIBUTOS'],
            'USUARIO'               => $dados['USUARIO'],
            'JUSTIFICATIVA'         => $dados['JUSTIFICATIVA'],
            'DEDICATORIA'           => $dados['DEDICATORIA'],
            'DATA_ATRIBUICAO'       => $dados['DATA_ATRIBUICAO'],
        ]);
    }
    
}
