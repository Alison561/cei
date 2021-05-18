<?php

namespace App\Controllers;
use App\Model\produto;

class indexController{

    public function __construct() {
        $this->prod = new produto;
    }
    public function produtoS(){
        return $this->prod->select();
    }
    public function index(){
        if (!isset($_SESSION['login'])) {
            $this->redirect('login');
        }
        $this->render('home', 'template');
    }

    public function redirect($get = ''){
        echo "<script> window.location.href = '".url."".$get."'</script>";
    }

    public function content(){
        include $this->view;
    }

    public function render($view, $template){
        $this->view = "App\\View\\WWW\\".$view.".php";
        include "App\\View\\".$template.".php";
    }
}