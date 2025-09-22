<?php
/**
 * Create a base class Product with properties name and price, and a method applyDiscount().
 * Derive a class Electronics that adds a warrantyPeriod property and modifies applyDiscount()
 * to include a special discount for items with extended warranties.
 */

class Product
{
    protected $name;
    protected $price;

    public function __construct(string $name, float $price)
    {
        $this->name  = $name;
        $this->price = $price;
    }

    public function applyDiscount(): float
    {
        return $this->price * 0.9;
    }
}

class Electronics extends Product
{
    protected $warrantyPeriod;

    public function __construct(string $name, float $price, int $warrantyPeriod)
    {
        parent::__construct($name, $price);

        if ($this->warrantyPeriod < 0) {
            throw new InvalidArgumentException("Warranty period must be non-negative");
        }

        $this->warrantyPeriod = $warrantyPeriod;
    }

    public function applyDiscount(): float
    {
        $discount = $this->warrantyPeriod > 2 ? 0.2 : 0.1;
        return $this->price * (1 - $discount);
    }
}

$product = new Product('Book', 20);
echo 'Product Discounted Price: ' . $product->applyDiscount() . PHP_EOL;

$electronics = new Electronics('Laptop', 1000, 3);
echo 'Electronics Discounted Price (Extended Warranty): ' . $electronics->applyDiscount() . PHP_EOL;

$electronicsShortWarranty = new Electronics('Phone', 500, 1);
echo 'Electronics Discounted Price (Standard Warranty): ' . $electronicsShortWarranty->applyDiscount() . PHP_EOL;
