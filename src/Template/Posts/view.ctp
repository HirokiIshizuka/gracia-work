<?php
$this->assign('title', 'PRODUCTS Detail');
?>

<h2>
  <?= $this->Html->link('戻る', ['action'=>'index'], ['class'=>['pull-right', 'fs12']]); ?>
  <?= h($post->title); ?>
</h2>
<img src="<?= $post->image ?>">
<p><?= h($post->description); ?></p>
<p><?= h($post->price); ?></p>
<p><?= nl2br(h($post->body)); ?></p>
