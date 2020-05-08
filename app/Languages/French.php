<?php

namespace App\Languages;

class French extends Language
{
    protected $languageName = "French";

    public function hello()
    {
        return "Bonjour";
    }
}