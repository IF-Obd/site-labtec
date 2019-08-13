<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 10/02/2019
 * Time: 18:30
 */
class Responsavel extends Usuario
{
    var $id_responsavel;
    var $rua;
    var $bairro;
    var $numero;
    var $cidade;

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
    public function getIdResponsavel()
    {
        return $this->id_responsavel;
    }

    /**
     * @param mixed $id_responsavel
     */
    public function setIdResponsavel($id_responsavel)
    {
        $this->id_responsavel = $id_responsavel;
    }



    /**
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @param mixed $rua
     */
    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }


}