<?php
namespace App\Table;

use Core\Database\Database;
use Core\Table\Table;


class UserTable extends Table
{
     protected $table = 'users';

     public function __construct(Database $database)
     {
         parent::__construct($database);
     }

    public function all()
     {
         return $this->query('SELECT * FROM '. $this->table .' order by  id ASC');
     }
}