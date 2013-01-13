<?php

require_once __DIR__.'/vendor/autoload.php';

use SMTC\City;
use SMTC\Country;
use SMTC\Person;
use Symfony\Component\Form\Util\PropertyPath;

$spain = new Country('Spain');
$valencia = new City('Valencia');
$valencia->setCountry($spain);

$bob = new Person('Bob');
$bob->setCity($valencia);

// getValue

$propertyPath = new PropertyPath('name');
echo $propertyPath->getValue($bob);
// $bob->getName() - Bob

$propertyPath = new PropertyPath('married');
echo $propertyPath->getValue($bob);
// $bob->isMarried() - false

$propertyPath = new PropertyPath('city.name');
echo $propertyPath->getValue($bob);
// $bob->getCiy()->getName() - Valencia

$propertyPath = new PropertyPath('city.country.name');
echo $propertyPath->getValue($bob);
// $bob->getCiy()->getCountry()->getName() - Spain

// setValue

$propertyPath = new PropertyPath('name');
$propertyPath->setValue($bob, 'Mary'); // $bob->setName('Mary')

$propertyPath = new PropertyPath('married');
$propertyPath->setValue($bob, true); // $bob->setMarried(true) - false

$propertyPath = new PropertyPath('city.name');
$propertyPath->setValue($bob, 'London'); // $bob->getCiy()->setName('London')

$propertyPath = new PropertyPath('city.country.name');
$propertyPath->setValue($bob, 'England'); // $bob->getCiy()->getCountry()->setName('England')

var_dump($bob);