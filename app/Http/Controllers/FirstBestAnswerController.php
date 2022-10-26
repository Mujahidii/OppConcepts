<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstBestAnswerController extends AchievementTypeController
{
    public function name()
    {
        return 'first-best-answer';
    }

    public function icon()
    {
        return 'first-best-answer.png';
    }

    public function qualifier($user)
    {
        return $user;
    }
}
