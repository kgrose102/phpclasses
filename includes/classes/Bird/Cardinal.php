<?php

namespace Bird;


class Cardinal extends Bird
{
    /**
     * @var string
     */
    protected $name = 'cardinal';

    public function eat(): string
    {
        return "The " . $this->name . " swallowed the worm.";
    }

    public function drink(): string
    {
        return $this->name . " guzzled the water.";
    }

    /**
     * A short message about the animal speaking
     * @return string
     */
    public function speak(): string
    {
        return "The " . $this->name . " cawed unexpectantly. Is it really a Cardinal?";
    }

}