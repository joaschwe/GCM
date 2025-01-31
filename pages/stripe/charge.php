<?php
require_once('../../includes/stripe-checkout.php');

$token  = $_POST['stripeToken'];
$email  = $_POST['stripeEmail'];

$customer = \Stripe\Customer::create([
    'email' => $email,
    'source'  => $token,
]);

$charge = \Stripe\Charge::create([
    'customer' => $customer->id,
    'amount'   => 5000,
    'currency' => 'usd',
]);

echo '<h1>Successfully charged $50.00!</h1>';
?>