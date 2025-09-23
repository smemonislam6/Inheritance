<?php

/**
 * Build a class Person with properties name and age, and a method introduce().
 * Create a subclass Student that adds a gradeLevel property and overrides introduce() to include the grade level.
 */

class Person
{
    protected string $name;
    protected int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function introduce(): string
    {
        return "My name is {$this->name} and {$this->age} years old.";
    }
}

class Student extends Person
{
    protected string $gradeLevel;
    public function __construct(string $name, int $age, string $gradeLevel)
    {
        parent::__construct($name, $age);

        $this->gradeLevel = $gradeLevel;
    }

    public function introduce(): string
    {
        return "My name is {$this->name} and {$this->age} years old. I am in grade {$this->gradeLevel}.";
    }
}

$person = new Person('Alice', 30);
echo $person->introduce() . PHP_EOL;

$student = new Student('Bob', 20, 'A');
echo $student->introduce() . PHP_EOL;
