<?php

namespace App\Http\Controllers;

use App\Models\home;
use App\Models\admin;
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

        //Informações dos cards da caixa de excelencia para renderizar sem precisar repetir 4 vezes na home
        'excelencias' => $excelencias_opcoes,
    ];

    return view('home', $data);
    // return $users;
}

public function atribuirGamificacao()
    {
        $campo1 = 1;
        $campo2 = 2;
        $campo3 = 3;

        $dados = [
            'ATRIBUTOS_idATRIBUTOS' => $campo1,
            'USUARIO'               => 'user123',
            'JUSTIFICATIVA'         => 'Motivo da atribuição',
            'DEDICATORIA'           => 'Dedicatória especial',
            'DATA_ATRIBUICAO'       => now(),  // Insere a data atual
        ];

        // $insert = Home::insertPin($dados);
        // return $insert ? 'Dados inseridos com sucesso!' : 'Erro ao inserir os dados';
        
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

    public function insertDados($usuario, $excelencia)
    {
        
        // var_dump("Usuário: $usuario, Excelência: $excelencia");
        $dados = [
            'ATRIBUTOS_idATRIBUTOS' => $excelencia,
            'USUARIO'               => $usuario,
            'JUSTIFICATIVA'         => 'Motivo da atribuição',
            'DEDICATORIA'           => 'Dedicatória especial',
            'DATA_ATRIBUICAO'       => now(),  // Insere a data atual
        ];

        $insert = Home::insertPin($dados);
        // return $insert ? 'Dados inseridos com sucesso!' : 'Erro ao inserir os dados';
        
    }


    /**
     * 
     * REALIZANDO UM TESTE PARA EVITAR FICAR CRIANDO HTML REPETITIVOS
     */
    public function renderCardExcelencias()
    {

        $excelencia = Home::GetQualidades();

        $data = [
            'excelencias' => $excelencia
        ];

        return view('assets/cards-excelencia', $data)->render();
    }
}