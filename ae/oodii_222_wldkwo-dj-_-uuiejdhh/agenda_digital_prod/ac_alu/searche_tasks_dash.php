<?php 
include 'models/Tarefa.php';

	if(!isset($_POST['id_turma'])){
        retornaJSON(false, "Informe o id da turma", null);
    }

    if(isset($_POST['limit'])){
		$sql = "LIMIT 4";
    }else{
    	$sql = "";
    }

	
	if(isset($_POST['cause'])){
		$cause = $_POST['cause'];

		if($cause == 'after'){
			$sql_cause = "AND (a.dataentrega >curdate() OR a.dataentrega = curdate())";
		}
	
		if($cause == 'before'){
			$sql_cause = "AND (a.dataentrega < curdate())";
		}

		if($cause == 'all'){
			$sql_cause = "";
		}
	}else{
		$sql_cause = "";
	}

    $id_turma = $_POST['id_turma'];

    $result = $pdo->query("
    	SELECT a.id_atividade,a.titulo, a.data, a.descricao, a.pontos, a.dataentrega,  d.nome_disciplina, u.nome_usuario FROM turma t 
		JOIN disciplina_has_professor dhp ON t.idTurma = dhp.turma_idTurma
		JOIN atividade a ON dhp.id_disciplina_professor = a.disciplina_professor
		JOIN disciplina d ON d.id_disciplina = dhp.disciplina_id
		JOIN professor p ON dhp.professor_id = p.id_professor
		JOIN usuario u ON u.id_usuario = p.usuario_id
		WHERE t.idTurma = $id_turma  ORDER BY a.dataentrega desc $sql"
	);

	if ($result){
	    //percorre os resultados via fetch()
	    while($row = $result->fetch(PDO::FETCH_OBJ)){

	    	$tarefa = new Tarefa();
	    	$dados_data = formata_data_banco($row->dataentrega);
	    	$tarefa->id_atividade = $row->id_atividade;
	    	$tarefa->titulo       = utf8_encode($row->titulo);
	    	$tarefa->descricao    = utf8_encode($row->descricao);
	    	$tarefa->pontos       = $row->pontos;
	    	$tarefa->datacriacao  = formata_data_banco_string($row->data);
	    	$tarefa->data         = $dados_data['data'];
	    	$tarefa->dataentrega  = formata_data_banco_string($row->dataentrega);
	    	$tarefa->disciplina   = utf8_encode($row->nome_disciplina);
	    	$tarefa->professor    = utf8_encode($row->nome_usuario);

	        $array[] = $tarefa;
	    }

	    if(isset($array)){
	    		retornaJSON(true,"Consulta de tarefas para o aluno", $array);	
	    }else{
	    		retornaJSON(false,"Não existem tarefas cadastradas para esta turma.",null);	
	    }

	   	
	}



 ?>