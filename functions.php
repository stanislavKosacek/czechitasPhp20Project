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