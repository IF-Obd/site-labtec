<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 20/04/2019
 * Time: 11:48
 */
class Educator extends model
{
    public function getList()
    {
        $array = array();
        $sql = $this->db->prepare("SELECT * FROM pedagogico p JOIN usuario u ON u.id_usuario = p.usuario_id");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function add($name, $email, $pass, $cpf, $matricula)
    {
        
        
        try {
            $sqlCad = "INSERT INTO `usuario` VALUES (NULL, :nome, :email, :senha, :tu,:status_cad, :cpf)";
            $query = $this->db->prepare($sqlCad);
            $query->execute([
                'nome' => utf8_decode($name),
                'email' => $email,
                'senha' => md5($pass),
                'tu' => 1,
                'status_cad' => 0,
                'cpf' => $cpf
            ]);

            $idusuario = $this->db->lastInsertId();

            //INSERE PEDAGOGICO
            $sqlCad = "INSERT INTO `pedagogico` VALUES (NULL, :matricula, :idus)";
            $query = $this->db->prepare($sqlCad);
            $query->execute([
                'matricula' => $matricula,
                'idus' => $idusuario
            ]);
        } catch (PDOException $e) {
            "Erro: " . $e->getMessage();
            trataErro($e, "CADASTRO DE MEMBRO PEDAGÓGICO", TRUE);
            die();
        }
    }


}