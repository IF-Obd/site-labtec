<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 20/04/2019
 * Time: 11:48
 */
class educatorController extends controller
{
    public function __construct()
    {
        parent::__construct();
        $u = new Users();
        if (!$u->isLogged()) {
            header("Location: " . BASE_URL . "/login");
            exit();
        }
    }

    public function index()
    {
        $data = array();
        $u = new Users();
        $educator = new Educator();
        $data['educators'] = $educator->getList();
        $data['user'] = $u->getUserLogged();
        $this->loadTemplate('cad_educator', $data);
    }


    public function add()
    {
        $e = new Educator();
    
        $name = addslashes($_POST['name']);
        $cpf = addslashes($_POST['cpf']);
        $email = addslashes($_POST['email']);
        $pass = addslashes($_POST['pass']);
        $matricula = addslashes($_POST['matricula']);
        $e->add($name, $email, $pass, $cpf, $matricula);
        $_SESSION['isCadEducator'] = true;
        header("Location: ".BASE_URL."/educator");
    }

}