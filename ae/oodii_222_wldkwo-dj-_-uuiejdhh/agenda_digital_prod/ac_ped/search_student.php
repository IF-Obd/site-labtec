<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 01/03/2019
 * Time: 12:17 AM
 */

require_once "models/Usuario.class.php";

require_once "models/Aluno.class.php";


	$result = $pdo->query("
	SELECT  a.id_aluno, u.nome_usuario, t.numero, c.nome_curso FROM aluno a JOIN usuario u ON a.usuario_id = u.id_usuario
	JOIN turma t ON a.turma_id = t.idTurma
	JOIN curso c ON t.curso_id = c.id_curso;
	");
	
	if ($result){
	    //percorre os resultados via fetch()
	    while($row = $result->fetch(PDO::FETCH_OBJ)){
	        $aluno = new Aluno();
	        $aluno->setIdAluno($row->id_aluno);
	        $aluno->setNome(utf8_encode($row->nome_usuario));
            $aluno->setTurma($row->numero);
            $aluno->setCurso(utf8_encode($row->nome_curso));
            $array[] = $aluno;
	    }


	    if(isset($array)){
            retornaJSON(true,"Consulta de Alunos", $array);
        }else{
            retornaJSON(false,"Não existe disciplinas cadastradas", null);
        }




    }
