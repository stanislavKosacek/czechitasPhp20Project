<?php

function vypisJaJsem(array $schopnosti): string
{
    $retezec = "";
    foreach ($schopnosti as $key => $schopnost) {
        $retezec .= "\"" . $schopnost . "\"";
        if (count($schopnosti) > $key+1) {
            $retezec .= ", ";
        }
    }
    return $retezec;
}


function vypisLogo(string $jmeno): string
{
    $delkaJmena = strlen($jmeno);
    $prvniPismeno = substr($jmeno, 0, 1);
    $zbytekJmena = substr($jmeno, 1);

    return "<span>" . $prvniPismeno . "</span>" . $zbytekJmena;
}


function sestavHlavniMenu(array $menu, string $controllerNazev): string
{
    $htmlMenu = "";
    foreach ($menu as $polozkaMenu) {
        if ($controllerNazev == $polozkaMenu["controller"]) {
            $odkaz = $polozkaMenu["kotva"];
        } else {
            $odkaz = "?stranka=" . $polozkaMenu["controller"] . $polozkaMenu["kotva"];
        }
        $htmlMenu .= "<li class=\"nav-item\"><a href=\"" . $odkaz . "\" class=\"nav-link\"><span>" . $polozkaMenu["text"] . "</span></a></li>";
    }

    return $htmlMenu;
}


function sestavVedlejsiMenu(array $menu, string $controllerNazev): string
{
    $htmlMenu = "";
    foreach ($menu as $polozkaMenu) {
        if ($controllerNazev == $polozkaMenu["controller"]) {
            $odkaz = $polozkaMenu["kotva"];
        } else {
            $odkaz = "?stranka=" . $polozkaMenu["controller"] . $polozkaMenu["kotva"];
        }
        $htmlMenu .= "<li><a href=\"" . $odkaz . "\"><span class=\"icon-long-arrow-right mr-2\"></span>" . $polozkaMenu["text"] . "</a></li>";
    }

    return $htmlMenu;
}


function preloz(string $prekladovyRetezec): string
{
    return $prekladovyRetezec;
}