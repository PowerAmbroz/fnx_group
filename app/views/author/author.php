<?php

foreach ($data['author'] as $author) {
    include '../app/views/templates/author_template.php';
//    var_dump($author);
}

foreach ($data['author_articles'] as $articles) {
    ?>
    <section class="row">
        <div class="col-12">
            <h1>My Articles</h1>
            <hr>
        </div>
        <div class="col-12">
            <h3><?= $articles->title; ?></h3>
            <small><?= $articles->name ?></small>
        </div>
        <div class="col-12">
            <?= $articles->short_description ?>
        </div>
        <hr>
        <div class="col">
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
                        <a href="<?= URLROOT ?>/articles/buy/<?= $articles->id; ?>" class="btn btn-success">Buy <?= $articles->price; ?> $</a>
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
    </section>


    <?php
//    var_dump($articles);
}
