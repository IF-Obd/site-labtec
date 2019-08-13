<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 12/04/2019
 * Time: 05:06
 */
class teacherController extends controller
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
        $p = new Teatchers();
        $data['teatchers'] = $p->getList();
        $data['user'] = $u->getUserLogged();
        $this->loadTemplate('cad_prof', $data);
    }


    public function add()
    {
        $p = new Teatchers();
        $name = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $pass = addslashes($_POST['pass']);
        $matricula = addslashes($_POST['matricula']);
        $formacao = addslashes($_POST['formacao']);
        $cpf = addslashes($_POST['cpf']);
        $p->addTeatcher($name, $email, $pass, $cpf, $matricula, $formacao);
        header("Location: ".BASE_URL."/teacher");
    }

}