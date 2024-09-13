<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function HomePage()
    {
        // // PEGANDO AS EXCELENCIAS
        $excelencias_opcoes = home::GetQualidades();

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
            "users" => $users,
            "excelencias_opcoes" => $excelencias_opcoes,
            "hospitalidade_rank" => $hospitalidade_rank,
            "prestreza_rank" => $prestreza_rank,
            "inovacao_rank" => $inovacao_rank,
            "seguranca_rank" => $seguranca_rank,

            //Informações dos cards da caixa de excelencia para renderizar sem precisar repetir 4 vezes na home
            'excelencias' => $excelencias_opcoes,
        ];

        return view('minhasestatisticas', $data);
        // return $users;
    }

    public function getMouth()
    {


    }
 
    public function getTablePins()
    {



    }
}
