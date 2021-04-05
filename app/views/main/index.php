<?php

foreach ($data['articles'] as $articles) {
    include '../app/views/templates/article_short_template.php';
}
var_dump($_SESSION);