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
              echo '<div id="item-'.$item->id.'">'.$item->content.'<input type="button" value="削除する" id="content-delete" data-id="'.$item->id.'"></div>';
              exit;
          }
          return;
      }

  public function delete(){
            if($this->request->is('ajax')) {
              $item = $this->Items->get($this->request->getData('id'));
              $this->Items->delete($item);
      }
       return;
    }


}
