<?php
/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 04/03/2019
 * Time: 11:59
 */

$datacriacao = $_POST['datacriacao'];
$descricao = $_POST['descricao'];
$id_pedagogico = $_POST['id_ped'];
$alunos_oc = $_POST['alunos_oc'];



try {
    /*
     * Inserindo ocorrencia
     * */

    $sqlCad = "INSERT INTO ocorrencia values (null, :descricao , :datacriacao ,DEFAULT, :id_pedagogo, default, null);";
    $query = $pdo->prepare($sqlCad);

    $pdo->beginTransaction();
    $query->execute([
        'descricao' => $descricao,
        'datacriacao' => $datacriacao,
        'id_pedagogo' => $id_pedagogico,
    ]);

    $id_ocorrencia = $pdo->lastInsertId();


    $pdo->commit();



    /*
     * Inserindo Alunos da ocorrência
     * */

    $id_alunos = explode(",", $alunos_oc);

    foreach ($id_alunos as $id_al) {
        $sqlCad = "INSERT INTO aluno_has_ocorrencia values (:id_aluno, :id_ocorrencia);";
        $query = $pdo->prepare($sqlCad);
        $query->execute([
            'id_aluno' => $id_al,
            'id_ocorrencia' => $id_ocorrencia,
        ]);
    }

    retornaJSON(true, "Ocorrência cadastrada com sucesso!", $id_ocorrencia);

} catch (PDOException $e) {
    retornaJSON(false, $e->getMessage(), null);
}



