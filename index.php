<?php 

//inclure la classe Cat
include "Cat.php";

//instancier l'objet de la classe cat

$monPremierChat = new Cat("Garfield");
$monPremierChat -> setAge(30);

echo "Mon premier chat, il s'appelle".$monPremierChat -> getName()."et son age :".$monPremierChat->getAge();