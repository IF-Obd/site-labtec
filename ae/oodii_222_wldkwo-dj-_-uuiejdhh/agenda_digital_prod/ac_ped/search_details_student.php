<?php 
$id_student = $_POST['id_al'];

$result = $pdo->query("SELECT u.nome_usuario as n_a, u.email, us.nome_usuario as n_r, a.matricula, c.nome_curso, t.numero FROM aluno a JOIN usuario u ON u.id_usuario = a.usuario_id
JOIN responsavel r ON r.id_responsavel = a.responsavel_id
JOIN usuario us ON us.id_usuario = r.usuario_id
JOIN turma t ON t.idTurma = a.turma_id
JOIN curso c ON c.id_curso = t.curso_id WHERE a.id_aluno = $id_student");

if($result){
	$row =  $result->fetch(PDO::FETCH_ASSOC);
    $array = array(
       'n_a' => utf8_encode($row['n_a']),
        'email' => $row['email'],
        'n_p' => utf8_encode($row['n_r']),
        'matricula' => utf8_encode($row['matricula']),
        'nome_curso' => utf8_encode($row['nome_curso']),
        'turma'=> $row['numero'],
        'qtd_occ' => getCountOcorrencias($pdo,$id_student),
        'qtd_tarefas' => getCountTarefas($pdo, $id_student),
        'ocorrencias' => buscaOcorrencias($pdo, $id_student),
        'tarefas'    => buscarTarefas($pdo, $id_student)

    );

    if(isset($row)){
        retornaJSON(true,"Consulta de detalhes do aluno", $array);
    }else{
        retornaJSON(false,"O aluno não foi encontrado", array());
    }
}


function buscaOcorrencias($pdo, $id_aluno){

    $result = $pdo->query("
    	SELECT * FROM aluno_has_ocorrencia ao JOIN ocorrencia o
		ON o.id_ocorrencia = ao.ocorrencia_id WHERE ao.aluno_id = $id_aluno AND o.status_oc = 1
		ORDER BY data DESC"
	);

    if ($result){
        //percorre os resultados via fetch()
        while($row = $result->fetch(PDO::FETCH_OBJ)){
            $array[] = array(
                'id_ocorrencia' => $row->id_ocorrencia,
                'descricao'     => utf8_encode($row->descricao),
                'data'          => formata_data_banco_string($row->data),
                'data_bd'          => $row->data,
            );
        }

        if(isset($array)){
            return $array;
        }else{
            return array();
        }
    }else{
        retornaJSON(false,"Ocorreu algum erro na pesquisa das informações", null);
    }
}

function buscarTarefas($pdo, $id_aluno){
	$result = $pdo->query("
    	SELECT atv.id_atividade, atv.descricao, atv.dataentrega, d.nome_disciplina  FROM aluno a 
    	JOIN disciplina_has_professor dhp ON dhp.turma_idTurma = a.turma_id 
    	JOIN atividade atv ON atv.disciplina_professor = dhp.id_disciplina_professor
		JOIN disciplina d ON dhp.disciplina_id = d.id_disciplina
		WHERE a.id_aluno = $id_aluno"
	);

	if($result){
		while ($row = $result->fetch(PDO::FETCH_OBJ)) {
			$array[] = array(
				'id_atv' => $row->id_atividade,
				'descricao' => utf8_encode($row->descricao),
				'dataentrega' => formata_data_banco_string($row->dataentrega),
				'disciplina' => utf8_encode($row->nome_disciplina)
			);
		}

		if(isset($array)){
			return $array;
		}
	}

	return array();
}

function getCountOcorrencias($pdo, $id_aluno){
	$result = $pdo->query("SELECT COUNT(*) AS c FROM aluno_has_ocorrencia aho JOIN ocorrencia o ON aho.ocorrencia_id = o.id_ocorrencia WHERE aluno_id = $id_aluno AND o.status_oc = 1");
	if($result){
		return $result->fetch()['c'];
	}
	return 0;
}

function getCountTarefas($pdo, $id_aluno){
	$result = $pdo->query("SELECT COUNT(*) AS c  FROM aluno a JOIN disciplina_has_professor dhp 
		ON dhp.turma_idTurma = a.turma_id JOIN atividade atv
		ON atv.disciplina_professor = dhp.id_disciplina_professor
		JOIN disciplina d ON dhp.disciplina_id = d.id_disciplina
		WHERE a.id_aluno = $id_aluno
	");

	if($result){
		return $result->fetch()['c'];
	}
	return 0;
}
