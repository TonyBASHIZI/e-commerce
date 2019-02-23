<?php

namespace App\Table;


use Core\Table\Table;

class CommandeTable extends Table
{
    protected $table = 'commande';
    
    public function all()    
    {
        return $this->query("SELECT * FROM commande ");
        
    }
}