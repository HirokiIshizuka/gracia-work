<?php
//PostsController
namespace App\Controller;
class PostsController extends AppController
{
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
  }


  public function add()
  {
        $post = $this->Posts->newEntity();
        $post->title = "";
        $this->Posts->save($post);
        $this->redirect(['action'=>'edit',$post->id]);
        $this->set(compact('post'));
        $this->loadModel('Parents');
        $parents = $this->Parents->find('all');
        $this->set(compact('parents'));
        $this->loadModel('Items');
        $item =$this->Items->newEntity();
        $this->Items->save($item);
        $this->set(compact('item'));
   }


//postsController
    public function edit($id)
  {
        $post = $this->Posts->get($id);
        $this->set(compact('post'));
        $this->loadModel('Parents');
        $parents = $this->Parents->find('all');
        $this->set(compact('parents'));
        $this->loadModel('Items');
        $item = $this ->Items->find('all');
        $this->set(compact('item'));

  }

  public function save() {
     $this->autoRender = FALSE;
    if ($this->request->is('ajax')) {
  		   $id = $_POST['id'];
  		   $post = $this->Posts->get($id);
  		   $post = $this->Posts->patchEntity($post, $this->request->getData());
  		   $this->Posts->save($post);

  		exit;
  	}
  	return;
  }






 }
