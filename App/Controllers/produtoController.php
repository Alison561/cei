<?php

namespace App\Controllers;
use App\Model\produto;

class produtoController{

    public function __construct() {
        $this->prod = new produto;
    }
    public function produtoS(){
        return $this->prod->select();
    }
    public function cadastro(){
        if (!isset($_SESSION['login'])) {
            $this->redirect('login');
        }
        $this->render('cadastroItem', 'template');
    }

    public function postCadastro(){
        if (!isset($_SESSION['login'])) {
            $this->redirect('login');
        }
        $_POST['codigo']= floatval($_POST['codigo']);
        $this->render('cadastroItem', 'template');
        $this->prod->insert($_POST['codigo'], $_POST['item'], $_POST['quantidade'], $_POST['valor']);
        $this->redirect('');
    }

    public function redirect(string $get = ''){
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