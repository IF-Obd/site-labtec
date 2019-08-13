<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 01/03/2019
 * Time: 12:17 AM
 */

require_once "models/Usuario.class.php";

require_once "models/Professor.php";


	$result = $pdo->query("
	SELECT p.id_professor, u.nome_usuario, p.formacao FROM professor p JOIN usuario u ON p.usuario_id = u.id_usuario;
	");
	
	if ($result){
	    //percorre os resultados via fetch()
	    while($row = $result->fetch(PDO::FETCH_OBJ)){
            $array[] = array('id_professor' => $row->id_professor,
        					'nome_usuario' => utf8_encode($row->nome_usuario),
        					'formacao' => utf8_encode($row->formacao));

	    }


	    if(isset($array)){
            retornaJSON(true,"Consulta de Professor", $array);
        }else{
            retornaJSON(false,"Não existe professor cadastradas", null);
        }




    }
