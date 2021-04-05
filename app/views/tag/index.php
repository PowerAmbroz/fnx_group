<section class="row">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Num of Articles</th>
            <th scope="col">Tag</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data['allTags'] as $tag) {
            ?>
                <tr>
                    <td>
                        <?= $tag->num;?>
                    </td>
                    <td>
                        <a href="<?= URLROOT ?>/tags/tagArticle/<?= $tag->name; ?>"><?= $tag->name;?></a>
                    </td>
                </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

</section>