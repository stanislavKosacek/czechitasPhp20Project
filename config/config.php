<?php
$jmeno = "Standa";
$prijmeni = "Kosáček";
$celeJmeno = $jmeno . " " . $prijmeni;
$datumNarozeni = "2. 7. 1991";
$adresa = "Severní 5, České Budějovice, 37010";
$email = "stanislav.kosacek@icloud.com";
$telefon = "702048957";


$vzdelani = [
    ["skola" => "VŠTE", "obor" => "Ekonomika podniku", "roky" => "2011-2015"],
    ["skola" => "SZŠ a VOŠ zdravotnická České Budějovice", "obor" => "Zdravotnické lyceum", "roky" => "2006-2010"],
    ["skola" => "ZŠ O. Nedbala", "obor" => "Základní škola", "roky" => "1997-2006"],
];

$zamestnani = [
    ["zamestnavatel" => "Komerční Banka, a.s.", "pozice" => "Analytik", "roky" => "2012-2018", "popis" => "Nějaký popis, nějaký popis, nějaký popis. 😀"],
    ["zamestnavatel" => "QOP.cz s.r.o.", "pozice" => "Junior developer", "roky" => "2019-2020", "popis" => "Nějaký popis, nějaký popis, nějaký popis. 😀"],
];

$hlavniSchopnosti = [
    ["schopnost" => "PHP", "procenta" => "70"],
    ["schopnost" => "Nette", "procenta" => "85"],
    ["schopnost" => "HTML5", "procenta" => "90"],
];

$vedlejsiSchopnosti = [
    ["schopnost" => "CSS3", "procenta" => "65"],
    ["schopnost" => "jQuery", "procenta" => "70"],
    ["schopnost" => "JavaScript", "procenta" => "60"],
    ["schopnost" => "Vue.js", "procenta" => "30"],
];

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
    ["text" => "Domů", "odkaz" => "#home-section"],
    ["text" => "O mně", "odkaz" => "#about-section"],
    ["text" => "Souhrn", "odkaz" => "#resume-section"],
    ["text" => "Služby", "odkaz" => "#services-section"],
];