<?php

require_once 'Titulaire.php';
require_once 'Compte.php';

$titulaire1 = new Titulaire('Shmidt', 'Olena', '10-10-1972', 'Mulhouse', 'livret A');

$compte1 = new Compte("livret A", 1055.35, "euros", $titulaire1);
$compte1 = new Compte("livret B", 550.56, "dollars", $titulaire1);
$compte1 = new Compte("livret C", 1475.15, "euros", $titulaire1);

$titulaire1->afficherInfos();

?>