<?php
/*
 * Função responsável por retornar os dados JSON
 */
function retornaJSON($success = false, $message = null, $dados = array(), $adicionais = array()) {
    header('Content-Type: application/json; charset=utf8');
       echo json_encode(
        array(
            'success' => $success,
            'message' => $message,
            'dados' => $dados,
            'adicionais' => $adicionais
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
    );
    exit;
}


if($_SERVER['REQUEST_METHOD'] !== "POST"){
    retornaJSON(true, "Método de requisição não aceito",null);
}

require_once "util/config.php";
require_once 'util/helper.php';

if (!isset($_POST['acao'])) {
    retornaJSON(false, "Informe a acao desejada", null);
} else {
    $acao = $_POST['acao'];
}

/**
 * Switch que gerencia todas as ações desejadas e realiza o include de acordo com o número da ação
 */
switch ($acao) {
    /**
     * Ações úteis a todos os usuários
     */
    case 1:
        if (isset($_POST['login']) and isset($_POST['senha'])) {
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            include "util/checks_input.php";
        } else {
            retornaJSON(false, "Informe todos os dados necessários", null);
        }
    break;

    case 1.1: include "util/register_user.php"; break;

    /**
     * Ações para o app do aluno
     */
    case 2: include 'ac_alu/search_discipine.php'; break;       //CONSULTAR DISCIPLINAS
    case 2.1: include 'ac_alu/search_discipine.php'; break;     //CONSULTAR DISCIPLINAS
    case 3: include "ac_alu/searche_tasks.php"; break;          //CONSULTAR TAREFAS
    case 3.1: include "ac_alu/searche_tasks_dash.php"; break;   //CONSULTA TAREFAS PARA A DASHBOARD
    case 3.2: include "ac_alu/search_documents.php"; break;     //CONSULTA DOCUMENTOS PDF DO ALUNO

    /**
     * Ações app professor
     */
    case 4: include "ac_prof/cad_tarefas.php"; break;           //CADASTRAR TAREFAS
    case 4.1: include "ac_prof/update_task.php"; break;         //ATUALIZAR TAREFAS
    case 4.2: include "ac_prof/delete_task.php"; break;         //APAGAR TAREFA
    case 5: include 'ac_prof/buscar_disc_prof.php'; break;      //BUSCAR DISCIPLINAS DO PROFESSOR
    case 6: include 'ac_prof/buscar_tarefas_prof.php'; break;   //BUSCAR TAREFAS CADASTRADAS PELO PROFESSOR

    /**
     * Ações app responsavel
     */
    case 7: include 'ac_resp/busca_filho_resp.php'; break;//BUSCA FILHO RESPONSAVEL
    case 8: include 'ac_resp/detalhes_filho_resp.php'; break;//BUSCA DETALHES DO FILHO DO RESPONSÁVEL SELECIONADO
    case 8.1: include 'ac_resp/search_ocourrence.php'; break; //BUSCA TODAS AS OCORRÊNCIAS DOS FILHOS DO RESPONSÁVEL

    /*
     * Ações app pedagogico
     * */

    case 9: include 'ac_ped/register_occ.php';break; //CADASTRA OCORRENCIA

    case 10: include 'ac_ped/search_data_ped.php';break; //BUSCA DADOS TELA INICIAL PEDAGOGO

    case 11: include 'ac_ped/search_student.php';break; //BUSCA LISTAGEM DE ALUNOS

    case 12: include 'ac_ped/search_courses.php'; break; //BUSCA CURSOS

    case 13: include 'ac_ped/search_teachers.php'; break; //BUSCA professores

    case 14: include 'ac_ped/search_ocourrence.php';break; //BUSCA TODAS AS OCORRÊNCIAS

    case 15: include 'ac_ped/cad_ocourrence.php'; break; //CADASTRAR OCORRENCIA

    case 16: include 'ac_ped/edit_ocourrence.php'; break; //EDITAR A TAREFA

    case 17: include 'ac_ped/tofile_ocourrence.php'; break; //ARQUIVAR OCORRÊNCIA

    case 18: include 'ac_ped/search_details_teachers.php'; break;

    case 19: include 'ac_ped/search_details_discipline.php'; break;

    case 20: include 'ac_ped/search_details_student.php'; break;

    case 20.1: include 'ac_ped/search_details_courses.php'; break;

    /*
     * Ações últeis a todos
     */
    
    case 21: include 'action_all/search_task.php'; break;

    case 22: include 'action_all/getContatos.php'; break;

    case 23: include 'action_all/getConversas.php'; break;

    case 24: include 'action_all/getMessages.php';break;

    case 25: include 'action_all/setMessages.php'; break;

    default:
        retornaJSON(false, "Método de requisição não aceito", null);
    break;
}
