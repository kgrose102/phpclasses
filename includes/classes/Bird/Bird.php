<?php

namespace Bird;

use Animal;

class Bird extends Animal
{
    /**
     * @var string
     */
    protected $name = 'bird';

    /**
     * A short message about eating food
     * @return string
     */
    public function eat(): string
    {
        return "The " . $this->name . " chewed on some sunflower seeds.";
    }

    // public function fly(): string
    // {
    //     return "The" . $this->name . "flew away without giving you a second thought.";
    // }

    /**
     * A short message about flying
     * sets the default for bird move as them flying
     * @return string
     */
    public function move(): string
    {
        return "The " . $this->name . " flew away from you.";
    }
}