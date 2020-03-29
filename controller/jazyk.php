<?php

if (isset($_GET["jazyk"])) {
    $_SESSION["jazyk"] = $_GET["jazyk"];
    
    header("location: ?stranka=" . $_GET["presmerovani"]);
    exit;
}
