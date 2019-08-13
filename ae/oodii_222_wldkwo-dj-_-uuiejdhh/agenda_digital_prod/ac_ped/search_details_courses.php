<?php 

$id_curso = $_POST['id_curso'];


$result1 =$pdo->query("SELECT * FROM curso WHERE id_curso = $id_curso");
if($result1){
	$row = $result1->fetch(PDO::FETCH_ASSOC);
	$adicionais = array(
		'nome_curso' => utf8_encode($row['nome_curso']),
		'id_curso' => $row['id_curso'],
		'sigla'    => utf8_encode($row['sigla']),
		'disciplinas' => buscaDisciplinasCurso($pdo, $id_curso)
	);

}


$result = $pdo->query("
	SELECT * FROM turma t JOIN curso c ON t.curso_id = c.id_curso 
	WHERE id_curso = $id_curso");


if($result){
	$array = array();
	while($row = $result->fetch(PDO::FETCH_ASSOC)){      
        $array[] = array(
            'id_turma' => $row['idTurma'],	
            'numero'     => $row['numero'],
            //'id_curso'  => $row['id_curso'],
            //'nome_curso'  => utf8_encode($row['nome_curso']),
            'sigla'  => utf8_encode($row['sigla']),
        );
    }

    retornaJSON(true, "Consulta de detalhes do curso", $array, $adicionais);
}



function buscaDisciplinasCurso($pdo, $id_curso){
	$array = array();
	$result1 =$pdo->query("SELECT * FROM disciplina
	WHERE curso_id = $id_curso ORDER BY nome_disciplina");

	if($result1){
		while ($row = $result1->fetch(PDO::FETCH_ASSOC)) {
			$array[] = array(
				'id_disciplina' => $row['id_disciplina'],
				'nome_disciplina' => utf8_encode($row['nome_disciplina']),
			);
		}
	}
	
	return $array;
}



