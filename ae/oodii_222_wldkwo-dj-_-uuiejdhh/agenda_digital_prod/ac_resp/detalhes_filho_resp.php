<?php 

	include "models/Alunos_Resp.php";

	$id_aluno = $_POST['id_aluno'];

	$result = $pdo->query("SELECT * FROM aluno a 
		JOIN usuario u ON a.usuario_id = u.id_usuario
		JOIN turma t ON a.turma_id = t.idTurma 
		JOIN curso c ON t.curso_id = c.id_curso WHERE a.id_aluno = $id_aluno;
	");

	if ($result){
	    //percorre os resultados via fetch()
	    while($row = $result->fetch(PDO::FETCH_OBJ)){
	    	$aluno = new Alunos_Resp();
	    	$aluno->id_aluno = $row->id_aluno;
	    	$aluno->nome = utf8_encode($row->nome_usuario);
	    	$aluno->email = $row->email;
	    	$aluno->matricula = $row->matricula;
	    	$aluno->curso =utf8_encode($row->nome_curso);
	    	$aluno->turma = $row->numero;
	        $array[] = $aluno;
	    }

	   	retornaJSON(true,"Descrição do Aluno", $array);
	}
	
 ?>
