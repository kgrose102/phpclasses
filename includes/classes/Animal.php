<?php

class Animal 
{
    /**
     * @var string
     */
    protected $name = 'animal';

    /**
     * A short message about eating food
     * @return string
     */
    public function eat(): string
    {
        return "The " . $this->name . " ate the food.";
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
        return "The " . $this->name . " spoke to your soul.";
    }

    /**
     * A short message about the animal moving
     * @return string
     */
    public function move(): string
    {
        return "The " . $this->name . " sauntered away from you.";
    }
}