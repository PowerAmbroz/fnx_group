<div class="row">
    <div class="col-12">
        <h1>My Articles</h1>
        <hr>
    </div>
</div>
<?php


foreach ($data['getBoughtArticles'] as $boughtArticle) {
    ?>
    <section class="article">
        <div class="row">
        <hr>
        <div class="col-12">
            <h1 class="title"><?= $boughtArticle->title; ?></h1>
            <a class="btn btn-link"
               href="<?= URLROOT ?>/categories/articles/<?= $boughtArticle->category_id; ?>"><small><?= $boughtArticle->category_name ?></small></a>
            <div class="description">
                <?= $boughtArticle->short_description; ?>
            </div>
        </div>
        <div class="col-4 author">
            <?php

            $authors_id = $boughtArticle->author_id;
            $id = explode(',', $authors_id);

            $authors_name = $boughtArticle->authors;
            $author = explode(',', $authors_name);

            $tags = $boughtArticle->tags;
            $tag = explode(',', $tags);


            for ($i = 0; $i < count($id); $i++) {
                ?>
                <a class="btn btn-link" href="<?= URLROOT ?>/authors/author/<?= $id[$i]; ?>"><?= $author[$i]; ?></a>
                <?php
            }

            ?>
        </div>
        </div>
    <hr>
    <div class="row">
    <div class="col-6">
        <?php
        for ($j = 0; $j < count($tag); $j++) {
            ?>
            <a class="btn btn-link" href="<?= URLROOT ?>/tags/tagArticle/<?= $tag[$j]; ?>"><?= $tag[$j]; ?></a>
            <?php
        }
        ?>
    </div>
    <div class="col-6">
    <?php
    if (isset($_SESSION['user_id'])) {
        ?>
        <a href="<?= URLROOT ?>/main/read/<?= $boughtArticle->article_id; ?>" class="btn btn-success">Read</a>
        <?php
    }
 ?>

    </div>
    </div>
    </section>
<?php
}
