<?php

namespace App\Language;

abstract class French extends Language
{

    private $name;

    public function name() : string
    {
        return $this->name;
    }

    public function Hello()
    {
        
    }

}