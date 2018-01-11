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
              $item = $this->Items->patchEntity($item, $this->request->data);
              $this->Items->save($item);
              $item->content = h($item->content);
              $item->getItemDom($item);
              exit;
          }
          return;
      }

   public function edit() {
        if($this->request->is('ajax')) {
              $this->autoRender = FALSE;
              $id = $_POST['id'];
              $item = $this->Items->get($id);
              $item->getEditDom($item);
              exit;
          }
      }
}
