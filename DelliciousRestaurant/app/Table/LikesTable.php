<?php

namespace App\Table;

use Core\Table\Table;

/**
 * 
 */
class LikesTable extends Table
{
	protected $table = 'likes';

	public function countLikes(){
        

       return $this->query('SELECT COUNT(*) FROM likes ');

	}
}