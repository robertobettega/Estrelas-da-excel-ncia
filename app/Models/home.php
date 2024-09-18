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
        $table = "l_breeze.users";
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

    public static function GetJustificativas()
    {
        $table = "estrelaexcelencia.justificativa";
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
            WITH ranked_usuario AS (
                SELECT
                    ID_USUARIOATRIBUIDO,
                    ID_QUALIDADE,
                    COUNT(*) AS count_valor,
                    ROW_NUMBER() OVER (PARTITION BY ID_QUALIDADE ORDER BY COUNT(*) DESC) AS rankvalor
                FROM estrelaexcelencia.pin
                GROUP BY ID_USUARIOATRIBUIDO, ID_QUALIDADE
            )
            SELECT
                LB.name as NOME_ATRIBUIDO,
                ID_USUARIOATRIBUIDO,
                ID_QUALIDADE,
                count_valor,
                rankvalor as posicoes
            FROM ranked_usuario
                INNER JOIN l_breeze.users as LB
                    ON LB.id = ID_USUARIOATRIBUIDO
                                WHERE rankvalor <= 3 and ID_QUALIDADE = $excelencia
            ORDER BY posicoes asc;
                    ";
                    
    // $dadosMySql = DB::select($query);
    $dadosMySql = DB::connection('mysql_other')->select($query);
    return $dadosMySql;
    }

    public static function justificativasPorQualidades($dados)
    {
        $query = "
        SELECT 
        qua.id as id_qua,
        qua.DESCRICAO,
        jus.id as id_jus,
        jus.DESCRICAO

        FROM estrelaexcelencia.qualidade as qua
            INNER JOIN estrelaexcelencia.justificativa as jus
                ON jus.ID_QUALIDADE = qua.id
                where qua.id = $dados;
        ";

        $dadosMySql = DB::connection('mysql_other')->select($query);
        return $dadosMySql;

    }

    /**
     * 
     * Método usado para realizar inserts das atribuições
     */
    public static function insertPin($dados)
    {
        return DB::connection('mysql_other')->table('estrelaexcelencia.pin')->insert([
            'ID_QUALIDADE'        => $dados['ID_QUALIDADE'],
            'ID_USUARIO'          => $dados['ID_USUARIO'],
            'ID_USUARIOATRIBUIDO' => $dados['ID_USUARIOATRIBUIDO'],
            'ID_JUSTIFICATIVA'    => $dados['ID_JUSTIFICATIVA'],
            'DEDICATORIA'         => $dados['DEDICATORIA'],
            'DATA_ATRIBUICAO'    => $dados['DATA_ATRIBUICAO'],
        ]);
    }
    
}
