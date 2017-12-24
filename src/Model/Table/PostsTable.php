<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table
{
  public function initialize(array $config)
  {
    $this->addBehavior('Timestamp');
  }

  public function validationDefault(Validator $validator)
  {
    $validator
      ->notEmpty('商品名')
      ->requirePresence('商品名')
      ->notEmpty('商品詳細')
      ->requirePresence('商品詳細')
      ->add('商品詳細', [
        'length' => [
          'rule' => ['minLength', 15],
          'message' => '商品詳細は１５字以上書いてください'
        ]
      ]);
    return $validator;
  }
}
