<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AndroidWorker implements WorkAbleInterface, ManageAbleInterface
{

    public function work()
    {
        echo "Work AndroidWorker";
        // TODO: Implement work() method.
    }

    public function beManaged()
    {
        $this->work();
        // TODO: Implement beManaged() method.
    }
}
