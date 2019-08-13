<?php

class Aluno extends Usuario
{
    var $id_aluno;
    var $matricula;
    var $curso;
    var $turma;
    var $resp;



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
    public function getIdAluno()
    {
        return $this->id_aluno;
    }

    /**
     * @param mixed $id_aluno
     */
    public function setIdAluno($id_aluno)
    {
        $this->id_aluno = $id_aluno;
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
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * @param mixed $curso
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    /**
     * @return mixed
     */
    public function getTurma()
    {
        return $this->turma;
    }

    /**
     * @param mixed $turma
     */
    public function setTurma($turma)
    {
        $this->turma = $turma;
    }

    /**
     * @return mixed
     */
    public function getResp()
    {
        return $this->resp;
    }

    /**
     * @param mixed $resp
     */
    public function setResp($resp)
    {
        $this->resp = $resp;
    }




    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTipoUsuarioId()
    {
        return $this->tipoUsuario_id;
    }

    /**
     * @param mixed $tipoUsuario_id
     */
    public function setTipoUsuarioId($tipoUsuario_id)
    {
        $this->tipoUsuario_id = $tipoUsuario_id;
    }





}