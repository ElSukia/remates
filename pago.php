


<?php require_once 'includes/cabecera.php';?>
<?php require_once 'includes/lateral.php';?>

  
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'config.php'; ?>
<?php 
// Start session 
if (!isset($_SESSION)) {
    session_start();
}
 
// Get logged-in user ID from sesion 
// Session name need to be changed as per your system 
$loggedInUserID = !empty($_SESSION['usuario1']['id'])?$_SESSION['usuario1']['id']:0; 
?>
<div id="principal">
<div class="form-group">
    <label>Validar Suscripción:</label>
    <select name="validity" onchange="getSubsPrice(this);">
        <option value="1" selected="selected">1 Mes</option>
        <option value="3">3 Meses</option>
        <option value="6">6 Meses</option>
        <option value="9">9 Meses</option>
        <option value="12">12 Meses</option>
    </select>
</div>
<div class="form-group">
    <p><b>Precio Total:</b> <span id="subPrice"><?php echo '$'.$itemPrice.' USD'; ?></span></p>
</div>

<!-- Buy button -->
<form action="<?php echo PAYPAL_URL; ?>" method="post">
    <!-- Identify your business so that you can collect the payments -->
    <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
    <!-- Specify a subscriptions button. -->
    <input type="hidden" name="cmd" value="_xclick-subscriptions">
    <!-- Specify details about the subscription that buyers will purchase -->
    <input type="hidden" name="item_name" value="<?php echo $itemName; ?>">
    <input type="hidden" name="item_number" value="<?php echo $itemNumber; ?>">
    <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
    <input type="hidden" name="a3" id="paypalAmt" value="<?php echo $itemPrice; ?>">
    <input type="hidden" name="p3" id="paypalValid" value="1">
    <input type="hidden" name="t3" value="M">
    <!-- Custom variable user ID -->
    <input type="hidden" name="custom" value="<?php echo $loggedInUserID; ?>">
    <!-- Specify urls -->
    <input type="hidden" name="cancel_return" value="http://munozgamboa.com/cancel.php">
    <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
    <input type="hidden" name="notify_url" value="http://munozgamboa.com/paypal_ipn.php">
    <!-- Display the payment button -->
    <input class="buy-btn" type="submit" value="Buy Subscription">
</form>
<script>
function getSubsPrice(obj){
	var month = obj.value;
	var price = (month * <?php echo $itemPrice; ?>);
	document.getElementById('subPrice').innerHTML = '$'+price+' USD';
	document.getElementById('paypalValid').value = month;
	document.getElementById('paypalAmt').value = price;
}
</script>

</div>