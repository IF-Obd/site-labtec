<?php 
	include "models/Materia.php";
	$id_professor = $_POST['id_professor'];
	$result = $pdo->query("SELECT d.nome_disciplina, c.nome_curso,c.sigla, dhp.id_disciplina_professor,t.numero FROM disciplina_has_professor dhp
		JOIN disciplina d ON d.id_disciplina = dhp.disciplina_id
		JOIN curso c ON d.curso_id = c.id_curso
		JOIN turma t ON dhp.turma_idTurma =  t.idTurma WHERE dhp.professor_id = $id_professor ORDER BY nome_disciplina ASC;");
	
	if ($result){
	    //percorre os resultados via fetch()
	    while($row = $result->fetch(PDO::FETCH_OBJ)){
	    	$materia = new Materia();
	    	$materia->id = $row->id_disciplina_professor;
	    	$materia->nome= utf8_encode($row->nome_disciplina);
	    	$materia->nome_curso = utf8_encode($row->nome_curso);
	    	$materia->numero_turma = $row->numero;
	    	$materia->sigla_curso = $row->sigla;
	        $array[] = $materia;
	    }

	    if(isset($array)){
            retornaJSON(true,"Consulta de disciplinas do Porfessor", $array);
        }else{
            retornaJSON(false,"Não existe disciplinas cadastradas", null);
        }
    }
	
 ?>