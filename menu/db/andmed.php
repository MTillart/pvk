<?php
 require_once 'index.php';
 require_once 'db_fnk.php';
function soodus($hind, $soodusProtsent)
{
    return round($hind * ((100 - $soodusProtsent) / 100), 2);
}
$praad_mass = 'SELECT * FROM PRAED';
$praed = query($praad_mass, $iktConn);
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