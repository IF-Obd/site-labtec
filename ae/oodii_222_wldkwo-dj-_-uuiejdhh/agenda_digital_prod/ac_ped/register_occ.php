<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 01/03/2019
 * Time: 12:17 AM
 */

	
	$tipo_cad = $_POST['tipo'];

	if($tipo_cad == 1){
		$descricao     = $_POST['descricao'];
		$data          = $_POST['data'];
		$id_pedagogico = $_POST['id_pedagogico'];	

		try{
		
        	$sqlCad = "INSERT INTO ocorrencia VALUES (DEFAULT, :descricao, :data,CURRENT_TIMESTAMP, :id_pedagogico)";

        	$query = $pdo->prepare($sqlCad);
        	$query->execute([
        		'descricao' => $descricao,
            	'data' => $data,
            	'id_pedagogico' => $id_pedagogico,
            ]);
        retornaJSON(true, "Ocorrencia Cadastrada com sucesso!", null);
		
	    }catch(PDOException $e) {
        	retornaJSON(false, $e->getMessage(), null );
    	}



	}else if($tipo_cad ==2){
		$id_aluno = $_POST['id_aluno'];
		$id_ocorrencia = $_POST['id_ocorrencia'];


		try{
		
        	$sqlCad = "INSERT INTO aluno_has_ocorrencia VALUES (:id_aluno, :id_ocorrencia);";

        	$query = $pdo->prepare($sqlCad);
        	$query->execute([
        		'id_aluno' => $id_aluno,
            	'id_ocorrencia' => $id_ocorrencia,
            ]);
        	
        	retornaJSON(true, "Ocorrencia de aluno cadastrada com sucesso!", null);

	    }catch(PDOException $e) {
        	retornaJSON(false, $e->getMessage(), null );
    	}
	}

 ?>