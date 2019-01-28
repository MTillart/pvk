<?php
 require_once 'index.php';
 require_once 'db_fnk.php';
function soodus($hind, $soodusProtsent)
{
    return round($hind * ((100 - $soodusProtsent) / 100), 2);
}
$praad_mass = 'SELECT * FROM PRAED';
$praed = query($praad_mass, $iktConn);

$supid_mass = 'SELECT * FROM SUPID';
$supid = query($supid_mass, $iktConn);


$magustoit_mass = 'SELECT * FROM MAGUSTOIT';
$magustoit = query($magustoit_mass, $iktConn);


$joogid_mass = 'SELECT * FROM JOOK';
$joogid = query($joogid_mass, $iktConn);

?>