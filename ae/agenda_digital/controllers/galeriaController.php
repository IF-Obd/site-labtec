<?php
class galeriaController extends controller{

   public function index(){
    $dados = array(
        'total_fotos' => '12'
    );

    $this->loadTemplate('galeria', $dados);
   }
}
