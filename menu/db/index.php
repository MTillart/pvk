<?php

/**
 * @param $hostName
 * @param $dbUser
 * @param $dbPass
 * @param $dbName
 * @return mysqli
 * Antud funktsiooni kasutame selleks, et tekitada ühendust andmebaasiga
 */

//impordime andmebaasi andmed
require_once 'conf.php';
require_once 'db_fnk.php';
// katsetame ühenduse loomiset ikt serveriga
// kõik andmed -  cPaneli kaudu loodud kastaja, parool ja andmebaasi nimi
// localhost - veebiserver ja andmebaasiserver asuvad samas ikt masinas
$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);

// select tüüpi sql testimine
//
//$sql = 'SELECT * FROM PRAED';
//$users = getData($sql, $iktConn);
//
//echo '<pre>';
//print_r($users);
//echo '</pre>';
