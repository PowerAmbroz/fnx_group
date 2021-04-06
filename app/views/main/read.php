<?php

foreach ($data['readArticle'] as $read) {
    $authors_id = $read->author_id;
    $id = explode(',', $authors_id);

    $authors_name = $read->authors;
    $author = explode(',', $authors_name);

    $tags = $read->tags;
    $tag = explode(',', $tags);

    ?>
    <section class="row">
        <div class="col-12">
            <h1><?= $read->title; ?></h1>
            <?php
            for ($i = 0; $i < count($id); $i++) {
                ?>
                <a class="btn btn-link" href="<?= URLROOT ?>/authors/author/<?= $id[$i]; ?>">
                    <h3><?= $author[$i]; ?></h3></a>
                <?php
            } ?>
        </div>
        <div class="col-12">
            <a class="btn btn-link"
               href="<?= URLROOT ?>/categories/articles/<?= $read->category_id; ?>"><small><?= $read->category_name; ?></small></a>
        </div>
        <div class="col-12">
            <p><?= $read->content; ?></p>
        </div>
        <hr>
        <div class="col-12">
            <?php
            for ($j = 0; $j < count($tag); $j++) {
                ?>
                <a class="btn btn-link" href="<?= URLROOT ?>/tags/tagArticle/<?= $tag[$j]; ?>"><?= $tag[$j]; ?></a>
                <?php
            }
            ?>
        </div>
    </section>
    <?php
}