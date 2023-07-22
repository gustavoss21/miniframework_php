<?php
    namespace App\Controllers;

    use MF\Controller\Action;
    use MF\Models\Container;
    use App\models\Produto;

    //suas paginas seram métodos dessa class 
    class IndexController extends Action{

        
        //exemplo de pagina, deve substituir e adicionar suas proprias
        public function index(){

            //exemplo de acesso ao modelo Produto 
            $produto = Container::get_model('Produto');
            $produtos = $produto->get_produtos_all();

            //envia dados para o template
            $this->view->dados = $produtos;

            //exemplo de renderização da pagina index.phtml, que sera incluido no layout.phtml
            $this->render('index','layout');
        }
    
    }
?>