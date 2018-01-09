<div class="after-header">
  <h1>
  <?= $this->Html->link('記事追加', ['action'=>'add'], ['class'=>['pull-right', 'fs12']]); ?>
Tanp
  </h1>
  <p>ギフトを最高の体験に</p>
</div>
<div class="content-bg">
<?php foreach ($parents as $parent) : ?>
  <ul>
    <li>
      <a href="/parents/view/<?= $parent->id ?>"><?= $parent->name ?></a>
    </li>
  </ul>
  <?php endforeach; ?>
</div>

<div class="content-bg">
  <?php foreach ($posts as $post) : ?>
    <div class="product-container">
      <img src="<?= $post->image?>"  >
      <a href="<?= $this->Url->build(['action'=>'view', $post->id]); ?>">
      <div class="product-name">
        <?= h($post->title); ?>
        <?= $this->Html->link('[編集]', ['action'=>'edit', $post->id], ['class'=>'fs12']); ?>
      </div>
    </a>
  </div>
  <?php endforeach; ?>
</div>
<div class="clear-fix"></div>



<div class="footer">
  <p class="footer-title">giftを最高の体験に</p>
  <p class="footer-desc">TANPは、ギフト・プレゼント専門のネットショップです。誕生日や記念日などの様々なシーンに
    加え、相手の方の性別、年代に合わせたギフトを簡単に見つけることができます。見つけたプレゼントは、LINEやSNSを通じて今すぐにでも贈ることができます。</p>
</div>
