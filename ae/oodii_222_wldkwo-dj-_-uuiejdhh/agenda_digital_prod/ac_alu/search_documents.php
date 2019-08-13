<?php 

//ACTION 3.2

if(!isset($_POST['tipo_doc']) OR !isset($_POST['id_aluno'])){
	retornaJSON(false,"Não foram informados todos os dados necessários para esta consulta.", null);	
}

$tipo_doc = $_POST['tipo_doc'];
$id_aluno = $_POST['id_aluno'];

$array = array();
$sql = $pdo->prepare("SELECT * FROM `documentos_alunos` WHERE aluno_id = $id_aluno AND tipo_documento = $tipo_doc");

$sql->execute();
if ($sql->rowCount() > 0) {
    $array = $sql->fetch();
    //$array['caminho_documento'] = BASEURL."/".$array['caminho_documento'];


}

if(count($array) == 0){
	retornaJSON(false,"Este documento ainda não se encontra disponível para este aluno.", $array);		
}

retornaJSON(true, "Seu documento será carregado",$array);
