<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 01/03/2019
 * Time: 12:17 AM
 */

require_once "models/Curso.php";


	$result = $pdo->query("SELECT * FROM curso;");
	
	if ($result){
	    //percorre os resultados via fetch()
	    while($row = $result->fetch(PDO::FETCH_OBJ)){
	        $curso = new Curso();
	        $curso->nome_curso = utf8_encode($row->nome_curso);
	        $curso->sigla = $row->sigla;
	        $curso->id_curso = $row->id_curso;

            $array[] = $curso;
	    }


	    if(isset($array)){
            retornaJSON(true,"Consulta de Cursos", $array);
        }else{
            retornaJSON(false,"Não existem cursos cadastradas", null);
        }




    }
