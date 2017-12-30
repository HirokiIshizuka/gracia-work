<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Article extends Entity
{

public function add()
{
 $post = $this->Posts->newEntity();
 if ($this->request->is('post')) {
    $post = $this->Posts->patchEntity($post, $this->request->data);
    if ($this->Posts->save($post)) {
      $this->Flash->success('追加完了');
      return $this->redirect(['action'=>'index']);
    } else {
      // error
    }
  }
 $this->set(compact('post'));
}

//postsController
public function edit($id = null)
{
  $post = $this->Posts->get($id);
  if ($this->request->is(['post', 'patch', 'put'])) {
    $post = $this->Posts->patchEntity($post, $this->request->getData());
    if ($this->Posts->save($post)) {
      $this->Flash->success('編集しました');
      return $this->redirect(['action'=>'index']);
    } else {
      // error
      $this->Flash->error('編集に失敗しました');
    }
  }
  $this->set(compact('post'));
}
}
