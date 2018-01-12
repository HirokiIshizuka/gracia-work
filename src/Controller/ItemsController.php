<?php
//ParentsController
namespace App\Controller;
class ItemsController extends AppController

{
//ItemsController
  public function add() {
          if($this->request->is('ajax')) {
              $this->autoRender = FALSE;
       		    $item = $this->Items->newEntity();
       		    $item = $this->Items->patchEntity($item, $this->request->getData());
       		    $this->Items->save($item);
              echo "<div>".$item->content."</div>";
              exit;
          }
          return;
      }

  public function delete($id = null){
            if($this->request->is('ajax')) {
               $item = $this->Items->get($id);
        return $this->redirect(['action'=>'posts.delete']);
      }
    }


}
