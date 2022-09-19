<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIL3DUPbcuEhd2RznNDvDqnwL6A1sExfwyObbGcR7UXRmDCO1V4npC2wLwFdMKuxvkS8Xc2JOH4WeKpFSnhL0400bSXPrlZL'
);
$product = $stripe->products->create([
  'name' => 'Starter Subscription',
  'description' => '12/Month Subscription'
  
]);
Echo "Done! now here is your starter subscription product id: " . $product->id . "\n";

$price = $stripe->prices->create([
    'unit_amount' => 2000,
    'currency' => 'usd',
    'recurring' => ['interval' => 'month'],
    'product' => $product ['id'],
]);
echo "Done! now here is your premium subscription price id: " . $price->id . "\n";
