<?php
$this->assign('title', $parent->name."のギフト・プレゼント | Tanp [タンプ]");
?>
<h2>
<?= $this->Html->link('戻る', ['action'=>'index' ], ['class'=>['pull-right', 'fs12']]); ?>
<?= h($parent->name); ?>
</h2>
<div class="product">
   <?php foreach ($posts as $parent): ?>
      <?= h($parent->posts->title) ?>
     <?php endforeach; ?>
</div>
