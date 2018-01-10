<?php
$this->assign('title', 'edit');
?>

<h1>
  <?= $this->Html->link('戻る', ['action'=>'index'], ['class'=>['pull-right', 'fs12']]); ?>
</h1>

<?= $this->Form->create($post); ?>
<?= $this->Form->control('title', ['label' => '商品名']);?>
<?= $this->Form->control('description', ['label' => '記事詳細','rows'=>'8']); ?>
<?= $this->Form->control('price' , ['label' => '価格']); ?>
<select id="parent_id" class="parent form-control" name='parent_id'>
                            <option value="0">親カテゴリを選択</option>
                            <?php foreach ($parents as $parent): ?>
                                <option
                                        value="<?= $parent->id; ?>" <?= ($parent->id == $post->parent_id) ? "selected" : "" ?>><?= $parent->name; ?></option>
                            <?php endforeach; ?>
                        </select>
<?= $this->Form->button('編集'); ?>
<?= $this->Form->end(); ?>
