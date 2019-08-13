<?php 
//BUSCAR CONVERSAS
$id_usuario = $_POST['id_usuario'];

//retorna quantidade de conversas
if(isset($_POST['count'])){

}

//se não informar count executa isso aqui
$result = $pdo->query("SELECT * FROM conversas WHERE id_usuario1 = $id_usuario OR id_usuario2 = $id_usuario");

$array = array();
	
if ($result){
    //percorre os resultados via fetch()
    while($row = $result->fetch(PDO::FETCH_OBJ)){
        $array[] = 
        array(
        	'id_conversa' => $row->id_conversa,
    		'id_usuario1' => $row->id_usuario1,
    		'id_usuario2' => $row->id_usuario2,
    		'ultima_mensagem' => buscarUltimaMensagem($pdo, $row->id_conversa),
    		'outro_usuario' => buscaDadosUsuario_D($pdo, ($row->id_usuario1 == $id_usuario)?$row->id_usuario2:$row->id_usuario1)
    	);
    }
}

retornaJSON(true,"Busca de conversas", $array);

/**
 * Busca os dados do outro usuário que não é o usuário solicitante
 */
function buscaDadosUsuario_D($pdo, $id_usuario){
	$result = $pdo->query("SELECT * FROM usuario WHERE id_usuario = $id_usuario");
	$array = array();

	if($result){
		while ($row = $result->fetch(PDO::FETCH_OBJ)) {
			$array = array(
				'nome_usuario' => utf8_encode($row->nome_usuario),
				'email' => $row->email,
				'tipo_usuario_id' => $row->tipoUsuario_id
			);
		}
	}
	return $array;
}


function buscarUltimaMensagem($pdo, $id_conversa){
	$result = $pdo->query("
		SELECT * FROM mensagens WHERE id_conversa = $id_conversa AND id_mensagem = (SELECT MAX(id_mensagem) FROM mensagens WHERE id_conversa = $id_conversa)
		");
	$array = array();

	if($result){
		while ($row = $result->fetch(PDO::FETCH_OBJ)) {
			$array = array(
				'mensagem' => utf8_encode($row->mensagem),
				'envio' => formata_data_banco_string($row->data_envio),
				'entrega' => formata_data_banco_string($row->data_entrega)
			);
		}
	}
	return $array;
}