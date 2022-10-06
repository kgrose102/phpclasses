<?php

namespace Feline;

use Traits\TailWags;

class Jaguar extends Feline
{
    use TailWags;
    /**
     * @var string
     */
    protected $name = 'jaguar';

    /**
    * A short message about the animal eating
    * @return string
    */
    public function eat(): string
    {
        return "The " . $this->name . " slowly ate their prey, then stored the rest hanging in a tree.";
    }

    /**
     * A short message about the animal drinking
     * @return string
     */
    public function drink(): string
    {
        return "The " . $this->name . " drank at the watering hole looking around for an afternoon snack.";
    }

    /**
     * A short message about the animal speaking
     * @return string
     */
    public function speak(): string
    {
        return "The " . $this->name . " growled cause you got to close to it's food.";
    }
}