<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Subscription
{
    /**
     * @var GateWay
     */
    public $gateWay;

    public function __construct(GateWay $gateWay)
    {
        $this->gateWay = $gateWay;
    }

    public function create()
    {

    }

    public function cancel()
    {
        $this->gateWay->findStripeSubscriptionByCustomer();

        $this->gateWay->findStripeCustomer();
    }

    public function invoice()
    {

    }
}
