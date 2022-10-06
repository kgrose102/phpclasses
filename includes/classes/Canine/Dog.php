<?php

namespace Canine;

use Traits\TailWags;

class Dog extends Canine
{
    use TailWags;
    /**
     * @var string
     */
    protected $name = 'dog';

    public function eat(): string
    {
        return "The " . $this->name . " inhaled the dog food. Then threw it up.";
    }

    public function drink(): string
    {
        return "The " . $this->name . " slurped the water.";
    }

    /**
     * A short message about the animal speaking
     * @return string
     */
    public function speak(): string
    {
        return "The " . $this->name . " went 'boorf'!";
    }

    /**
     * A short message about the animal moving
     * @return string
     */
    public function move(): string
    {
        return "The " . $this->name . " ran at you with excitement.";
    }
}