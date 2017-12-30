<?php

namespace App\Controller;

class PostsController extends AppController
{
  public function index()
  {
    $posts = $this->Posts->find('all');
    $this->set(compact('posts'));
  }



  public function view($id = null)
  {
    $post = $this->Posts->get($id);
    $this->set(compact('post'));
  }


  public function add()
  {
    $post = $this->Posts->newEntity();
    if ($this->request->is('post')) {
      $post = $this->Posts->patchEntity($post, $this->request->data);
      if ($this->Posts->save($post)) {
        $this->Flash->success('追加完了!');
        return $this->redirect(['action'=>'index']);
      } else {
        // error
        $this->Flash->error('追加失敗!');
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
        $this->Flash->error('編集に失敗しました');
      }
    }
    $this->set(compact('post'));
  }
 }
