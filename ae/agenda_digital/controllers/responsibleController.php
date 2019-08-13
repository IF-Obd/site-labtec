<?php

/**
 * Created by PhpStorm.
 * User: Narciso Gomes
 * Date: 12/04/2019
 * Time: 20:22
 */
class responsibleController extends controller

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
        $resp = new Responsible();
        $data = array();
        $u = new Users();
        $data['user'] = $u->getUserLogged();
        $data['responsibles'] = $resp->getList();
        $this->loadTemplate('cad_responsible', $data);
    }

    public function add()
    {
        $r = new Responsible();
        $name = addslashes($_POST['name']);
        $cpf = addslashes($_POST['cpf']);
        $email = addslashes($_POST['email']);
        $pass = addslashes($_POST['pass']);
        $neighborhood = addslashes($_POST['neighborhood']);
        $street = addslashes($_POST['street']);
        $number = addslashes($_POST['number']);
        $city  = addslashes($_POST['city']);
        $state = addslashes($_POST['state']);
        $country = addslashes($_POST['country']);
        $r->add($name, $email, $pass, $cpf,$neighborhood, $street, $number, $city,$state, $country);
        $_SESSION['isCadResponsible'] = true;
        header("Location: " . BASE_URL . "/responsible");
    }

}