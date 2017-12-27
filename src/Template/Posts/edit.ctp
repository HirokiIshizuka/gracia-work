<?php
$this->assign('title', 'edit');
?>

<h1>
  <?= $this->Html->link('edit', ['action'=>'index'], ['class'=>['pull-right', 'fs12']]); ?>
</h1>

<?= $this->Form->create($post); ?>
<?= $this->Form->control('title', ['label' => '商品名']);?>
<?= $this->Form->control('description', ['label' => '記事詳細','rows'=>'8']); ?>
<?= $this->Form->control('price' , ['label' => '価格']); ?>
<?= $this->Form->button('編集'); ?>
<?= $this->Form->end(); ?>
