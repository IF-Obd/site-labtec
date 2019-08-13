<?php 
        $id_tarefa = $_POST['id_tarefa'];
        $titulo = $_POST['titulo'];
        $descricao =  $_POST['descricao'];
        $pontos = $_POST['pontos'];
        $data_entrega = $_POST['data_entrega'];

	try{
		


        $sqlCad = "UPDATE `atividade` SET `titulo` = :titulo, `descricao` = :descricao, `pontos` = :pontos, `dataentrega` = :data_entrega WHERE (`id_atividade` = :id_tarefa);";
        $query = $pdo->prepare($sqlCad);
        $query->execute([
            'id_tarefa'=> $id_tarefa,
        	'titulo' => $titulo,
            'descricao' => $descricao,
            'pontos' => $pontos."",
            'data_entrega' => $data_entrega,
            ]);
        retornaJSON(true, "Tarefa atualizada com sucesso!", null);
		
    }catch(PDOException $e) {
    	/*"Erro: ".$e->getMessage();
        trataErro($e, $erro, TRUE);
        die();*/
        retornaJSON(false, $e->getMessage(), null );
    }


 ?>