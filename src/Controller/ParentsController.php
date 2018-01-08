<?php
//ParentsController
namespace App\Controller;

class ParentsController extends AppController
{
  public function index()
  {
    $parents = $this->Parents->find('all');
    $this->set(compact('parents'));
  }
  public function view($id = null)
  {
    $parent = $this->Parents>get($id);
    $this->set(compact('parents'));
  }
}
