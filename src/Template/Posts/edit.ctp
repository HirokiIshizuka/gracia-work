<?php
$this->assign('title', 'edit');
?>

<h1>
  <?= $this->Html->link('戻る', ['action'=>'index'], ['class'=>['pull-right', 'fs12']]); ?>
</h1>

<?= $this->Form->create($post, ["id" => "post-form"]); ?>
<?= $this->Form->control('title', ['label' => '商品名']);?>
<?= $this->Form->control('description', ['label' => '記事詳細','rows'=>'8']); ?>
<?= $this->Form->control('image', ['label' => '画像']);?>
<?= $this->Form->control('price' , ['label' => '価格']); ?>
<select id="parent_id" class="parent form-control" name='parent_id'>
                            <option value="0">親カテゴリを選択</option>
                            <?php foreach ($parents as $parent): ?>
                                <option
                                        value="<?= $parent->id; ?>" <?= ($parent->id == $post->parent_id) ? "selected" : "" ?>><?= $parent->name; ?></option>
                            <?php endforeach; ?>
                        </select>
<input type="hidden" value="<?= $post->id ?>" name="id">
<input type="button" id="save-post" value="保存する">
<?= $this->Form->end(); ?>

<section>
  <textarea class="item-description" name="content" placeholder="本文を入力" rows="4"></textarea>
  <input type="button" id="save-item" value="保存する">
  <div class="item-result">
  </div>
  <input type="button" id="content-delete" value="削除">
</section>

<script>

$(document).on('click', '#save-post', function() {
    var data = $("#post-form").serialize();
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

$(document).on('click', '#save-item', function() {
  var post_id = $('input[name="id"]').val();
  var content = $('textarea[name="content"]').val();
    $.ajax({
      type:'post',
      url:"/items/add",
      data: {
               "post_id": post_id,
               "content": content
           },
      error:function(){
        alert('保存に失敗しました。');
      },
      success:function(res){
        console.log(res);
        $('textarea').val("");
        $(".item-result").append(res);
      }
    });
});

$(document).on('click', 'content-delete', function() {
  var post_id = $('input[name="id"]').val();
  var content = $('textarea[name="content"]').val();
    $.ajax({
      type:'post',
      url:"/items/delete",
      data: {
               "post_id": post_id,
               "content": content
           },
      error:function(){
        alert('削除に失敗しました。');
      },
      success:function(res){
      }
    });
});

</script>
