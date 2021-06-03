<?php

namespace App\Controllers;
use App\Model\produto;
use App\Model\relatorioModel;

class relatorioController{

    public function __construct() {
        $this->prod = new produto;
        $this->relatorio = new relatorioModel;
    }
    public function select($tipo){
        return $this->relatorio->select($tipo);
    }

    public function relatorio(){
        if (!isset($_SESSION['login'])) {
            $this->redirect('login');
        }
        $this->render('relatorio', 'template');
    }

    public function postRelatorio(){
        if (!isset($_SESSION['login'])) {
            $this->redirect('login');
        }
        $this->render('relatorio', 'template');
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