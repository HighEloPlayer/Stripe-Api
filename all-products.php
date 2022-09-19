<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIL3DUPbcuEhd2RznNDvDqnwL6A1sExfwyObbGcR7UXRmDCO1V4npC2wLwFdMKuxvkS8Xc2JOH4WeKpFSnhL0400bSXPrlZL'
);
$result = $stripe->products->all(['limit' => 3]);
var_dump($result);
