<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 13/04/2019
 * Time: 03:08
 */
class Teatchers extends model
{
    public function getList()
    {
        $array = array();
        $sql = $this->db->prepare("SELECT * FROM `professor` AS p JOIN usuario AS u ON u.id_usuario = p.usuario_id");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function addTeatcher($name, $email, $pass,$cpf, $matricula, $formacao)
    {
        try {
            $sqlCad = "INSERT INTO `usuario` VALUES (NULL, :nome, :email, :senha, :tu,:status_cad, :cpf)";
            $query = $this->db->prepare($sqlCad);
            $query->execute([
                'nome' => utf8_decode($name),
                'email' => $email,
                'senha' => md5($pass),
                'tu' => 2,
                'status_cad' => 0,
                'cpf' => $cpf
            ]);

            $idusuario = $this->db->lastInsertId();

            //INSEREPROFESSOR
            $sqlCad = "INSERT INTO `professor` VALUES (NULL, :matricula, :formacao, :idus)";
            $query = $this->db->prepare($sqlCad);
            $query->execute([
                'matricula' => $matricula,
                'formacao' =>utf8_decode($formacao),
                'idus' => $idusuario,
            ]);
        } catch (PDOException $e) {
            "Erro: " . $e->getMessage();
            trataErro($e, "CADASTRO DE PROFESSORES", TRUE);
            die();
        }
    }
}
