<?php

namespace App\Table;


use Core\Table\Table;

class ClientTable extends Table
{
    protected $table = 'client';
    
    public function all()    
    {
        return $this->query("SELECT * FROM client ");
        
    }

    
}