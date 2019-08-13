<?php 

$id_prof = $_POST['id_prof'];

//SELECIONA OS DADOS PESSOAIS DO PROFESSOR

$result = $pdo->query("SELECT id_professor,nome_usuario, email, matricula, formacao FROM professor p JOIN usuario u ON p.usuario_id = u.id_usuario WHERE id_professor = $id_prof;");
	
	if ($result){
	    //percorre os resultados via fetch()
	   $row =  $result->fetch(PDO::FETCH_OBJ);
	    $array[] = array(
	    	'id_professor' => $row->id_professor,
			'nome_usuario' => utf8_encode($row->nome_usuario),
			'email' => $row->email,
			'matricula' => $row->matricula,
			'formacao'  => utf8_encode($row->formacao),
			'quantidade_materias' => qtdMaterias($id_prof, $pdo),
			'materias' => buscaMaterias($id_prof, $pdo),
			'quantidade_atividades' => qtdAtividades($id_prof, $pdo),
			'atividades_prof' => buscaAtividades($id_prof, $pdo)
		);
	    
	    if(isset($array)){
            retornaJSON(true,"Consulta de Professor", $array);
        }else{
            retornaJSON(false,"Não existe professor cadastradas", null);
        }

    }


function qtdMaterias($id_prof, $pdo){
	$result = $pdo->query("SELECT COUNT(*) FROM disciplina_has_professor WHERE professor_id = $id_prof");
	if($result){
		return $result->fetch()[0];
	}
	return 0;
}

function buscaMaterias($id_prof, $pdo){
	include "models/Materia.php";
	$result = $pdo->query("SELECT d.nome_disciplina, c.nome_curso,c.sigla, dhp.id_disciplina_professor,t.numero FROM disciplina_has_professor dhp
		JOIN disciplina d ON d.id_disciplina = dhp.disciplina_id
		JOIN curso c ON d.curso_id = c.id_curso
		JOIN turma t ON dhp.turma_idTurma =  t.idTurma WHERE dhp.professor_id = $id_prof ORDER BY nome_disciplina ASC;");
	
	if ($result){
	    //percorre os resultados via fetch()
	    while($row = $result->fetch(PDO::FETCH_OBJ)){
	    	$materia = new Materia();
	    	$materia->id = $row->id_disciplina_professor;
	    	$materia->nome= utf8_encode($row->nome_disciplina);
	    	$materia->nome_curso = utf8_encode($row->nome_curso);
	    	$materia->numero_turma = $row->numero;
	    	$materia->sigla_curso = $row->sigla;
	    	$materia->qtd_tarefas = countAtividadesDaMateria($pdo, $row->id_disciplina_professor);
	        $array[] = $materia;
	    }

	    if(isset($array)){
            return $array;
        }else{
            return array();
        }
    }
}

function qtdAtividades($id_prof, $pdo){
	$result = $pdo->query("SELECT COUNT(*) FROM atividade WHERE professor_id = $id_prof");
	if($result){
		return $result->fetch()[0];
	}
	return 0;
}

function buscaAtividades($id_prof, $pdo){
include 'models/Tarefa.php';
	$result = $pdo->query("SELECT c.nome_curso, t.numero, a.id_atividade, a.titulo,a.descricao, a.pontos, a.data, a.dataentrega, d.nome_disciplina FROM atividade a 
		JOIN disciplina_has_professor dhp ON a.disciplina_professor = dhp.id_disciplina_professor
		JOIN disciplina d ON  dhp.disciplina_id = d.id_disciplina
		JOIN turma t ON t.idTurma = dhp.turma_idTurma
		JOIN curso c ON t.curso_id = c.id_curso
		WHERE a.professor_id = $id_prof ORDER BY a.data DESC"
	);
		    $array = array();
	if ($result){

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
	    	$tarefa->dataentrega  = $dados_data['data']. " às ".$dados_data['hora'];
	    	$tarefa->disciplina   = utf8_encode($row->nome_disciplina);
	    	$tarefa->curso        = utf8_encode($row->nome_curso);
	    	$tarefa->turma        = $row->numero;
	        $array[] = $tarefa;
	    }
	}    

	   	return $array;
}

function countAtividadesDaMateria($pdo, $id_disc){
	$result = $pdo->query("SELECT COUNT(*) AS c FROM atividade WHERE atividade.disciplina_professor = $id_disc");
	if($result){
		return $result->fetch()['c'];
	}
	return 0;
}