<?php

namespace Feline;

use Animal;

class Feline extends Animal
{
    /**
     * @var string
     */
    protected $name = 'feline';

    // public function run(): string
    // {
    //     return "The" . $this->name . "sauntered away from you.";
    // }

    public function move(): string
    {
        return "The " . $this->name . " slowly walked away from you.";
    }
}