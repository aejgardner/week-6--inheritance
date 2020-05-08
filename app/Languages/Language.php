<?php

namespace App\Languages;

abstract class Language
{
    // protected $languageName;

    public function name() : string
    {
        return $this->languageName;
    }

    abstract function hello();
}