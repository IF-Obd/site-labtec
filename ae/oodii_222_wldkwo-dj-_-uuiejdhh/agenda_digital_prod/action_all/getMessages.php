<?php 

//BUSCAR MENSAGENS
$id_conversa = $_POST['id_conversa'];

$result = $pdo->query("SELECT * FROM mensagens WHERE id_conversa = $id_conversa ORDER BY id_mensagem ASC");
$array = array();
	
if ($result){
    //percorre os resultados via fetch()
    while($row = $result->fetch(PDO::FETCH_OBJ)){
        $array[] = 
        array(
        	'id_mensagem' => $row->id_mensagem,
            'id_usuario' => $row->id_usuario,
    		'mensagem' => utf8_encode($row->mensagem),
            'data_envio' => formata_data_banco_string($row->data_envio),
            'data_entrega'=> formata_data_banco_string($row->data_entrega)
    	);
    }
}
retornaJSON(true,"Busca de mensagens", $array);