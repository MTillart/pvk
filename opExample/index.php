<?php

require_once 'test.php';

$hello1 = new test();

$hello1->setText('Hello world!');


echo '<pre>';
print_r($hello1);
echo '</pre>';
$hello1->showText();