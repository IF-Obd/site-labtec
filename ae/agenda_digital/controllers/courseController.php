<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 19/04/2019
 * Time: 20:59
 */
class courseController extends controller
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
        $c = new Course();
        $data['courses'] = $c->getList();
        $data['user'] = $u->getUserLogged();
        $this->loadTemplate('cad_course', $data);
    }

    public function add(){
        $c = new Course();
        $name = addslashes($_POST['name']);
        $sigla = addslashes($_POST['sigla']);
        $c->add($name, $sigla);
        $_SESSION['isCadCourse'] = true;
        header("Location: ".BASE_URL."/course");
    }

}