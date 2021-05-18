<?php
namespace App\Model;
use App\Model\MySql;

class userModel{

    public function insert($email, $nome, $senha, $cpf){
        $var = MySql::con()->prepare("INSERT INTO `user`VALUES(NULL, ?, ?, ?, ?, ?)");
        $var->execute(array($email, $nome, $senha, 1, $cpf));
    }

    public function login($email, $senha){
        $var = MySql::con()->prepare("SELECT * FROM `user` where email = ? && senha = ?");
        $var->execute(array($email, $senha));
        $row = $var->fetch();

        if ($var->rowCount() == 1) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['senha'] = $row['senha'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['nivel'] = $row['nivel'];
            return true;

        }else{
            return false;
        }

    }

    public function update($id, $email, $nome, $senha){
        $var = MySql::con()->prepare("UPDATE `produto` SET email = ?, nome = ?, senha= ? WHERE id = ?");
        $var->execute(array($id, $email, $nome, $senha, $id));
    }
}