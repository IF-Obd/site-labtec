<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 20/04/2019
 * Time: 01:09
 */
class Student extends model
{

    public function add($name, $email, $pass, $cpf, $matricula, $responsavel, $turma)
    {
        try {
            $sqlCad = "INSERT INTO `usuario` VALUES (NULL, :nome, :email, :senha, :tu,:status_cad, :cpf)";
            $query = $this->db->prepare($sqlCad);
            $query->execute([
                'nome' => utf8_decode($name),
                'email' => $email,
                'senha' => md5($pass),
                'tu' => 4,
                'status_cad' => 0,
                'cpf' => $cpf
            ]);

            $idusuario = $this->db->lastInsertId();

            $sqlCad = "INSERT INTO `aluno` VALUES (NULL, :matricula, :user_id, :responsavel,:turma)";
            $query = $this->db->prepare($sqlCad);
            $query->execute([
                'matricula' => $matricula,
                'user_id' => $idusuario,
                'responsavel' => $responsavel,
                'turma' => $turma
            ]);
        } catch (PDOException $e) {
            "Erro: " . $e->getMessage();
            trataErro($e, "CADASTRO DE ALUNO", TRUE);
            die();
        }
    }

    public function getList()
    {
        $array = array();
        $sql = $this->db->prepare("SELECT * FROM aluno a JOIN usuario u ON a.usuario_id = u.id_usuario JOIN turma t ON t.idTurma = a.turma_id JOIN curso c ON c.id_curso = t.curso_id");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
}