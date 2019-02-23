<?php

namespace App\Table;


use Core\Table\Table;

class LivraisonTable extends Table
{
    protected $table = 'livraison';
    
    public function all()    
    {
        return $this->query("SELECT * FROM livraison");
        
    }

    public function getpaie(){

        return $this->query("SELECT * FROM livraison inner join panier on livraison.code_panier = panier.code_article inner join plat on livraison.code_panier = plat.id");
    }

    
}