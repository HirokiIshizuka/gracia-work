<?php
//ParentsController
namespace App\Controller;
use Cake\ORM\TableRegistry;
class ParentsController extends AppController

{
  public function index()
  {
    $parents = $this->Parents->find('all');
    $this->set(compact('parents'));
  }
  public function view($id = null)
  {
            $this->loadModel('Posts');
            $posts = $this->Posts->find('all', [
               'conditions' => ['Posts.parent_id' => $id]
           ]
           );
           $this->set(compact('posts'));
           $parent = $this->Parents->get($id);
           $this->set(compact('parent'));
  }
  }
