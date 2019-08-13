<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 12/04/2019
 * Time: 03:28
 */
class Users extends model
{

    public function isLogged(){
        if(isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser'])){
            return true;
        }
        return false;
    }

    public function doLogin($login, $pass){
        $sql = $this->db->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :pass AND tipoUsuario_id = 5");
        $sql->bindValue(":email", $login);
        $sql->bindValue(":pass", md5($pass));

        $sql->execute();
        if($sql->rowCount()>0){
            $row = $sql->fetch();
            $_SESSION['ccUser'] = $row['id_usuario'];
            return true;
        }else{
            return false;
        }
    }


    public function getUserLogged(){
        if(isset($_SESSION['ccUser'])&& !empty($_SESSION['ccUser'])){
            $id = $_SESSION['ccUser'];
            $sql = $this->db->prepare("SELECT * FROM usuario WHERE id_usuario = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();
            if($sql->rowCount()){
                $row = $sql->fetch();
                return $row;
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['ccUser']);
    }
}