<?php

/**
 * OBS: os códigos de cada case estão identicos porque foi separado caso surja alguma
 * opção de mudança de acordo com o tipo de usuario
 */


$tipo_usuario = $_POST['tipo_usuario'];
$id_usuario   = $_POST['id_usuario'];

switch ($tipo_usuario) {
    case 1:    
        //BUSCAR PROFESSORES / PEDAGOGICO E RESPONSÁVEIS
        $result = $pdo->query("SELECT * FROM usuario WHERE usuario.tipoUsuario_id >= 1 AND usuario.tipoUsuario_id < 4
        AND usuario.id_usuario != $id_usuario
        ORDER BY usuario.tipoUsuario_id ASC");
        $array = array();
            
        if ($result){
            //percorre os resultados via fetch()
            while($row = $result->fetch(PDO::FETCH_OBJ)){
                $array[] = 
                array(
                    'id_usuario' => $row->id_usuario,
                    'nome_usuario' => utf8_encode($row->nome_usuario),
                    'tipo' => $row->tipoUsuario_id
                );
            }
        }
        retornaJSON(true,"Busca de contatos - > pedagógicos", $array);

    break;

    case 2:
        $result = $pdo->query("
            SELECT * FROM usuario WHERE usuario.tipoUsuario_id IN (1,2,3)
            AND usuario.id_usuario != $id_usuario ORDER BY usuario.tipoUsuario_id ASC 
        ");

        $array = array();
            
        if ($result){
            //percorre os resultados via fetch()
            while($row = $result->fetch(PDO::FETCH_OBJ)){
                $array[] = 
                array(
                    'id_usuario' => $row->id_usuario,
                    'nome_usuario' => utf8_encode($row->nome_usuario),
                    'tipo' => $row->tipoUsuario_id
                );
            }
        }
        retornaJSON(true,"Busca de contatos - > professores", $array);
    break;
    
    case 3:
        $result = $pdo->query("
            SELECT * FROM usuario WHERE usuario.tipoUsuario_id IN (1,2,3)
            AND usuario.id_usuario != $id_usuario ORDER BY usuario.tipoUsuario_id ASC 
        ");

        $array = array();
            
        if ($result){
            //percorre os resultados via fetch()
            while($row = $result->fetch(PDO::FETCH_OBJ)){
                $array[] = 
                array(
                    'id_usuario' => $row->id_usuario,
                    'nome_usuario' => utf8_encode($row->nome_usuario),
                    'tipo' => $row->tipoUsuario_id
                );
            }
        }
        retornaJSON(true,"Busca de contatos - > responsável", $array);
    break;


    default:
        retornaJSON(true,"Não foi encontrado ação de busca de contatos para este tipo de usuario -> TIPO = ". $tipo_usuario, null);
        break;
}
