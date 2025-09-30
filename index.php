<?php 

//inclure la classe Cat
include "Animal.php";
include "Cat.php";
include "Dog.php";


//instancier l'objet de la classe cat

$monPremierChat = new Cat("Garfield");
$monPremierChat -> setAge(30);

$monPremierChien = new Dog("Medore");

echo "Mon premier chat, il s'appelle : ".$monPremierChat -> getName()." et son age :".$monPremierChat->getAge()."\n";
echo "Mon premier chien s'appelle :".$monPremierChien -> getName();