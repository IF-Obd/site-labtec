<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 19/04/2019
 * Time: 19:24
 */
class Responsible extends model
{

    public function add($name, $email, $pass, $cpf, $neighborhood, $street, $number, $city, $state, $country)
    {
        try {
            $sqlCad = "INSERT INTO `usuario` VALUES (NULL, :nome, :email, :senha, :tu,:status_cad, :cpf)";
            $query = $this->db->prepare($sqlCad);
            $query->execute([
                'nome' => utf8_decode($name),
                'email' => $email,
                'senha' => md5($pass),
                'tu' => 3,
                'status_cad' => 0,
                'cpf' => $cpf
            ]);

            $idusuario = $this->db->lastInsertId();

            $sqlCad = "INSERT INTO `responsavel` VALUES (NULL, :street, :neighborhood, :number_e,:user_id, :city, :state, :country)";
            $query = $this->db->prepare($sqlCad);
            $query->execute([
                'street' => utf8_decode($street),
                'neighborhood' => utf8_decode($neighborhood),
                'number_e' => $number,
                'user_id' => $idusuario,
                'city' => utf8_decode($city),
                'state'=> utf8_decode($state),
                'country' => utf8_encode($country)
            ]);
        } catch (PDOException $e) {
            "Erro: " . $e->getMessage();
            trataErro($e, "CADASTRO DE RESPONSÁVEIS", TRUE);
            die();
        }
    }

    public function getList()
    {
        $array = array();
        $sql = $this->db->prepare("SELECT * FROM `responsavel` AS r JOIN usuario AS u ON u.id_usuario = r.usuario_id");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
}