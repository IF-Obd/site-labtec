<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 19/04/2019
 * Time: 23:59
 */
class Discipline extends model
{

    public function getList()
    {
        $array = array();
        $sql = $this->db->prepare("SELECT * FROM `disciplina` AS d JOIN curso AS c ON d.curso_id = c.id_curso");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function add($name, $course_id)
    {
        try {
            $sqlCad = "INSERT INTO `disciplina` VALUES (NULL, :nome, :curso_id)";
            $query = $this->db->prepare($sqlCad);
            $query->execute([
                'nome' => utf8_decode($name),
                'curso_id' => $course_id,
            ]);
        } catch (PDOException $e) {
            "Erro: " . $e->getMessage();
            trataErro($e, "CADASTRO DE DISCIPLINAS", TRUE);
            die();
        }
    }
}