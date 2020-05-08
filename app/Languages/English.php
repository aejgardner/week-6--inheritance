<?php

namespace App\Language;

abstract class English extends Language
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