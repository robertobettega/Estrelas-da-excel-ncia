<?php

namespace App\Http\Controllers;

use App\Models\home;
use App\Models\admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function HomePage()
    {
        $excelencias_opcoes = home::GetQualidades();
    
        $excelencias = [
            'hospitalidade' => 1,
            'prestreza' => 2,
            'inovacao' => 3,
            'seguranca' => 4,
        ];
    
        $dados = [];
        foreach ($excelencias as $excelencia => $id) {
            $dados[$excelencia] = Home::getAllExcelenciasUsers($id);
        }
    
        $users = home::GetAllUsers(); 
    
        $data = [
            "excelencias_opcoes" => $excelencias_opcoes,
            "users" => $users,
            "dados" => $dados,
        ];
    
        return view('home', $data);
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

    public function insertDados(Request $request)
    {
        try {

            $dados = [
                'ID_QUALIDADE'       => $request->input('excelencia'),
                'USUARIO'            => $request->input('usuario'),
                'JUSTIFICATIVA'      => $request->input('justificativa'),
                'DEDICATORIA'        => $request->input('dedicatoria'),
                'DATA_ATRIBUICAO'    => now(),
            ];
    
            Home::insertPin($dados);
    
            return response()->json(['success' => true, 'message' => 'Dados inseridos com sucesso!']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    /**
     * 
     * REALIZANDO UM TESTE PARA EVITAR FICAR CRIANDO HTML REPETITIVOS
     */
    public function renderCardExcelencias()
    {
        // ARRAY PARA OS ID'S DENTRO DO BANCO DAS QUALIDADES NO BANCO
        $excelencias = [
            'hospitalidade' => 1,
            'prestreza' => 2,
            'inovacao' => 3,
            'seguranca' => 4,
        ];
    
        $dados = [];

        // FOREACH QUE PEGA OS ID´S DE CADA VALOR DENTRO DO ARRAY E EXECUTA A FUNÇÃO DO CONTROLLER
        foreach ($excelencias as $excelencia => $id) {
            $dados[$excelencia] = Home::getAllExcelenciasUsers($id);
        }
    
        // return view('assets.cards-contagemexcelencias', ['dados' => $dados])->render();
        return $dados;

    }
    
}