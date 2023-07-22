<?php
namespace App\models;
use MF\Models\Model;

//exemplo de Modelo Produto. Tenção: os modelos deve extender a class Model
class Produto extends Model{

    public function get_produtos_all(){
        $query = 'select id, descricao, preco from tb_produtos;';
        $stmtp = $this->db->query($query);
        $produtos = $stmtp->fetchAll(\PDO::FETCH_ASSOC);
        return $produtos;
    }
}

?>