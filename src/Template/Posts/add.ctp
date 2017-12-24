<?php
$this->assign('title', 'Add New');
?>

<h2>
  <?= $this->Html->link('戻る', ['action'=>'index'], ['class'=>['pull-right', 'fs12']]); ?>
  記事追加
</h2>

<?= $this->Form->create($post); ?>
<?= $this->Form->input('商品名'); ?>
<?= $this->Form->input('商品詳細', ['rows'=>10]); ?>
<?= $this->Form->input('商品イメージ'); ?>
<?= $this->Form->input('価格'); ?>
<?= $this->Form->button('追加'); ?>
<?= $this->Form->end(); ?>
