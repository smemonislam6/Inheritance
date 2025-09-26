<?php

interface SoundMaker
{
    public function makeSound();
}

class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function performAction(SoundMaker $animal)
    {
        return $this->name . " hears: " . $animal->makeSound();
    }
}

class Cat extends Animal implements SoundMaker
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function makeSound()
    {
        return "Meow!";
    }
}

class Dog extends Animal implements SoundMaker
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function makeSound()
    {
        return "Woof!";
    }
}

$cat = new Cat('Genric Cat');
$dog = new Dog('Genric Dog');

$animal = new Animal('Observer');
echo $animal->performAction($cat) . PHP_EOL;
echo $animal->performAction($dog) . PHP_EOL;
