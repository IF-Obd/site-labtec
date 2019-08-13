<?php 
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

//seleciona o usuário
 $sql = $pdo->prepare("SELECT * FROM usuario WHERE cpf = :cpf AND status_cad = 0");
 $sql->bindValue(":cpf", $cpf);
 $sql->execute();
if($sql->rowCount()>0){
 	$row = $sql->fetch();

 	//insere a senha do usuario 
 	$id_usuario = $row['id_usuario'];
 	$sql = $pdo->prepare("UPDATE usuario SET senha = :senha, status_cad = 1 WHERE id_usuario = $id_usuario");
 	$sql->bindValue("senha", md5($senha));
 	$sql->execute();

 	retornaJSON(true, "Usuário cadastrado com sucesso.");
}else{
    retornaJSON(false, "Usuário não existente ou já cadastrado.");
}
