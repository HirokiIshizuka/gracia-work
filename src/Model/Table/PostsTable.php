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
  }

  public function validationDefault(Validator $validator)
  {
    $validator
      ->notEmpty('title')
      ->requirePresence('title')
      ->notEmpty('description')
      ->requirePresence('description')
      ->add('description', [
        'length' => [
          'rule' => ['minLength', 5],
          'message' => '記事詳細は５字以上にしてください'
        ]
      ]);
    return $validator;
  }
}
