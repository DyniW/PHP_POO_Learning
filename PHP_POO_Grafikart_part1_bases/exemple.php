<?php

use \Tutoriel\Autoloader;
use \Tutoriel\jeu_de_role\Archer;
use \Tutoriel\jeu_de_role\Personnage;

require 'classes\Autoloader.php';
Autoloader::register();

$merlin = new Personnage('merlin');

//on peut définir la vie de merlin ici avec $merlin->vie = 100;

$merlin->regenerer();

echo '<pre>';
	var_dump($merlin);
echo '</pre>';


$harry = new Personnage('harry');

echo '<pre>';
	var_dump($harry->mort());//retourne vrai si Harry est mort
	var_dump($harry);
echo '</pre>';


$merlin->attaque($harry);

if($harry->mort())
{
	echo "Harry est mort";
}
else
{
	echo "Harry a survécu, il lui reste ".$harry->getVie()." points de vie";
}

echo '<br />';
echo $merlin->getNom();//retourne le nom grâce à l'accesseur 'getNom'
$merlin->setNom('hagrid');//modifie le nom grâce au mutateur 'setNom'
echo '<br />';
echo $merlin->getNom();

echo '<br /><br />';
$legolas = new Archer('Legolas');

echo '<pre>';
    var_dump($legolas);
echo '</pre>';

$legolas->attaque($harry);