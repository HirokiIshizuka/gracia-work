
<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
        <?= $this->fetch('price') ?>
        <?= $this->fetch('description')?>
        <?= $this->fetch('image') ?>
        <?= $this->fetch('name') ?>
    </title>
    <?= $this->Html->css('stylesheets.css') ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
    <?= $this->element('my_header') ?>
    <?= $this->Flash->render() ?>

    <section class="container">
        <?= $this->fetch('content') ?>
    </section>
</body>
</html>
