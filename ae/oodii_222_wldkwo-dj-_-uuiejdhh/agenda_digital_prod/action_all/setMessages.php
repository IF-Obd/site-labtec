<?php 

//ATRIBUTOS
$id_usuario = $_POST['id_usuario'];
$mensagem   = $_POST['mensagem'];
$id_conversa= $_POST['id_conversa'];


try{

	$sqlCad = "INSERT INTO mensagens VALUES( DEFAULT, :id_usuario, :mensagem, CURRENT_TIMESTAMP, NULL, :id_conversa)";

	$query = $pdo->prepare($sqlCad);
	$query->execute([
		'id_usuario' => $id_usuario,
		'mensagem' => utf8_decode($mensagem),
		'id_conversa' => $id_conversa
	]);
	retornaJSON(true, "Cadastrado com sucesso", date("Y-m-d H:i:s"));

}catch(PDOException $e) {
	retornaJSON(false, $e->getMessage(), null);
}