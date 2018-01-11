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
<select id="parent_id" class="parent form-control" name='parent_id'>
                            <option value="">カテゴリを選択</option>
                            <?php foreach ($parents as $parent): ?>
                                <option
                                        value="<?= $parent->id; ?>" <?= ($parent->id == $post->parent_id) ? "selected" : "" ?>><?= $parent->name; ?></option>
                            <?php endforeach; ?>
                        </select>
<?= $this->Form->end(); ?>
<button id='post_save'>保存</button>
<div class="save_result"></div>
<script type="text/javascript">
$(document).on('click', '.post_save', function() {
	var data = $("#product_form").serialize();
	$.ajax({
		type:'post',
		url:"/posts/save",
		data: data,
		error:function(){
			alert('保存に失敗しました。');
		},
		success:function(){
			alert('保存しました');
		}
	});
});
</script>
<button id="ajax">ajax</button>
   <div class="result"></div>
   <script type="text/javascript">
   $(document).on('click','#ajax', function() {
      alert(“clicked”);
});
 </script>
