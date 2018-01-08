<?php
$this->assign('title', 'PRODUCTS Detail');
?>

<h2>
  <?= $this->Html->link('戻る', ['action'=>'index'], ['class'=>['pull-right', 'fs12']]); ?>
  <?= h($post->title); ?>
</h2>
<div class="view-detail">
  <div class="view-img">
    <img src="<?= $post->image ?>">
  </div>
  <div class="price-container">
    <?= h($post->price); ?>円
  </div>
  <div class="description-container">
    <?= h($post->description); ?>
  </div>
</div>
<p><?= nl2br(h($post->body)); ?></p>
