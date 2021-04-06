<section class="row">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Num of Articles</th>
            <th scope="col">Category</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data['getAllCategories'] as $category) {
            ?>
            <tr>
                <td>
                    <?= $category->num; ?>
                </td>
                <td>
                    <?php
                    if ($category->num != 0) { ?>
                        <a class="btn btn-link"
                           href="<?= URLROOT ?>/categories/articles/<?= $category->id; ?>"><?= $category->name; ?></a>
                    <?php
                    } else { ?>
                        <span class="btn"><?= $category->name; ?></span>

                    <?php
                    } ?>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

</section>