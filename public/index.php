<?php

// making sure it knows where to find them

// Birds
use Bird\Bird;
use Bird\Cardinal;
use Bird\Parrot;

// Canine
use Canine\Canine;
use Canine\Dog;
use Canine\Wolf;

// Felines
use Feline\Feline;
use Feline\HouseCat;
use Feline\Jaguar;
use Feline\Lion;

/**
 * Auto loader. Loads in the classes as needed
 */
spl_autoload_register(function ($class) {

    // removes and replaces \ to make a better path for picky systems
    $replace = str_replace("\\","/", $class);
    require_once '../includes/classes/' . $class . '.php';
});

// Initiates instance of Animal class
$animal = new Animal();
var_dump($animal);
// Dumps out the eat, drink, speak, and move
var_dump($animal->eat());
var_dump($animal->drink());
var_dump($animal->speak());
var_dump($animal->move());

// Initiates instances of Bird and sub classes
$bird = new Bird();
var_dump($bird->eat());
var_dump($bird->drink());
var_dump($bird->speak());
var_dump($bird->move());
$cardinal = new Cardinal();
var_dump($cardinal->eat());
var_dump($cardinal->drink());
var_dump($cardinal->speak());
var_dump($cardinal->move());
$parrot = new Parrot();
var_dump($parrot->eat());
var_dump($parrot->drink());
var_dump($parrot->speak());
var_dump($parrot->move());

// Initiates instances of Animal class
$canine = new Canine();
var_dump($canine->eat());
var_dump($canine->drink());
var_dump($canine->speak());
var_dump($canine->move());
$dog = new Dog();
var_dump($dog->eat());
var_dump($dog->drink());
var_dump($dog->speak());
var_dump($dog->move());
var_dump($dog->tailwag());
$wolf = new Wolf();
var_dump($wolf->eat());
var_dump($wolf->drink());
var_dump($wolf->speak());
var_dump($wolf->move());
var_dump($wolf->tailwag());

// Initiates instances of Feline and sub classes
$feline = new Feline();
var_dump($feline->eat());
var_dump($feline->drink());
var_dump($feline->speak());
var_dump($feline->move());
$houseCat = new HouseCat();
var_dump($houseCat->eat());
var_dump($houseCat->drink());
var_dump($houseCat->speak());
var_dump($houseCat->move());
var_dump($houseCat->tailwag());
$jaguar = new Jaguar();
var_dump($jaguar->eat());
var_dump($jaguar->drink());
var_dump($jaguar->speak());
var_dump($jaguar->move());
var_dump($jaguar->tailwag());
$lion = new Lion();
var_dump($lion->eat());
var_dump($lion->drink());
var_dump($lion->speak());
var_dump($lion->move());
var_dump($lion->tailwag());

// Creates a collection requiring one of each
$park = new Park($cardinal, $dog, $houseCat);
var_dump($park);
$zoo = new Park($parrot, $wolf, $jaguar);
var_dump($zoo);

// stops php function
die;