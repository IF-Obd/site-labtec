<?php
class homeController extends controller{

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
        $data['user'] = $u->getUserLogged();
        $this->loadTemplate( 'dashboard', $data);
    }
}