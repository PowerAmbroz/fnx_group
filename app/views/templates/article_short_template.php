<section class="row">
    <div class="col-12">
        <h1 class="title"><?= $articles->title; ?></h1>
        <small><?=$articles->name?></small>
        <div class="description">
            <?= $articles->short_description; ?>
        </div>
    </div>
    <div class="col author">
        <a href="<?= URLROOT ?>/author/<?=$articles->id?>"><?= $articles->first_name . ' ' . $articles->last_name; ?></a>
    </div>

</section>
<hr>
<div class="col">
    <?php
    if (isset($_SESSION['user_id']))
    {
        ?>
        <?php
        if ($articles->price > 0)
        {
            if ($_SESSION['wallet'] < $articles->price)
            {?>
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
    } else
        {
        ?>
        <a href="#" class="btn btn-success">Please LogIn to Buy/Read</a>
    <?php
        } ?>

</div>