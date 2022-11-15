<?php

namespace App\Animal;

class Sheep implements AnimalInterface
{
    public function __construct(private readonly string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function eat(): void
    {
        echo 'Ест' . PHP_EOL;
    }
}