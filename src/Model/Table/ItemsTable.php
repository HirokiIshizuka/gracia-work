<?php

namespace App\Model\Entity;

use Cake\ORM\Table;

class ItemsTable extends Table
{
  public function initialize(array $config)
   {
       $this->belongsTo('Posts');
       $this->addBehavior('Timestamp');
   }
   
}
?>
