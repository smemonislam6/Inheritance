<?php
/**
 * Design a parent class Employee with properties name and salary, and a method calculateBonus().
 * Create two child classes Manager and Developer that inherit from Employee,
 * each implementing a different bonus calculation logic.
 */

class Employee
{
    protected $name;
    protected $salary;

    public function __construct(string $name, float $salary)
    {
        $this->name   = $name;
        $this->salary = $salary;
    }

    public function calculateBonus(): float
    {
        return $this->salary * 0.1;
    }
}

class Manager extends Employee
{
    public function calculateBonus(): float
    {
        return $this->salary * 0.2;
    }

}

class Developer extends Employee
{
    public function calculateBonus(): float
    {
        return $this->salary * 0.3;
    }
}

$manager = new Manager('John Doe', 2000);
echo 'Manager Bonus: ' . $manager->calculateBonus() . PHP_EOL;

$developer = new Developer('John Mike', 20000);
echo 'Developer Bonus: ' . $developer->calculateBonus() . PHP_EOL;
