<?php

$id_disiciplina = $_POST['id_disciplina'];

$result = $pdo->query("SELECT d.nome_disciplina, c.nome_curso, t.numero, u.nome_usuario  FROM disciplina_has_professor dhp JOIN professor p ON p.id_professor = dhp.professor_id
JOIN usuario u ON u.id_usuario = p.usuario_id
JOIN turma t ON t.idTurma = dhp.turma_idTurma
JOIN curso c ON c.id_curso = t.curso_id
JOIN disciplina d ON d.id_disciplina = dhp.disciplina_id WHERE dhp.id_disciplina_professor = $id_disiciplina");

if ($result){
    //percorre os resultados via fetch()
    $row =  $result->fetch(PDO::FETCH_ASSOC);

    $array = array(
        "disciplina" => utf8_encode($row['nome_disciplina']),
        "curso"      => utf8_encode($row['nome_curso']),
        "turma"      => utf8_encode($row['numero']),
        "professor" => utf8_encode($row['nome_usuario']),
        "qtd_tarefas" => buscarTotalTarefasCad($pdo, $id_disiciplina)

    );

    if(isset($row)){
        retornaJSON(true,"Consulta de detalhes da disciplina", $array);
    }else{
        retornaJSON(false,"A disciplina informada não existe", array());
    }

}

function buscarTotalTarefasCad($pdo, $id_disc){

    $result = $pdo->query("SELECT COUNT(*) AS cont FROM atividade a JOIN disciplina_has_professor dhp ON dhp.id_disciplina_professor = a.disciplina_professor
WHERE id_disciplina_professor = $id_disc");

    $row = $result->fetch(PDO::FETCH_ASSOC);

    return $row['cont'];


}