<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 19/04/2019
 * Time: 21:16
 */
class ClassCourse extends model
{

    public function getList()
    {
        $array = array();
        $sql = $this->db->prepare("SELECT * FROM turma AS t JOIN curso AS c ON t.curso_id = c.id_curso");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function add($number, $course_id)
    {
        try {
            $sqlCad = "INSERT INTO `turma` VALUES (NULL, :numberT, :course_id)";
            $query = $this->db->prepare($sqlCad);
            $query->execute([
                'numberT' => $number,
                'course_id' => $course_id,
            ]);
        } catch (PDOException $e) {
            "Erro: " . $e->getMessage();
            trataErro($e, "CADASTRO DE TURMAS", TRUE);
            die();
        }
    }
}