<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\home;
use App\Models\admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * 
     * !!!!! COMENTÁRIO PARA LEMBRAR!!!!
     * ESSA FUNÇÃO PODE SER ADAPTADA PARA FUNCIONAR APENAS COM O INSERT DE UMA NOVA QUALIFICAÇÃO NO DB, BUSCAR FAZER ISSO QUANDO FOR IMPLANTAR EM UM SERVIDOR
     */
    public function HomePage()
    {
        $excelencias_opcoes = home::GetQualidades();
        $justificativas_opcoes = home::GetJustificativas();

        // $excelencia_clicada=home::justificativasPorQualidades();

        // $excelencias = array_column($excelencias_opcoes, 'nome_coluna_desejada');

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
    
        // return $dados;

        $users = home::GetAllUsers(); 
    
        $data = [
            "excelencias_opcoes" => $excelencias_opcoes,
            "justificativas_opcoes" => $justificativas_opcoes,
            "users" => $users,
            "dados" => $dados,
        ];
    
        return view('home', $data);
    }

    public function modalAtribuir(Request $request, $id)
    {
        $dados = home::justificativasPorQualidades($id);
     
        return response()->json(['success' => true, 'dados' => $dados]);
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


    /**
     * 
     * FUNÇÃO DE TESTE USADO PARA CAPTAR O USUARIO QUE ESTÁ LOGADO ATUALMENTE
     * 
     */
    public function imprimirUser()
    {

        $user = Auth::user();
        return $user;
    
    }

    public function insertDados(Request $request)
    {
        try {

            $user = Auth::user();

            $dados = [
                'ID_QUALIDADE'       => $request->input('excelencia'),
                'ID_USUARIO' => $user->id, 
                'ID_USUARIOATRIBUIDO' => $request->input('usuario'),
                'ID_JUSTIFICATIVA'  => $request->input('justificativa'),
                'DEDICATORIA'       => $request->input('dedicatoria'),
                'DATA_ATRIBUICAO'   => now(),
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