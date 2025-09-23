<?php
/**
 * Define a base class Item with properties id and name, and a method getDescription().
 * Create a subclass Book that adds an author property and overrides getDescription() to include the author’s name.
 */

class Item
{
    protected int $id;
    protected string $name;

    public function __construct(int $id, string $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return "Item ID: {$this->id}, Name: {$this->name}";
    }
}

class Book extends Item
{
    protected string $author;

    public function __construct(int $id, string $name, string $author)
    {
        parent::__construct($id, $name);
        $this->author = $author;
    }

    public function getDescription(): string
    {
        return "Item ID: {$this->id}, Name: {$this->name}, Author: {$this->author}";
    }
}

$item = new Item(1, 'Generic Item');
echo $item->getDescription() . PHP_EOL;

$book = new Book(2, '1984', 'George Orwell');
echo $book->getDescription() . PHP_EOL;
