<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignMonitorController
{
    public $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function subscribe($email)
    {
        echo $email;
    }
}
