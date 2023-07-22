<?php

namespace App;

class Conexao{
    
    public static function connect(){
        //substitua os valores do parametros conforme seu proprio banco de dados
        $password = '12345678gs';
        $user = 'root';
        $host = 'localhost';
        $db = 'db_php';
        
        try{
            $conect_db = new \PDO(
            "mysql:host=$host;dbname=$db;charset=utf8",
            "$user",
            "$password",
            );

            return $conect_db;
            
        }catch( \PDOException $e){
            echo '<p>' . $e->getMessage() . '</p>';
        }
        
    }
}
?>