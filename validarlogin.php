<?php

session_start();
include  'conexao.php';

$name=filter_input(INPUT_POST,'user');
$password=filter_input(INPUT_POST,'password');

$sql= "select * from login where usuario=? and senha=?";
        
$bc = new Conexao();
$con = $bc->GetConexao();

$valores = $con->prepare($sql);
$valores->bindValue(1, $name);
$valores->bindValue(2, $password);
$resultado = $valores ->execute();

if($valores->rowCount()>0){
    $_SESSION['user']=$name;
    $_SESSION['senha']=$password;
    header('Location:transferir.php');
}else{
    unset($_SESSION['user']);
    unset($_SESSION['senha']);
    header('Location:index.php');
}

