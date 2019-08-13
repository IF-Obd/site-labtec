<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 12/04/2019
 * Time: 20:10
 */
class studentController extends controller{

    public function __construct() {

        parent::__construct();
        $u = new Users();
        if(!$u->isLogged()){
            header("Location: ".BASE_URL."/login");
            exit();
        }
    }

    public function index() {
        $data = array();
        $u = new Users();
        $r = new Responsible();
        $c = new Course();
        $a = new Student();
        $data['courses'] = $c->getList();
        $data['students'] = $a->getList();
        $data['responsibles'] = $r->getList();
        $data['user'] = $u->getUserLogged();
        $this->loadTemplate( 'cad_student', $data);
    }

    public function add(){
        $p = new Student();
        $name = addslashes($_POST['name']);
        $cpf = addslashes($_POST['cpf']);
        $email = addslashes($_POST['email']);
        $pass = addslashes($_POST['pass']);
        $matricula = addslashes($_POST['matricula']);
        $responsavel = addslashes($_POST['responsible']);
        $turma = $_POST['class'];
        $p->add($name, $email, $pass, $cpf, $matricula, $responsavel, $turma);
        $_SESSION['isCadStudent'] = true;
        header("Location: ".BASE_URL."/student");
    }

}