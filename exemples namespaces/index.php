<?php

require_once './classes/paypal/Payment.php';
require_once './classes/stripe/Payment.php';
use \Classes\Stripe\payment as Stripe;
use \Classes\Paypal\payment as Paypal;

$stripe = new Stripe();
$paypal = new Paypal();
