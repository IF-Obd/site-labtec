<?php 
include 'models/Tarefa.php';

 $id_atividade = $_POST['id_atividade'];

    $result = $pdo->query("
	    SELECT a.titulo, a.descricao, a.`data`,a.pontos, a.dataentrega, c.nome_curso, d.nome_disciplina, t.numero  FROM atividade a
		JOIN disciplina_has_professor dhp ON a.disciplina_professor = dhp.id_disciplina_professor
		JOIN disciplina d ON dhp.disciplina_id = d.id_disciplina
		JOIN curso c ON  d.curso_id = c.id_curso
		JOIN turma t ON dhp.turma_idTurma = t.idTurma
		WHERE a.id_atividade = $id_atividade;"
	);

	if ($result){
	    //percorre os resultados via fetch()
	    $row = $result->fetch(PDO::FETCH_OBJ);

	    	$tarefa = new Tarefa();
	    	$dados_data = formata_data_banco($row->data);
	    	//$tarefa->id_atividade = $row->id_atividade;
	    	$tarefa->titulo       = utf8_encode($row->titulo);
	    	$tarefa->descricao    = utf8_encode($row->descricao);
	    	$tarefa->pontos       = $row->pontos;
	    	$tarefa->datacriacao  = formata_data_banco_string($row->data);
	    	$tarefa->data         = $dados_data['data'];
	    	$tarefa->hora         = $dados_data['hora'];
	    	$tarefa->dataentrega  = formata_data_banco_string($row->dataentrega);
	    	$tarefa->disciplina   = utf8_encode($row->nome_disciplina);
	    	$tarefa->curso        = utf8_encode($row->nome_curso);
	    	$tarefa->turma        = $row->numero;
	        $array = $tarefa;
	    if(isset($array)){
	    	retornaJSON(true,"Consulta de tarefas", $array);	
	    }else{
 			retornaJSON(false,"Não foram encontradas tarefas para esta opção.", null);	
	    }
	   
	   	
	}
