<?php

	include 'models/Materia.php';

	if(!isset($_POST['idaluno'])){
            retornaJSON(false, "Informe o id do aluno", null);
    }
    $cont = false;
    if(isset($_POST['cont_m'])){
		$cont = true;            
    }
        
        $idaluno = $_POST['idaluno'];

	$result  = $pdo->query("
		SELECT dhp.id_disciplina_professor, d.nome_disciplina, u.nome_usuario FROM 
		aluno a JOIN turma t ON a.turma_id = t.idTurma
		JOIN disciplina_has_professor dhp ON dhp.turma_idTurma = t.idTurma
		JOIN disciplina d ON dhp.disciplina_id = d.id_disciplina
		JOIN professor p ON dhp.professor_id = p.id_professor
		JOIN usuario u ON p.usuario_id = u.id_usuario
		WHERE a.id_aluno = $idaluno;
	");

	if ($result){

	    //percorre os resultados via fetch()
	    while($row = $result->fetch(PDO::FETCH_OBJ)){
	    	$materia = new Materia();
	    	if($cont){
	    		$materia->qtd_tarefas = cont_tarefas_disci($row->id_disciplina_professor, $pdo);
	    	}

	    	
	    	$materia->id = $row->id_disciplina_professor;
	    	$materia->nome= utf8_encode($row->nome_disciplina);
	    	$materia->professor = utf8_encode($row->nome_usuario);
	    
	        $array[] = $materia;
	    }

	    if(isset($array)){
	    	retornaJSON(true,"Consulta de disciplina", $array);	
	    }else{
	    	retornaJSON(true,"Este aluno não possui disciplinas cadastradas", null);	
	    }

	   	
	}


	function cont_tarefas_disci($id_disciplina, $pdo){
	

		$result = $pdo->query("	SELECT COUNT(*) FROM atividade WHERE disciplina_professor = $id_disciplina;");
			if ($result){
				$ha = $result->fetch(PDO::FETCH_NUM);
				$qtd_atv = $ha[0];
			}
			return $qtd_atv;
	}