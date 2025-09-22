<?php
/**
 * Define an abstract class Animal with an abstract method makeSound().
 * Create two classes Dog and Cat that extend Animal and implement makeSound()
 * to return unique sounds for each.
 */

abstract class Animal
{
    abstract public function makeSound(): string;
}

class Dog extends Animal
{
    public function makeSound(): string
    {
        return 'Woof';
    }
}

class Cat extends Animal
{
    public function makeSound(): string
    {
        return 'Meow';
    }
}

$dog = new Dog();
$dog->makeSound() . PHP_EOL;

$cat = new Cat();
$cat->makeSound() . PHP_EOL;
