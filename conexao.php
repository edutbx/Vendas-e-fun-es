<?php

class conexao{
    private static $instancia;

    public static function GetConexao(){
        if(!isset(self::$instancia)){
            self::$instancia = new PDO('mysql:host=localhost; dbname=mercado; charset=utf8', "root", "");
            return self::$instancia;
        }else{
            return self::$instancia;
        }
    }
}