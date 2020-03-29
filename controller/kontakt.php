<?php

$template = 'kontakt';

if (!empty($_POST)) {
    $dotaz = $pdo->prepare("INSERT into zpravy (jmeno, email, predmet, zprava) VALUES(?, ?, ?, ?)");
    $vysledek = $dotaz->execute(array(
        $_POST['jmeno'],
        $_POST['email'],
        $_POST['predmet'],
        $_POST['zprava'],
    ));
  
    header('location: ?stranka=kontakt-uspech');
 
    exit;
}
