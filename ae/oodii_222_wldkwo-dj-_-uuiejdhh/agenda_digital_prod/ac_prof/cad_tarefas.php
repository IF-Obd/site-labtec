<?php 
        $titulo = $_POST['titulo'];
        $descricao =  $_POST['descricao'];
        $pontos = $_POST['pontos'];
        $id_professor =  $_POST['id_professor'];
        $id_disciplina = $_POST['id_disciplina'];
        $data_entrega = $_POST['data_entrega'];

	try{
		
        $sqlCad = "INSERT INTO `atividade` VALUES (NULL,:titulo, :descricao,:pontos, CURRENT_TIMESTAMP,:professor, :data_entrega, :disciplina)";
        $query = $pdo->prepare($sqlCad);
        $query->execute([
        	'titulo' => $titulo,
            'descricao' => $descricao,
            'pontos' => $pontos."",
            'professor' => $id_professor,
            'disciplina' => $id_disciplina,
            'data_entrega' => $data_entrega,
            ]);
        retornaJSON(true, "Tarefa cadastrada com sucesso!", null);
		
    }catch(PDOException $e) {
    	/*"Erro: ".$e->getMessage();
        trataErro($e, $erro, TRUE);
        die();*/
        retornaJSON(false, $e->getMessage(), null );
    }


 ?>