<?php

namespace App\Model;
use App\Model\MySql;

class relatorioModel{

    public function insert($id_prod, $tipo, $qnt){
        $var = MySql::con()->prepare("INSERT INTO `relatorio`VALUES(NULL, ?, ?, ?, ?)");
        $var->execute(array($id_prod, $tipo, $qnt, date('Y-m-d')));
    }

    public function select($tipo){
        $var = MySql::con()->prepare("SELECT * FROM relatorio INNER JOIN produto as prod ON prod.id = relatorio.id_prod WHERE tipo = ?");
        $var->execute(array($tipo));
        return $var->fetchAll();
    }
}