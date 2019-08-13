<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 20/04/2019
 * Time: 00:59
 */
class Ajax extends model
{

    public function searchClass($id_course)
    {

        $array = array();
        $sql = $this->db->prepare("SELECT * FROM turma WHERE curso_id = $id_course");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
            foreach ($array as $turma) {
                echo "<option value='{$turma['idTurma']}'>{$turma['numero']}</option>";
            }
            exit();
        }

        if ($id_course == 0) {
            echo "<option value='0'>Selecione uma turma.</option>";
            exit();
        }
        echo "<option value='0'>Não existem turmas cadastradas para este curso.</option>";
    }

    public function searcDiscipline($id_course)
    {
        $array = array();
        $sql = $this->db->prepare("SELECT * FROM disciplina WHERE curso_id = $id_course");
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
            foreach ($array as $disciplina) {
                echo "<option value='{$disciplina['id_disciplina']}'>".utf8_encode($disciplina['nome_disciplina'])."</option>";
            }
            exit();
        }

        if ($id_course == 0) {
            echo "<option value='0'>Selecione uma disciplina.</option>";
            exit();
        }
        echo "<option value='0'>Não existem disciplinas cadastradas para esta turma.</option>";

    }
}