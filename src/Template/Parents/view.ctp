<?php
$this->assign('title', $parent->name."のギフト・プレゼント | Tanp [タンプ]");
?>
<h2>
<?= h($parent->name); ?>
</h2>
<div class="product">
   <?php foreach ($posts as $post): ?>
     <div class="product-container">
       <img src="<?= $post->image?>"  >
       <div class="product-name">
         <?= h($post->title); ?>
       </div>
       </div>
     <?php endforeach; ?>
</div>
