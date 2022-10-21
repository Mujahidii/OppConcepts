<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface GateWay
{
    public function findStripeCustomer();

    public function findStripeSubscriptionByCustomer();
}
