<?php

namespace App\Controllers;
use App\Model\userModel;

class userController{

    public function __construct() {
        $this->user = new userModel;
    }

    public function sair(){
        session_destroy();
        $this->redirect('login');
    }

    public function login(){
        if (isset($_SESSION['login'])) {
            $this->redirect();
        }
        $this->render('login', 'template');
    }

    public function loginUp(){
        if ($_POST["usuario"] == '' || $_POST["senha"] == '') {
            $_POST['error'] = 'Campos vazios não são permitidos';
        }else if($this->user->login($_POST["usuario"], $_POST["senha"])){
            $this->redirect();
        }else{
            $_POST['error'] = 'Usuário ou senha incorretos';
        }
        $this->render('login', 'template');
    }

    public function redirect($get = ''){
        echo "<script> window.location.href = '".url."".$get."'</script>";
    }

    public function cadastro(){
        if (!isset($_SESSION['login'])) {
            $this->redirect('login');
        }
        $this->render('cadastroUsuario', 'template');
    }

    public function postCadastro(){
        if (!isset($_SESSION['login'])) {
            $this->redirect();
        }
        $this->render('cadastroUsuario', 'template');
        $if = true;
        foreach ($_POST as $key => $value) {
            if ($value == '') {
                $_POST['error'] = 'Usuário ou senha incorretos';
                $if = false;
                break;
            }
        }

        if ($if) {
            $this->user->insert($_POST["usuario"], $_POST["nomeCompleto"], $_POST["senha"], $_POST["cpf"]);
            $this->redirect('login');
        }
    }

    public function content(){
        include $this->view;
    }

    public function render($view, $template){
        $this->view = "App\\View\\WWW\\".$view.".php";
        include "App\\View\\".$template.".php";
    }
}