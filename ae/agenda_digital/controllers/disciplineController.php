<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 19/04/2019
 * Time: 23:44
 */
class disciplineController extends controller
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
        $course = new Course();
        $d = new Discipline();
        $data['disciplines'] = $d->getList();
        $data['courses'] = $course->getList();
        $data['user'] = $u->getUserLogged();
        $this->loadTemplate('cad_discipline', $data);
    }

    public function add(){
        $name = $_POST['name'];
        $course_id = $_POST['course_id'];
        $disc = new Discipline();
        $disc->add($name, $course_id);
        $_SESSION['isCadDiscipline'] = true;
        header("Location: ".BASE_URL."/discipline");
    }

}