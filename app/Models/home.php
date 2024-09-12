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
                ID_QUALIDADE,
                COUNT(*) AS count_valor,
                ROW_NUMBER() OVER (PARTITION BY ID_QUALIDADE ORDER BY COUNT(*) DESC) AS rankvalor
            FROM estrelaexcelencia.pin
            GROUP BY USUARIO, ID_QUALIDADE
        )
        SELECT
            concat(cs.nome, ' ', cs.sobrenome) as USUARIO,
            ID_QUALIDADE,
            count_valor,
            rankvalor as posicoes
        FROM rankusuarios AS usu
		inner join centralservicos.usuario as cs ON cs.id = usu.USUARIO
        WHERE rankvalor <= 3 and ID_QUALIDADE = $excelencia
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
            'ID_QUALIDADE' => $dados['ID_QUALIDADE'],
            'USUARIO'               => $dados['USUARIO'],
            'JUSTIFICATIVA'         => $dados['JUSTIFICATIVA'],
            'DEDICATORIA'           => $dados['DEDICATORIA'],
            'DATA_ATRIBUICAO'       => $dados['DATA_ATRIBUICAO'],
        ]);
    }
    
}
