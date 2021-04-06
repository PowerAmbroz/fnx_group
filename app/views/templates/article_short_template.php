<section class="article">
    <div class="row">
        <div class="col-12">
            <h1 class="title"><?= $articles->title; ?></h1>
            <a class="btn btn-link"
               href="<?= URLROOT ?>/categories/articles/<?= $articles->category_id; ?>"><small><?= $articles->category_name ?></small></a>
            <div class="description">
                <?= $articles->short_description; ?>
            </div>
        </div>
        <div class="col-4 author">
            <?php

            $authors_id = $articles->author_id;
            $id = explode(',', $authors_id);

            $authors_name = $articles->authors;
            $author = explode(',', $authors_name);

            $tags = $articles->tags;
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
                <?php
                if ($articles->price > 0) {
                    if ($_SESSION['wallet'] < $articles->price) {
                        ?>
                        <a href="#" class="btn btn-success">Not enought money</a>
                        <?php
                    } else {
                        ?>
                        <a href="<?= URLROOT ?>/articles/buy/<?= $articles->article_id; ?>"
                           class="btn btn-success">Buy <?= $articles->price; ?> $</a>
                        <?php
                    }
                } else { ?>
                    <a href="<?= URLROOT ?>/main/read/<?= $articles->article_id; ?>" class="btn btn-success">Read</a>
                    <a href="<?= URLROOT ?>/articles/buy/<?= $articles->article_id; ?>" class="btn btn-success">Add to
                        My
                        Articles</a>
                    <?php
                }
            } else {
                ?>
                <a href="#" class="btn btn-success">Please LogIn to Buy/Read</a>
                <?php
            } ?>

        </div>
    </div>
</section>
<?php
