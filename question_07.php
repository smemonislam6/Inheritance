<?php
/**
 * Design a class Account with a protected property balance and a method getBalance().
 * Create a subclass SavingsAccount that adds
 * an interestRate property and a method to calculate interest based on the balance
 */

class Account
{
    protected float $balance;

    public function __construct(float $balance)
    {
        if ($balance < 0) {
            throw new InvalidArgumentException("Balance must be non-negative");
        }

        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

class SavingsAccount extends Account
{
    protected float $interestRate;

    public function __construct(float $balance, float $interestRate)
    {
        parent::__construct($balance);

        if ($interestRate < 0) {
            throw new InvalidArgumentException("Interest rate cannot be negative");
        }

        $this->interestRate = $interestRate;
    }

    public function calculateInterest(): float
    {
        return $this->balance * ($this->interestRate / 100);
    }
}

$savingsAccount = new SavingsAccount(1000, 5);
echo 'Balance: ' . $savingsAccount->getBalance() . PHP_EOL;
echo 'Interest: ' . $savingsAccount->calculateInterest() . PHP_EOL;
