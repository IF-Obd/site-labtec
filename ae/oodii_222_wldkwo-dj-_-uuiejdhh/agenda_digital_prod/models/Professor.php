<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 13/02/2019
 * Time: 22:47
 */
class Professor extends Usuario
{
    var $id_professor;
    var $matricula;
    var $formacao;

    function setUsuario(Usuario $usuario)
    {
       $this->id_usuario = $usuario->id_usuario;
        $this->nome = $usuario->nome;
        $this->login = $usuario->login;
        $this->email = $usuario->email;
        $this->tipoUsuario_id = $usuario->tipoUsuario_id;
        $this->cpf = $usuario->cpf;
        $this->status_cad = $usuario->status_cad;
    }

    /**
     * @return mixed
     */
    public function getIdProfessor()
    {
        return $this->id_professor;
    }

    /**
     * @param mixed $id_professor
     */
    public function setIdProfessor($id_professor)
    {
        $this->id_professor = $id_professor;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getFormacao()
    {
        return $this->formacao;
    }

    /**
     * @param mixed $formacao
     */
    public function setFormacao($formacao)
    {
        $this->formacao = $formacao;
    }




}