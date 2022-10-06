<?php

namespace Canine;

use Traits\TailWags;

class Wolf extends Canine
{

    /**
     * @var string
     */
    protected $name = 'wolf';

    public function eat(): string
    {
        return "The " . $this->name . " caught an innocent Bugs Bunny and swallowed him.";
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
        return "The " . $this->name . " spoke to your soul.";
    }

    /**
     * A short message about the animal moving
     * @return string
     */
    public function move(): string
    {
        return "The " . $this->name . " ran towards you with hunger in its eyes.";
    }

    public function tailWag(): string
    {
    /**
     * @return string
     */
        return 'They wag their tail excitedly!';
    }
}