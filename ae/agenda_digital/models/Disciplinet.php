<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 20/04/2019
 * Time: 22:09
 */
class Disciplinet extends model
{


    public function add($teacher, $class, $discipline)
    {
        try {
            $sqlCad = "INSERT INTO `disciplina_has_professor` VALUES (NULL, :discipline, :teacher, :class)";
            $query = $this->db->prepare($sqlCad);
            $query->execute([
                'discipline' => $discipline,
                'teacher' => $teacher,
                'class' => $class
            ]);
        } catch (PDOException $e) {
            "Erro: " . $e->getMessage();
            trataErro($e, "CADASTRO DE DISCIPLINAS POR PROFESSOR", TRUE);
            die();
        }
    }

    public function getList()
    {
        $array = array();
        $sql = $this->db->prepare("SELECT * FROM disciplina_has_professor dhp JOIN disciplina d ON d.id_disciplina = dhp.disciplina_id
JOIN curso c ON d.curso_id = c.id_curso 
JOIN professor p ON p.id_professor = dhp.professor_id
JOIN usuario u ON p.usuario_id = u.id_usuario
JOIN turma t ON dhp.turma_idTurma = t.idTurma");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
}