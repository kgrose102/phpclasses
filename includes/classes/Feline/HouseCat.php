<?php

namespace Feline;

use Traits\TailWags;

class HouseCat extends Feline
{
    use TailWags;
    /**
     * @var string
     */
    protected $name = 'houseCat';

    public function eat(): string
    {
        return "The " . $this->name . " ate the Fanciest Meal in the world.";
    }

    public function drink(): string
    {
        return "The " . $this->name . " calmly licked up the water.";
    }

    /**
     * A short message about the animal speaking
     * @return string
     */
    public function speak(): string
    {
        return "The " . $this->name . " meowed at you wanting pets.";
    }

    /**
     * A short message about the animal moving
     * @return string
     */
    
    
}