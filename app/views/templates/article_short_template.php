<section class="row">
    <div class="col-12">
        <h1 class="title"><?= $articles->title; ?></h1>
        <small><?= $articles->name ?></small>
        <div class="description">
            <?= $articles->short_description; ?>
        </div>
    </div>
    <div class="col-2 author">
        <?php

        $authors_id = $articles->author_id;
        $id = explode(',', $authors_id);

        $authors_name = $articles->authors;
        $author = explode(',', $authors_name);

        $tags = $articles->tags;
        $tag = explode(',', $tags);

        for ($i = 0; $i < count($id); $i++) {
            ?>
            <a href="<?= URLROOT ?>/authors/<?= $id[$i]; ?>"><?= $author[$i]; ?></a>
            <?php
        }

        ?>
    </div>
</section>
<hr>
<div class="row">
    <div class="col-6">
        <?php
        for ($i = 0; $i < count($tag); $i++) {
            ?>
            <a class="btn btn-link" href="#"><?= $tag[$i]; ?></a>
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
                    <a href="#" class="btn btn-success">Buy <?= $articles->price; ?> $</a>
                    <?php
                }
            } else { ?>
                <a href="#" class="btn btn-success">Read</a>
                <?php
            }
        } else {
            ?>
            <a href="#" class="btn btn-success">Please LogIn to Buy/Read</a>
            <?php
        } ?>

    </div>
</div>
<?php
