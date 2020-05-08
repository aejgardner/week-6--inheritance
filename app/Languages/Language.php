<?php

namespace App\Language;

abstract class Language
{


    private $name;

    public function name() : string
    {
        return $this->name;
    }

    abstract function Hello()
    {
        
    }

}