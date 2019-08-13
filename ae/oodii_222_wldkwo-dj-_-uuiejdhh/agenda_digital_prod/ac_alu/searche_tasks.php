<?php 
	include 'models/Tarefa.php';

	if(!isset($_POST['id_disciplina'])){
        retornaJSON(false, "Informe o id da disciplina", null);
	}

	if(isset($_POST['cause'])){
		$cause = $_POST['cause'];

		if($cause == 'after'){
			$sql_cause = "AND (dataentrega >curdate() OR dataentrega = curdate())";
		}
	
		if($cause == 'before'){
			$sql_cause = "AND (dataentrega < curdate())";
		}

		if($cause == 'all'){
			$sql_cause = "";
		}
	}

	
	


    $id_disciplina = $_POST['id_disciplina'];

    $result = $pdo->query("
    	SELECT a.id_atividade, a.titulo,a.descricao, a.pontos, a.data, a.dataentrega, d.nome_disciplina, u.nome_usuario FROM atividade a
		JOIN disciplina_has_professor dhp ON a.disciplina_professor = dhp.id_disciplina_professor
		JOIN disciplina d ON  dhp.disciplina_id = d.id_disciplina
		JOIN professor p ON p.id_professor = dhp.professor_id
		JOIN usuario u ON p.usuario_id = u.id_usuario
		WHERE a.disciplina_professor = $id_disciplina  $sql_cause ORDER BY a.dataentrega DESC;"
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
 			retornaJSON(false,"Não foram encontradas tarefas para esta opção.", null);	
	    }
	   
	   	
	}

 ?>