<?php
$jmeno = "Standa";
$prijmeni = "Kosáček";
$celeJmeno = $jmeno . " " . $prijmeni;
$datumNarozeni = "2. 7. 1991";
$adresa = "Severní 5, České Budějovice, 37010";
$email = "stanislav.kosacek@icloud.com";
$telefon = "702048957";


$schopnosti = ["Programátor", "Lektor", "Czechiťák"];

$sluzby = [
    ["sluzba" => "Programování", "popis" => "Nějaký popis pro danou službu. 👨‍💻"],
    ["sluzba" => "Kódování", "popis" => "Nějaký popis pro danou službu. 💻"],
    ["sluzba" => "Sekání zahrady", "popis" => "Nějaký popis pro danou službu. 🥀"],
    ["sluzba" => "Lektorování", "popis" => "Nějaký popis pro danou službu. 👨‍🏫"],
    ["sluzba" => "První pomoc", "popis" => "Nějaký popis pro danou službu. 🚑"],
    ["sluzba" => "Koukání na televizi", "popis" => "Nějaký popis pro danou službu. 📺"],
];

$menu = [
    ["text" => "domu", "controller" => "domu", "kotva" => "#home-section"],
    ["text" => "o_mne", "controller" => "domu", "kotva" => "#about-section"],
    ["text" => "souhrn", "controller" => "domu", "kotva" => "#resume-section"],
    ["text" => "sluzby", "controller" => "domu", "kotva" => "#services-section"],
    ["text" => "kontakt", "controller" => "kontakt", "kotva" => ""],
    ["text" => "galerie", "controller" => "galerie", "kotva" => ""],
    ["text" => "blog", "controller" => "blog", "kotva" => ""],
];