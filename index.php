<!DOCTYPE html>
<html>
<body>

<form method="post" action="pay.php">
    <button id="confirmBtn">Pay</button>
</form>

<script>
    window.paypalCheckoutReady = function() {
        paypal.checkout.setup("W6CUMMNCDYVCL", {
            environment: 'sandbox',
            locale: 'pt_BR',
            button: 'confirmBtn'
        });
    }
</script>
<script async src="//www.paypalobjects.com/api/checkout.js"></script>

</body>
</html>