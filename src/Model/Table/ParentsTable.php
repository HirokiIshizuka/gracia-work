<?php

namespace App\Model\Entity;

use Cake\ORM\Table;

class ParentsTable extends Table
{
  public function initialize(array $config)
   {
       $this->hasMany('Posts');
   }
}
?>
