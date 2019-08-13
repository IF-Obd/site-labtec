<?php 
        $id_tarefa = $_POST['id_tarefa'];

	try{
		
        $sqlCad = "DELETE FROM `atividade` WHERE (`id_atividade` = :id_tarefa);";
        $query = $pdo->prepare($sqlCad);
        $query->execute(['id_tarefa' => $id_tarefa,]);
        retornaJSON(true, "Tarefa apagada com sucesso!", null);

    }catch(PDOException $e) {
    	/*"Erro: ".$e->getMessage();
        trataErro($e, $erro, TRUE);
        die();*/
        retornaJSON(false, $e->getMessage(), null );
    }


 ?>