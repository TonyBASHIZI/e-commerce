<?php

namespace App\Table;


use Core\Table\Table;

class PlatTable extends Table
{
    protected $table = 'plat';
    
    public function all()    
    {
        return $this->query("SELECT * FROM plat ");
        
    }

    public function getCat($code)
    {
        return $this->query("SELECT * FROM plat WHERE categorie = ?, [$code]");
    }

    
}