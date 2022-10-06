<?php

use Bird\Bird;
use Canine\Canine;
use Feline\Feline;

class Park
{
    /**
     * @var string
     */
    protected $name = 'park';

    /**
     * @var string
     */
    protected $bird;

    /**
     * @var string
     */
    protected $canine;

    /**
     * @var string
     */
    protected $feline;

    /**
     * constructs a function in the class that requres one of each type restricted with typends.
     * @param Bird $bird
     * @param Canine $canine
     * @param Feline $feline
     */
    public function __construct(Bird $bird, Canine $canine, Feline $feline)
    {
        $this->bird = $bird;
        $this->canine = $canine;
        $this->feline = $feline;
    }
}