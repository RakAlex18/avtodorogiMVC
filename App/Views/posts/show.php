
    <h1><?= $title ?></h1>
    <div class="container">
        <?php foreach ($posts as $news) { ?>
        <div class="post">
            <?= $news['content']?>
        </div>
        <?php }?>
    </div>

