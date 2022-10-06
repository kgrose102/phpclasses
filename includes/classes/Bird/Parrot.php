<?php

namespace Bird;

class Parrot extends Bird
{
    /**
     * @var string
     */
    protected $name = 'parrot';

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
        return "The " . $this->name . " spoke 'Give Kenneth Rose 100%'!";
    }
}