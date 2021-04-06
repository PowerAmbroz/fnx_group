<?php

if (isset($_SESSION['error_response'])) { ?>
    <div class="alert-danger"><?= $_SESSION['error_response']; ?></div>
    <?php
    $_SESSION['error_response'] = '';
}
if (isset($_SESSION['success_response'])){
      ?>
        <div class="alert-success"><?= $_SESSION['success_response']; ?></div>
        <?php
        $_SESSION['success_response'] = '';
}
foreach ($data['articles'] as $articles) {
//    var_dump($articles);
    include '../app/views/templates/article_short_template.php';
}
var_dump($_SESSION);