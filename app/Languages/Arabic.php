<?php

namespace App\Languages;

class Arabic extends Language
{
    protected $languageName = "Arabic";

    public function hello() : string
    {
        return "مرحبا";
    }
}