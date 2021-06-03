<?php

namespace App\Controllers;
use App\Model\produto;
use App\Model\relatorioModel;

class caixaController{

    public function __construct() {
        $this->relatorio = new relatorioModel;
        $this->prod = new produto;
    }
    public function produtoS(){
        return $this->prod->select();
    }
    public function caixa(){
        if (!isset($_SESSION['login'])) {
            $this->redirect('login');
        }
        $this->render('caixa', 'caixa');
    }

    public function include(){
        if (!isset($_SESSION['login'])) {
            $this->redirect('login');
        }
        $return =  $this->prod->selectCode($_POST['code']);
        $qntd = $return['qnt'] - $_POST['qntd'];
        $this->relatorio->insert($return['id'], 'venda',$_POST['qntd']);
        $this->prod->quantidade($return['id'],$qntd);
        die(json_encode($return));
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