<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumanWorker implements SleepAbleInterface, WorkAbleInterface, ManageAbleInterface
{

    /**
     * IN THIS CLASS IMPLEMENTS 3 INTERFACE
     * SLEEP_ABLE INTERFACE HAS ONLY SLEEP METHOD
     * WORK_ABLE INTERFACE HAS ONLY WORK METHOD
     * HERE IS ONE QUESTION WE CAN DEFINE THE BOTH METHOD IN ONE INTERFACE WHY WE CAN THIS
     * THE ANSWER: "YES WE CAN BUT IF WE DO THAT BUT IF ONE CLASS JUST WANT TO IMPLEMENT THE ONE METHOD
     * FOR EXAMPLE WORK METHOD THEN IT'S GIVES ERROR THAT'S WHY AND SAY MUST IMPLEMENT THE INTERFACE ALL METHODS"
     * FOR SOLUTION OF THIS ISSUE WE IMPLEMENT THE 3RD INTERFACE WHICH IS MANAGEABLE INTERFACE
     */


    public function sleep()
    {
        echo "Sleep from HumanWorker";
        // TODO: Implement sleep() method.
    }

    public function work()
    {
        echo "Work from HumanWorker";
        // TODO: Implement work() method.
    }

    public function beManaged()
    {
        $this->work();
        $this->sleep();
        // TODO: Implement beManaged() method.
    }
}
