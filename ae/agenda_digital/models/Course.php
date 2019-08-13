<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 19/04/2019
 * Time: 21:02
 */
class Course extends model
{


    public function getList()
    {
        $array = array();
        $sql = $this->db->prepare("SELECT * FROM `curso`");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function add($name, $sigla)
    {
        try {
            $sqlCad = "INSERT INTO `curso` VALUES (NULL, :nome, :sigla)";
            $query = $this->db->prepare($sqlCad);
            $query->execute([
                'nome' => utf8_decode($name),
                'sigla' => $sigla,
            ]);
        } catch (PDOException $e) {
            "Erro: " . $e->getMessage();
            trataErro($e, "CADASTRO DE PROFESSORES", TRUE);
            die();
        }
    }
}