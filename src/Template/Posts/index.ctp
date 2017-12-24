<div class="after-header">
  <h1>
  <?= $this->Html->link('記事追加', ['action'=>'add'], ['class'=>['pull-right', 'fs12']]); ?>

    Tanp
  </h1>
  <p>ギフトを最高の体験に</p>

</div>


<ul>
  <?php foreach ($posts as $post) : ?>
    <li>
      <!-- <?= $this->Html->link($post->title, ['controller'=>'Posts', 'action'=>'view', $post->id]); ?> -->
      <!-- <?= $this->Html->link($post->title, ['action'=>'view', $post->id]); ?> -->
      <a href="<?= $this->Url->build(['action'=>'view', $post->id]); ?>">
        <div class="product-name"><?= h($post->title); ?>
        <?= $this->Html->link('[編集]', ['action'=>'edit', $post->id], ['class'=>'fs12']); ?>
        </div>
      </a>
      <img src="<?= $post->image ?>">
     </li>
  <?php endforeach; ?>
</ul>
<div class="footer">
  <p class="footer-title">giftを最高の体験に</p>
  <p class="footer-desc">TANPは、ギフト・プレゼント専門のネットショップです。誕生日や記念日などの様々なシーンに
    加え、相手の方の性別、年代に合わせたギフトを簡単に見つけることができます。見つけたプレゼントは、LINEやSNSを通じて今すぐにでも贈ることができます。</p>
</div>
