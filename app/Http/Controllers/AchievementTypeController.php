<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class AchievementTypeController
{
    public function name()
    {
        $class = (new \ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name()) . '.png');
    }

    abstract public function qualifier($user);
}
