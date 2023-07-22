<?php
    namespace MF\Models;
            
    use App\Conexao;
    
    class Container{

        public static function get_model($model){
            $db = Conexao::connect();
            // quando uma class é recebida como um string o name space deve estar junto
            $class = "App\\models\\$model" ;

            return new $class($db);

        }
    }
?>