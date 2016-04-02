<?php 

echo "<pre>";
print_r($_POST);
 echo "</pre>";

require_once('stripe/init.php');
	

  $stripe = array(
	'secret_key'      => 'sk_test_mDQX12PmAzB0AX88j2fRZ9cd',
	'publishable_key' => '<YOUR PUBLISHABLE STRIPE API KEY>'
);
  \Stripe\Stripe::setApiKey($stripe['secret_key']);

try {
    if (!isset($_POST['stripeToken'])) throw new Exception("The Stripe Token was not generated correctly");
    $charge = \Stripe\Charge::create(array(
      'source'     => $_POST['stripeToken'],
      'amount'   => 100,
      'currency' => 'usd'
    ));
    
     echo "\n";
	echo "<pre>";
    print_r($charge);
    echo "</pre>";
    
    
  } //catch the errors in any way you like


 catch (Stripe_InvalidRequestError $e) {
  // Invalid parameters were supplied to Stripe's API
echo "\n";
	echo "<pre>";
print_r($e);
echo "</pre>";
} catch (Stripe_AuthenticationError $e) {
  // Authentication with Stripe's API failed
  // (maybe you changed API keys recently)
echo "\n";
	echo "<pre>";
print_r($e);
echo "</pre>";
} catch (Stripe_ApiConnectionError $e) {
  // Network communication with Stripe failed
  echo "\n";
	echo "<pre>";
print_r($e);
echo "</pre>";
} catch (Stripe_Error $e) {
echo "\n";
	echo "<pre>";
print_r($e);
echo "</pre>";
  // Display a very generic error to the user, and maybe send
  // yourself an email
} catch (Exception $e) {
echo "\n";
	echo "<pre>";
print_r($e);
echo "</pre>";
  // Something else happened, completely unrelated to Stripe
}
?>