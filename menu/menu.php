<?php

function soodus($hind, $soodusProtsent)
{
    return round($hind * ((100 - $soodusProtsent) / 100), 2);
}
$praed = array(
    array(
        'nimetus' => "Sealihapada ploomide ja aprikoosiga",
        'kirjeldus' =>"sealihapada, lisand, salat, leib",
        'hind' => '2.65'
    ),
    array(
        'nimetus' => "Praetud kanakints",
        'kirjeldus' =>"praetud kana, lisand, salat, leib",
        'hind' => '2.50'));
$supid = array(
    array(
        'nimetus' => "Rassolnik",
        'kirjeldus' =>"supp, hapukoor, leib",
        'hind' => '1.10'
    ),
    array(
        'nimetus' => "Seljanka",
        'kirjeldus' =>"supp, hapukoor, leib",
        'hind' => '1.10'
    ));
$magustoit = array(
    array(
        'nimetus' => "Kohupiima kreem",
        'kirjeldus' =>"kohupiim, moos",
        'hind' => '0.80'
    ),
    array(
        'nimetus' => "Kamamaius",
        'kirjeldus' =>"kama, kohupiim, moos",
        'hind' => '0.60'
    ));
$joogid = array(
    array(
        'nimetus' => "Piim",
        'hind' => '0.20'
    ),
    array(
        'nimetus' => "Morss",
        'hind' => '0.20'
    ));

?>