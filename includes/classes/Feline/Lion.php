<?php

namespace Feline;

use Traits\TailWags;

class Lion extends Feline
{
    use TailWags;
    
    /**
     * @var string
     */
    protected $name = 'lion';

    /**
     * @return string
     */
    public function eat(): string
    {
        return "The " . $this->name . " ate the zebra while staring into your eyes saying your next.";
    }

    /**
     * A short message about drinking
     * @return string
     */
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
        return "The " . $this->name . " is gonna be the mighty king, like no king was before.";
    }

    /**
     * A short message about the animal moving
     * @return string
     */
    public function move(): string
    {
        return "The " . $this->name . " stalked it's prey.";
    }
}