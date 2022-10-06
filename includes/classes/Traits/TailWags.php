<?php

namespace Traits;

trait TailWags

{
    public function tailWag(): string
    {
    /**
     * @return string
     */
        return "The " . $this->name . " slowly moves tail unsure about you.";
    }
}