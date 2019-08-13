<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 20/04/2019
 * Time: 00:49
 */
class ajaxController extends controller
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

    public function searchClass()
    {
        $id_course = $_POST['id_course'];
        $ajax = new Ajax();
        $ajax->searchClass($id_course);
    }

    public function searchDiscipline()
    {
        $id_course = $_POST['id_course'];
        $ajax = new Ajax();
        $ajax->searcDiscipline($id_course);

    }
}