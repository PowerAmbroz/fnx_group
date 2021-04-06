<section class="row">
    <div class="col-12">
        <h3 class="btn btn-info">Tag: <?= $data['relatedArticles'][0]->name; ?></h3>
    </div>
</section>
<?php

foreach ($data['relatedArticles'] as $relatedArticles) {
    ?>

    <section class="articles">
        <div class="row">
            <div class="col-12">
                <h1><?= $relatedArticles->title ?></h1>
            </div>
            <div class="col-12">
                <p><?= $relatedArticles->short_description ?></p>
                <hr>
                <?php
                if (isset($_SESSION['user_id'])) {
                    ?>
                    <?php
                    if ($relatedArticles->price > 0) {
                        if ($_SESSION['wallet'] < $relatedArticles->price) {
                            ?>
                            <a href="#" class="btn btn-success">Not enought money</a>
                            <?php
                        } else {
                            ?>
                            <a href="<?= URLROOT ?>/articles/buy/<?= $relatedArticles->id; ?>" class="btn btn-success">Buy <?= $relatedArticles->price; ?>
                                $</a>
                            <?php
                        }
                    } else { ?>
                        <a href="<?= URLROOT ?>/main/read/<?= $relatedArticles->article_id; ?>" class="btn btn-success">Read</a>
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
}