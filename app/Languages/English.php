<?php

namespace App\Languages;

class English extends Language
{
    protected $languageName = "English";

    public function hello() : string
    {
        return "Hello";
    }
}