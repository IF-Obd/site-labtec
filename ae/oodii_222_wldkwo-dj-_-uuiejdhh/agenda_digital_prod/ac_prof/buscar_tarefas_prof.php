<?php 
	include 'models/Tarefa.php';
	$id_professor = $_POST['id_professor'];

	$result = $pdo->query("SELECT c.nome_curso, t.numero, a.id_atividade, a.titulo,a.descricao, a.pontos, a.data, a.dataentrega, d.nome_disciplina FROM atividade a 
		JOIN disciplina_has_professor dhp ON a.disciplina_professor = dhp.id_disciplina_professor
		JOIN disciplina d ON  dhp.disciplina_id = d.id_disciplina
		JOIN turma t ON t.idTurma = dhp.turma_idTurma
		JOIN curso c ON t.curso_id = c.id_curso
		WHERE a.professor_id = $id_professor ORDER BY a.data DESC"
	);





	if ($result){
	    $array = array();
	    //percorre os resultados via fetch()
	    while($row = $result->fetch(PDO::FETCH_OBJ)){

	    	$dados_data = formata_data_banco($row->data);
	    	$tarefa = new Tarefa();
	    	$tarefa->id_atividade = $row->id_atividade;
	    	$tarefa->titulo       = utf8_encode($row->titulo);
	    	$tarefa->descricao    = utf8_encode($row->descricao);
	    	$tarefa->pontos       = $row->pontos;
	    	$tarefa->data         = $dados_data['data'];
	    	$tarefa->hora         = $dados_data['hora'];
	    	$dados_data 		  = formata_data_banco($row->dataentrega);
	    	$tarefa->dataentrega_st  = $dados_data['data']. " às ".$dados_data['hora'];
	    	$tarefa->dataentrega_bd  = $row->dataentrega;
	    	$tarefa->disciplina   = utf8_encode($row->nome_disciplina);
	    	$tarefa->curso        = utf8_encode($row->nome_curso);
	    	$tarefa->turma        = $row->numero;
	        $array[] = $tarefa;


	    }

	    if(empty($array)){
            retornaJSON(false, "Não existem trefas cadastradas para este id", null);
        }
	   	retornaJSON(true,"Consulta de tarefas cadastras pelo Porfessor", $array);

	}else{
        echo "rest";
    }

 ?>