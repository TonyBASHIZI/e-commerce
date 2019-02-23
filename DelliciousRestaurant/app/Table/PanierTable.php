<?php

namespace App\Table;


use Core\Table\Table;

class PanierTable extends Table
{
    protected $table = 'panier';
    
    public function all()    
    {
        return $this->query("SELECT * FROM panier inner join plat on panier.code_article = plat.id");
        
    }

    public function compter()
    {

        return $this->query("COUNT(*) FROM panier");
    }
}