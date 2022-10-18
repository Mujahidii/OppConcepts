<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsLetterSubscriptionController
{
    public function store(CampaignMonitorController $campaignMonitorController)
    {
        $campaignMonitorController->subscribe('mujahid@gmail.com');
    }
}
