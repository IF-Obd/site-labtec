<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 20/04/2019
 * Time: 19:35
 */
class disciplinetController extends controller
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
        $d = new Disciplinet();
        $c = new Course();
        $data['teachers'] = $p->getList();
        $data['disciplinets'] = $d->getList();
        $data['courses'] = $c->getList();
        $data['user'] = $u->getUserLogged();

        $this->loadTemplate('cad_disc_prof', $data);
    }

    public function add(){
        $teacher = $_POST['teacher'];
        $class   = $_POST['class'];
        $discipline = $_POST['discipline'];
        $d = new Disciplinet();
        $d->add($teacher, $class, $discipline);
        $_SESSION['isCadDisciplinet'] = true;
        header("Location: ".BASE_URL."/disciplinet");
    }


}