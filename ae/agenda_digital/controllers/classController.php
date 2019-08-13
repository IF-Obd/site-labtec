<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 19/04/2019
 * Time: 21:13
 */
class classController extends controller
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
        $c = new ClassCourse();
        $course = new Course();
        $data['courses'] = $course->getList();
        $data['classes'] = $c->getList();
        $data['user'] = $u->getUserLogged();
        $this->loadTemplate('cad_class', $data);
    }

    public function add(){
    $c = new ClassCourse();
    $number = addslashes($_POST['number']);
    $course_id = addslashes($_POST['course_id']);
    $c->add($number, $course_id);
    $_SESSION['isCadClass'] = true;
    header("Location: ".BASE_URL."/class");
}
}