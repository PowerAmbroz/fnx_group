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
        foreach ($data['getAllAuthors'] as $allAuthors) {
            ?>
                <tr>
                    <td>
                        <?= $allAuthors->first_name . ' ' . $allAuthors->last_name;?>
                    </td>
                    <td>
                        <a class="btn btn-success" href="<?= URLROOT ?>/authors/author/<?= $allAuthors->id; ?>">Articles</a>
                    </td>
                </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

</section>