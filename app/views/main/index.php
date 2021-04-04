<?php
foreach ($data['users'] as $user){
    echo "Information: " .$user->username . "<br/>";
}

var_dump($_SESSION);