<?php
/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 04/03/2019
 * Time: 11:17 AM
 */

/**
 * Buscar apenas as ocorrencias do usuario
 */
if(isset($_POST['my_occ'])){
    $id_ped = $_POST['id_ped'];
    $result = $pdo->query("SELECT o.id_ocorrencia, o.descricao, o.data, u.nome_usuario FROM ocorrencia o JOIN pedagogico p ON o.pedagogico_id = p.id_pedagogo 
    JOIN usuario u ON p.usuario_id = u.id_usuario WHERE p.id_pedagogo = $id_ped ORDER BY o.id_ocorrencia DESC;");

    if ($result){
        //percorre os resultados via fetch()
        while($row = $result->fetch(PDO::FETCH_OBJ)){
            $alunos = buscarAlunosOcorrencia($pdo, $row->id_ocorrencia);
            $array[] = array(
                //'id_pedagogo'   => $row->id_pedagogo,
                'id_ocorrencia' => $row->id_ocorrencia,
                'descricao'     => utf8_encode($row->descricao),
                'data'          => formata_data_banco_string($row->data),
                'data_bd'          => $row->data,
                'nome'          => utf8_encode($row->nome_usuario),
                'alunos'        => $alunos
            );
        }

        if(isset($array)){
            retornaJSON(true,"Consulta de Ocorrencias", $array);
        }else{
            retornaJSON(false,"Não existe ocorrencias cadastradas", null);
        }
    }else{
        retornaJSON(false,"Ocorreu algum erro na pesquisa das informações", null);
    }
}



/**
 * Buscar apenas as ocorrencias ARQUIVADAS
 */
if(isset($_POST['occ_a'])){
    //$id_ped = $_POST['id_ped'];
    
    $result = $pdo->query("
  SELECT o.id_ocorrencia, o.descricao, o.data, o.status_oc, u.nome_usuario FROM ocorrencia o JOIN pedagogico p ON o.pedagogico_id = p.id_pedagogo JOIN usuario u ON p.usuario_id = u.id_usuario WHERE o.status_oc = 2 ORDER BY o.id_ocorrencia DESC;
    ");

    if ($result){
        //percorre os resultados via fetch()
        while($row = $result->fetch(PDO::FETCH_OBJ)){
            $alunos = buscarAlunosOcorrencia($pdo, $row->id_ocorrencia);
            $array[] = array(
                //'id_pedagogo'   => $row->id_pedagogo,
                'status'     => $row->status_oc,
                'id_ocorrencia' => $row->id_ocorrencia,
                'descricao'     => utf8_encode($row->descricao),
                'data'          => formata_data_banco_string($row->data),
                'data_bd'          => $row->data,
                'nome'          => utf8_encode($row->nome_usuario),
                'alunos'        => $alunos
            );
        }

        if(isset($array)){
            retornaJSON(true,"Consulta de Ocorrencias ARQUIVADAS", $array);
        }else{
            retornaJSON(false,"Não existe ocorrencias cadastradas", null);
        }
    }else{
        retornaJSON(false,"Ocorreu algum erro na pesquisa das informações", null);
    }
}

/**
 * Buscar ocorrencia pelo id_ocorrencia
 */
if(isset($_POST['my'])){
    $id_oc = $_POST['id_oc'];
    $result = $pdo->query("
    SELECT o.id_ocorrencia, o.descricao, o.data, u.nome_usuario FROM ocorrencia o JOIN pedagogico p ON o.pedagogico_id = p.id_pedagogo 
    JOIN usuario u ON p.usuario_id = u.id_usuario WHERE o.id_ocorrencia = $id_oc;
    ");

    if ($result){
        //percorre os resultados via fetch()
        while($row = $result->fetch(PDO::FETCH_OBJ)){
            $alunos = buscarAlunosOcorrencia($pdo, $row->id_ocorrencia);
            $array[] = array(
                'id_ocorrencia' => $row->id_ocorrencia,
                'descricao'     => utf8_encode($row->descricao),
                'data'          => formata_data_banco_string($row->data),
                'data_bd'       => $row->data,     
                'nome'          => utf8_encode($row->nome_usuario),
                'alunos'        => $alunos
            );
        }

        if(isset($array)){
            retornaJSON(true,"Consulta de Ocorrencias", $array);
        }else{
            retornaJSON(false,"Não existe ocorrencias cadastradas", null);
        }
    }else{
        retornaJSON(false,"Ocorreu algum erro na pesquisa das informações", null);
    }
}

/**
 * Buscar apenas uma ocorrencia passando o id_oc
 */
if(isset($_POST['um'])){
    $id_oc = $_POST['id_oc'];
    $result = $pdo->query("
    SELECT p.id_pedagogo, o.id_ocorrencia, o.descricao, o.data, o.status_oc, u.nome_usuario FROM ocorrencia o JOIN pedagogico p ON o.pedagogico_id = p.id_pedagogo 
    JOIN usuario u ON p.usuario_id = u.id_usuario WHERE o.id_ocorrencia = $id_oc;
	");

    if ($result){
        //percorre os resultados via fetch()
        while($row = $result->fetch(PDO::FETCH_OBJ)){
            $alunos = buscarAlunosOcorrencia($pdo, $row->id_ocorrencia);
            $array[] = array(
                'id_status'     => $row->status_oc,
            	'id_pedagogo'   => $row->id_pedagogo,
                'id_ocorrencia' => $row->id_ocorrencia,
                'descricao'     => utf8_encode($row->descricao),
                'data'          => formata_data_banco_string($row->data),
                'data_bd'          => $row->data,
                'nome'          => utf8_encode($row->nome_usuario),
                'alunos'        => $alunos
            );
        }

        if(isset($array)){
            retornaJSON(true,"Consulta de Ocorrencias", $array);
        }else{
            retornaJSON(false,"Não existe ocorrencias cadastradas", null);
        }
    }else{
        retornaJSON(false,"Ocorreu algum erro na pesquisa das informações", null);
    }
}


/**
 * Buscar todas as ocorrências
 */

$result = $pdo->query("
    SELECT p.id_pedagogo, o.id_ocorrencia, o.descricao, o.data, u.nome_usuario FROM ocorrencia o JOIN pedagogico p ON o.pedagogico_id = p.id_pedagogo 
    JOIN usuario u ON p.usuario_id = u.id_usuario WHERE o.status_oc = 1	ORDER BY o.data DESC;
	");

if ($result){
    //percorre os resultados via fetch()
    while($row = $result->fetch(PDO::FETCH_OBJ)){
        $alunos = buscarAlunosOcorrencia($pdo, $row->id_ocorrencia);

        $array[] = array(
        	'id_pedagogo'   => $row->id_pedagogo,
            'id_ocorrencia' => $row->id_ocorrencia,
            'descricao'     => utf8_encode($row->descricao),
            'data'          => formata_data_banco($row->data)['data'],
            'nome'          => utf8_encode($row->nome_usuario),
            'alunos'        => $alunos
        );
    }


    if(isset($array)){
        retornaJSON(true,"Consulta de Ocorrencias", $array);
    }else{
        retornaJSON(false,"Não existe ocorrencias cadastradas", null);
    }
}else{
    retornaJSON(false,"Ocorreu algum erro na pesquisa das informações", null);
}



/**
 * Buscar alunos da ocorrência
 */

function buscarAlunosOcorrencia($pdo, $id_ocorrencia){
    $alunos = array();

     $result = $pdo->query("
           SELECT nome_usuario, id_aluno, nome_curso, numero  FROM aluno_has_ocorrencia aho 
            JOIN aluno a ON aho.aluno_id = a.id_aluno 
            JOIN usuario u ON a.usuario_id = u.id_usuario
            JOIN turma t ON t.idTurma = a.turma_id
            JOIN curso c ON t.curso_id = c.id_curso
            WHERE aho.ocorrencia_id = $id_ocorrencia
        ;");
        
        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            $alunos[] = array(
                'id_aluno' => $row->id_aluno,
                'nome' => utf8_encode($row->nome_usuario),
                'curso' => utf8_encode($row->nome_curso),
                'turma' => $row->numero
            );
        }


    if(isset($alunos)){
        return  $alunos;    
    }
    return $alunos;
}
