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


    /**
     * 
     * 
     */
    public static function contagemPinsForUsers($dados)
    {
        $query ="
            SELECT
                usuarios.id as ID_USUARIO,
                usuarios.name as NOME_USUARIO,
                QUA.DESCRICAO as QUALIDADE_NOME,
                COUNT(*) as TOTAL_QUALIDADE
            FROM estrelaexcelencia.pin as pin
                inner join l_breeze.users as usuarios
                    ON usuarios.id = pin.ID_USUARIOATRIBUIDO
                inner join estrelaexcelencia.qualidade as QUA
                    ON pin.ID_QUALIDADE = QUA.ID
                    where usuarios.id = $dados
            GROUP BY usuarios.id, usuarios.name, QUA.DESCRICAO
            ORDER BY TOTAL_QUALIDADE DESC;
                    ";       
        $dadosMySql = DB::connection('mysql_other')->select($query);
        return $dadosMySql;

    }

    public static function pinForUsers($dados)
    {
        $query = "
            SELECT
                pin.id as ID_PIN,
                usuarios.id as ID_USUARIO,
                usuarios.name as NOME_USUARIO,
                pin.ID_QUALIDADE as QUALIDADE,
                QUA.DESCRICAO as QUALIDADE_NOME,
                pin.ID_JUSTIFICATIVA as JUSTIFICATIVA,
                jus.DESCRICAO as JUSTIFICATIVA_NOME,
                pin.DEDICATORIA as DEDICATORIA,
                DATE_FORMAT(pin.DATA_ATRIBUICAO, '%d/%m/%Y') as DATA_PIN,
                DATE_FORMAT(pin.DATA_ATRIBUICAO, '%H:%i') as HORA_PIN

            FROM estrelaexcelencia.pin as pin
                    inner join l_breeze.users as usuarios
                        ON usuarios.id = pin.ID_USUARIOATRIBUIDO
                    inner join estrelaexcelencia.qualidade as QUA
                        ON pin.ID_QUALIDADE = QUA.ID
                    inner join estrelaexcelencia.justificativa as jus
                        ON jus.id = pin.ID_JUSTIFICATIVA
                        
            WHERE ID_USUARIOATRIBUIDO = $dados
            ORDER BY ID_PIN DESC";
                    
            $dadosMySql = DB::connection('mysql_other')->select($query);
            return $dadosMySql;
    }

    public static function countPinsforUsers()
    {

        $query = "
                    SELECT
                usuarios.id as ID_USUARIO,
                usuarios.name as NOME_USUARIO,
                COUNT(*) as TOTAL_QUALIDADE
            FROM estrelaexcelencia.pin as pin
                inner join l_breeze.users as usuarios
                    ON usuarios.id = pin.ID_USUARIOATRIBUIDO
                inner join estrelaexcelencia.qualidade as QUA
                    ON pin.ID_QUALIDADE = QUA.ID
            GROUP BY usuarios.id, usuarios.name
            ORDER BY TOTAL_QUALIDADE DESC;
        ";

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
