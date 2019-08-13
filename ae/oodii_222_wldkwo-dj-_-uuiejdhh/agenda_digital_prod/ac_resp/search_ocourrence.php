<?php
/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 12/03/2019
 * Time: 22:59
 */

require_once "models/Usuario.class.php";
require_once "models/Pedagogico.php";
require_once "models/Ocorencia.php";

$id_resp = $_POST['id_resp'];

$result = $pdo->query("
   SELECT DISTINCT o.id_ocorrencia, o.data , o.descricao FROM responsavel r JOIN aluno a ON a.responsavel_id = r.id_responsavel JOIN aluno_has_ocorrencia aho ON a.id_aluno = aho.aluno_id JOIN ocorrencia o ON o.id_ocorrencia = aho.ocorrencia_id WHERE id_responsavel = $id_resp ORDER BY data DESC;
	");

if ($result) {
    //percorre os resultados via fetch()
    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
        $alunos = buscarAlunosOcorrencia($pdo, $row->id_ocorrencia);
        $array[] = array(
            'id_ocorrencia' => $row->id_ocorrencia,
            'descricao' => utf8_encode($row->descricao),
            'data' => formata_data_banco($row->data)['data'],
            'alunos' => $alunos
        );
    }


    if (isset($array)) {
        retornaJSON(true, "Consulta de Ocorrencias Responsavel", $array);
    } else {
        retornaJSON(false, "Não existe ocorrencias cadastradas", null);
    }
}


/**
 * Buscar alunos da ocorrência
 */

function buscarAlunosOcorrencia($pdo, $id_ocorrencia){
    $alunos = array();

    $result = $pdo->query("
           SELECT nome_usuario, id_aluno, nome_curso, numero  FROM aluno_has_ocorrencia aho 
            JOIN aluno a ON aho.aluno_id = a.id_aluno 
            JOIN usuario u ON a.usuario_id = u.id_usuario
            JOIN turma t ON t.idTurma = a.turma_id
            JOIN curso c ON t.curso_id = c.id_curso
            WHERE aho.ocorrencia_id = $id_ocorrencia
        ;");

    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
        $alunos[] = array(
            'id_aluno' => $row->id_aluno,
            'nome' => utf8_encode($row->nome_usuario),
            'curso' => utf8_encode($row->nome_curso),
            'turma' => $row->numero
        );
    }


    if(isset($alunos)){
        return  $alunos;
    }
    return $alunos;
}
