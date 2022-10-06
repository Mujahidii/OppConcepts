<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstThousandPointController extends AchievementTypeController
{
    public function name()
    {
        return 'first-thousand-points';
    }

    public function icon()
    {
        return 'first-thousand-points.png';
    }

    public function qualifier($user)
    {

    }
}
