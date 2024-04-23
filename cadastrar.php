<?php

session_start();
include  'conexao.php';

$name=filter_input(INPUT_POST,'user');
$password=filter_input(INPUT_POST,'password');



$sql= "insert into login (usuario, senha) 
       values(?,?)";

       $bc = new Conexao();
       $con = $bc->GetConexao();

       $valores = $con->prepare($sql);
       $valores->bindValue(1, $name);
       $valores->bindValue(2, $password);

       $resultado = $valores ->execute();

       if($resultado){
        header('Location:index.php');
       }