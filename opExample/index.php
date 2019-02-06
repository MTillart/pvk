<?php

require_once 'test.php';

$hello1 = new test('Hello world!');


echo '<pre>';
print_r($hello1);
echo '</pre>';

$hello1->setText('Muu tekst');

$hello1->showText();

