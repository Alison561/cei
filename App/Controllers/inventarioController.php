<?php

namespace App\Controllers;
use App\Model\relatorioModel;
use App\Model\produto;

class inventarioController{

    public function __construct() {
        $this->relatorio = new relatorioModel;
        $this->prod = new produto;
    }
    public function produtoS(){
        return $this->prod->select();
    }
    public function inventario(){
        if (!isset($_SESSION['login'])) {
            $this->redirect('login');
        }
        $this->render('inventario', 'template');
    }

    public function delete(){
        $this->prod->delete($_POST['id']);
    }

    public function quantidade(){
        $produ =$this->prod->selectId($_POST['id']);
        if ($_POST['qntd'] > $produ['qnt']) {
            $qntd = $_POST['qntd'] - $produ['qnt'];
            $this->relatorio->insert($_POST['id'], 'add', $qntd);
            $this->prod->quantidade($_POST['id'], $_POST['qntd']);
        }else {
            $qntd = $produ['qnt'] - $_POST['qntd'];
            $this->relatorio->insert($_POST['id'], 'remove', $qntd);
            $this->prod->quantidade($_POST['id'], $_POST['qntd']);
        }
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