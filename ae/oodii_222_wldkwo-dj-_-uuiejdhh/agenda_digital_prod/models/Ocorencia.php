<?php
/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 04/03/2019
 * Time: 11:23
 */

class Ocorencia extends Pedagogico {
    var $id_ocorrencia;
    var $descricao;
    var $data;

    /**
     * @return mixed
     */
    public function getIdOcorrencia()
    {
        return $this->id_ocorrencia;
    }

    /**
     * @param mixed $id_ocorrencia
     */
    public function setIdOcorrencia($id_ocorrencia)
    {
        $this->id_ocorrencia = $id_ocorrencia;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }


}