<?php
    namespace App;
    
    use MF\Init\Bootstrap;

    class Routes extends Bootstrap{
        
        protected function initRoutes(){
            //exemplo de router, adicione aqui seus proprios rautes 
            $routes['home'] = array(
                'route' => '/', //URI
                'controller' => 'IndexController',// App > Controllers > [class IndexController]
                'action' => 'index'//metodo da class IndexController
            );

            $this->setRoutes($routes);
        }
    }
?>