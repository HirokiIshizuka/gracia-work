<?php
$this->assign('title', '記事追加');
?>

<h2>
  <?= $this->Html->link('戻る', ['action'=>'index'], ['class'=>['pull-right', 'fs12']]); ?>
  記事追加
</h2>

<?= $this->Form->create($post); ?>
<?= $this->Form->input('title'); ?>
<?= $this->Form->input('description', ['rows'=>'3']); ?>
<?= $this->Form->input('image'); ?>
<?= $this->Form->input('price'); ?>
<?= $this->Form->button('追加'); ?>
<?= $this->Form->end(); ?>
