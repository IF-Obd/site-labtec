<?php 
 	require_once "models/Usuario.class.php";
 	require_once "models/Aluno.class.php";
 	

 	$id_resp = $_POST['id_resp'];
	
	$result = $pdo->query("
		SELECT u.nome_usuario, c.nome_curso, a.id_aluno, t.idTurma FROM aluno a 
		JOIN usuario u ON a.usuario_id = u.id_usuario
		JOIN turma t ON a.turma_id = t.idTurma
		JOIN curso c ON t.curso_id = c.id_curso WHERE a.responsavel_id = $id_resp;
	");

	if ($result){
	    //percorre os resultados via fetch()
	    while($row = $result->fetch(PDO::FETCH_OBJ)){
	    	$aluno = new Aluno();
	    	$aluno->nome = utf8_encode($row->nome_usuario);
	    	$aluno->curso = utf8_encode($row->nome_curso);
	    	$aluno->id_aluno = $row->id_aluno;
	    	$aluno->turma = $row->idTurma;
	        $array[] = $aluno;
	    }

	   	retornaJSON(true,"Consulta de Aluno Resp", $array);
	}



 ?>
