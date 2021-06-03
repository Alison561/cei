<?php

namespace App\Model;
use App\Model\MySql;

class produto{

    public function insert($cod, $nome, $qnt, $preco){
        $var = MySql::con()->prepare("INSERT INTO `produto` (codigo, nome, qnt, preco, data) VALUES(?, ?, ?, ?, ?)");
        $var->execute(array($cod, $nome, $qnt, $preco, date('Y-m-d')));
    }

    public function select(){
        $var = MySql::con()->prepare("SELECT * FROM `produto`");
        $var->execute();
        return $var->fetchAll();
    }

    public function selectId($id){
        $var = MySql::con()->prepare("SELECT * FROM `produto` WHERE id = ?");
        $var->execute(array($id));
        return $var->fetch();
    }

    public function selectCode($code){
        $var = MySql::con()->prepare("SELECT * FROM `produto` WHERE codigo = ?");
        $var->execute(array($code));
        return $var->fetch();
    }

    public function update($id, $cod, $nome, $qnt, $preco, $data){
        $var = MySql::con()->prepare("UPDATE `produto` SET codigo = ?, nome = ?, qnt= ?, preco= ?, data= ? WHERE id = ?");
        $var->execute(array($cod, $nome, $qnt, $preco, $data, $id));
    }

    public function quantidade($id, $qnt){
        $var = MySql::con()->prepare("UPDATE `produto` SET qnt= ? WHERE id = ?");
        $var->execute(array($qnt, $id));
    }

    public function delete($id){
        $var = MySql::con()->prepare("DELETE FROM `produto` WHERE id = ?");
        $var->execute(array($id));
    }
}