<?php

/**
 * Implement a parent class User with properties username and email, and a method displayInfo().
 * Create a child class Admin that inherits from User, adds a role property,
 * and overrides displayInfo() to include the role.
 */

class User
{
    protected $username;
    protected $email;

    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email    = $email;
    }

    public function displayInfo(): string
    {
        return "Username: {$this->username}, Email: {$this->email}";
    }
}

class Admin extends User
{
    protected $role;

    public function __construct(string $username, string $email, string $role)
    {
        parent::__construct($username, $email);

        $this->role = $role;
    }

    public function displayInfo(): string
    {
        return "Username: {$this->username}, Email: {$this->email} and Role: {$this->role}";
    }
}

$user = new User('johndoe', 'johndoe@gmail.com');
echo $user->displayInfo();

$admin = new Admin('admin', 'admin@gmail.com', 'Admin');
echo $admin->displayInfo();
