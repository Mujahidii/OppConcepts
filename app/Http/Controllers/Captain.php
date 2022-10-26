<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Captain
{
    public function manage(ManageAbleInterface $manageAble)
    {
        $manageAble->beManaged();
    }
}
