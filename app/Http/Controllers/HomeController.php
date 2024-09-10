<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function HomePage()
{
    // PEGANDO AS EXCELENCIAS
    $excelencias_opcoes = home::GetQualidades();

    //PEGANDO AS SUB-EXCELÊNCIAS
    $sub_excelencias = home::GetAllAtributes();

    //USUÁRIOS DA CAIXA DE SELECT
    $users = home::GetAllUsers();


    // VALORES NÚMERICOS DAS EXCELENCIAS DENTRO DO BANCO, EM QUE SÃO OS SEUS ID'S EM "QUALIDADES"
    $hospitalidade = 1;
    $prestreza = 2;
    $inovacao = 3;
    $seguranca = 4;

    // COLOCANDO OS VALORES EM CADA TIPO DE EXCELENCIA PARA ELE ME  TRAZER O TOP 3 DE CADA UMA
    $hospitalidade_rank = home::getAllExcelenciasUsers($hospitalidade);
    $prestreza_rank = home::getAllExcelenciasUsers($prestreza);
    $inovacao_rank = home::getAllExcelenciasUsers($inovacao);
    $seguranca_rank = home::getAllExcelenciasUsers($seguranca);

    // ARMAZENANDO EM APENAS 1 VARIAVEL PARA SER ENCAMINHADA PARA O VIEW
    $data = [
        "excelencias"=>$sub_excelencias,
        "users"=>$users,
        "excelencias_opcoes"=>$excelencias_opcoes,
        "hospitalidade_rank" => $hospitalidade_rank,
        "prestreza_rank" => $prestreza_rank,
        "inovacao_rank" => $inovacao_rank,
        "seguranca_rank" => $seguranca_rank,
    ];

    return view('home', $data);
    // return $users;
}

    public function atribuirGamificacao()
    {


    }

    /**
     * 
     * Metodo usado para puxar todas as Excelencias dos usuarios quando a modal abrir 
     */
    public function Usersexceleciasall()
    {
        $rank = home::getAllExcelenciasUsers();
        return $rank;

    }
}