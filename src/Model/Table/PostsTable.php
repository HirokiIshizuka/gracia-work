<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table
{
  public function initialize(array $config)
  {
    $this->addBehavior('Timestamp');
    $this->hasMany('Comments', [
      'dependent' => true
    ]);
     $this->belongsTo('Parents');
     $this->hasMany('Items');
  }


}
