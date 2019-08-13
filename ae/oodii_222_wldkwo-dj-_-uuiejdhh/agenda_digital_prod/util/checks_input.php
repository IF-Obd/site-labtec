<?php

require_once "models/Usuario.class.php";
require_once "models/Aluno.class.php";
require_once "models/Professor.php";
require_once "models/Pedagogico.php";
require_once "models/Responsavel.php";

$sql = "SELECT * FROM usuario WHERE cpf=:cpf AND senha= :senha AND status_cad = 1";
$query = $pdo->prepare($sql);
$query->execute([
    'cpf' => $login,
    'senha' => md5($senha),
]);

$adicionais = array();

if ($dados = $query->fetch(PDO::FETCH_OBJ)) {
    $usuario = new Usuario();
    $usuario->id_usuario = $dados->id_usuario;
    $usuario->nome = utf8_encode($dados->nome_usuario);
    //$usuario->login = utf8_encode($dados->login);
    $usuario->email = $dados->email;
    $usuario->tipoUsuario_id = $dados->tipoUsuario_id;
    $usuario->status_cad = $dados->status_cad;
    $usuario->cpf = $dados->cpf;

    switch ($usuario->tipoUsuario_id) {
        case 1:
            $sql = "SELECT * FROM `pedagogico` WHERE usuario_id=:usuario_id";
            $query = $pdo->prepare($sql);
            $query->execute(['usuario_id' => $usuario->id_usuario,]);
            $dados = $query->fetch(PDO::FETCH_OBJ);
            $ped = new Pedagogico();
            $ped->setUsuario($usuario);
            $usuario->id_usuario_t = $dados->id_pedagogo;
            $ped->setIdPedagogico($dados->id_pedagogo);
            $ped->setMatricula($dados->matricula);
            retornaJSON(true, "Ped", $ped, NULL);
            break;

        case 2:
            $professor = new Professor();
            $sql = "SELECT * FROM `professor` WHERE usuario_id=:usuario_id";
            $query = $pdo->prepare($sql);
            $query->execute(['usuario_id' => $usuario->id_usuario,]);
            $dados = $query->fetch(PDO::FETCH_OBJ);
            $usuario->id_usuario_t = $dados->id_professor;
            $professor->setUsuario($usuario);
            $professor->setIdProfessor($dados->id_professor);
            $professor->setMatricula($dados->matricula);
            $professor->setFormacao(utf8_encode($dados->formacao));
            $adicionais =buscarDadosProfessor($dados->id_professor, $pdo);
            retornaJSON(true, "Professor", $professor, $adicionais);
            break;

        case 3:
            $responsavel = new Responsavel();
            $sql = "SELECT * FROM `responsavel` WHERE usuario_id=:usuario_id";
            $query = $pdo->prepare($sql);
            $query->execute(['usuario_id' => $usuario->id_usuario,]);
            $dados = $query->fetch(PDO::FETCH_OBJ);
            $responsavel->setUsuario($usuario);
            $responsavel->setIdResponsavel($dados->id_responsavel);
            $responsavel->setRua(utf8_encode($dados->rua));
            $responsavel->setBairro(utf8_encode($dados->bairro));
            $responsavel->setNumero($dados->numero);
            $responsavel->setCidade(utf8_encode($dados->cidade));
            retornaJSON(true, "Responsavel", $responsavel);
            break;

        case 4:
            $aluno = new Aluno();
            $sql = "
                SELECT * FROM aluno a 
                JOIN turma t ON a.turma_id = t.idTurma
                JOIN curso c ON t.curso_id = c.id_curso
                WHERE usuario_id=:usuario_id;
            ";
            $query = $pdo->prepare($sql);
            $query->execute(['usuario_id' => $usuario->id_usuario,]);
            $dados = $query->fetch(PDO::FETCH_OBJ);
            $aluno->setUsuario($usuario);
            $aluno->setIdAluno($dados->id_aluno);
            $aluno->setMatricula($dados->matricula);
            $aluno->setCurso(utf8_encode($dados->nome_curso));
            $aluno->setTurma($dados->numero);
            $array = array('id_turma'=> $dados->idTurma);


            //PESQUISA RESPONSÁVEL
            $responsavel_id = $dados->responsavel_id;

            $result = $pdo->query("SELECT nome_usuario FROM responsavel r
              JOIN usuario u ON r.usuario_id = u.id_usuario
              WHERE id_responsavel = $responsavel_id ;
            ");
            $nome_resp = $result->fetch(PDO::FETCH_OBJ);
            $aluno->setResp($nome_resp->nome_usuario);

            retornaJSON(true, "Logado com sucesso", $aluno, $array);
            break;
    }
    // retornaJSON(true, "Logado com sucesso", $usuario);
} else {
    retornaJSON(false, "Login ou senha errada. \nSe você está tentando logar pela primeira vez por favor registre seu usuário clicando no botão primeiro acesso.", null);
}


//FUNÇÕES PARA BUSCAS DE DADOS ADICIONAIS PROFESSOR
function buscarDadosProfessor($id_professor, $pdo){

    $result = $pdo->query("SELECT COUNT(*) FROM atividade WHERE professor_id = $id_professor;");
    if ($result){
        $ha = $result->fetch(PDO::FETCH_NUM);
        $dados_rel = $ha[0];
    }
    $array = array('tarefas_cadastradas'=> $dados_rel);
    return $array;
}
