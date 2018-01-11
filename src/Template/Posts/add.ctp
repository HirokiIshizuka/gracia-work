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
<button id="ajax">ajax</button>
   <div class="result"></div>
   <script type="text/javascript">
   $(document).on('click','.add_item', function() {
    var post_id = ;
    var content = ;
    e.preventDefault();
    $.ajax(
        {
            type: "POST",
            url: "http://192.168.33.10:8000/items/add",
            data: {
                "post_id": post_id,
                "content": content
            },
            dataType: "text",
            success: function (dom)
            {
                //保存完了
                //ここで、返り値（dom）を描画する
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) //通信失敗
            {
                alert('処理できませんでした');
            }
        });
});
 </script>
