<?php
require('animal.php');
require('ape.php');
require('frog.php');

$sheep = new Animal("shaun");

echo $sheep->get_name(); // "shaun"
echo $sheep->get_legs(); // 2
echo $sheep->get_cold_blooded(); // false

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"