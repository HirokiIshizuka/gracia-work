<?php
//PostsController
namespace App\Controller;

class PostsController extends AppController
{
  public $uses=array('Parents');
  public $helpers=array('Html','Form');
  public function index()
  {
    $posts = $this->Posts->find('all');
    $this->set(compact('posts'));
    $this->loadModel('Parents');
    $parents = $this->Parents->find('all');
    $this->set(compact('parents'));
  }



  public function view($id = null)
  {
    $post = $this->Posts->get($id);
    $this->set(compact('post'));
    $this->set(compact('parents'));
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
        $this->Flash->error('追加失敗!');
      }
    }
    $this->set(compact('post'));
    $this->set(compact('parent'));
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
