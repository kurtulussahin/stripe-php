<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payments using Stripe</title>
</head>
<body>

<form action="charge.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_2fggxnlOQof0SUo0fTnd4Xqp"
    data-image="http://goo.gl/TTIuP2"
    data-name="product"
    data-description="product ($1.00)"
    data-amount="100"
    data-currency="USD"
    data-panel-label="ödeme yap :"
    data-billing-address="true"
    data-shipping-address="true"
    data-bitcoin="true"
    data-alipay="true"
    >
  </script>
</form>

</body>
</html>


