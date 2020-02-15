<?php  
// Product information 
$itemName = 'Membership Subscription'; 
$itemNumber = 'MS123456'; 
 
// Subscription price for one month 
$itemPrice = 5.00; 
   
// PayPal configuration  
define('PAYPAL_ID', 'sb-5qdbs1036612@business.example.com');  
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE  
  
define('PAYPAL_RETURN_URL', 'http://www.munozgamboa.com/success.php');  
define('PAYPAL_CANCEL_URL', 'http://www.munozgamboa.com/cancel.php');  
define('PAYPAL_NOTIFY_URL', 'http://www.munozgamboa.com/paypal_ipn.php');  
define('PAYPAL_CURRENCY', 'USD');  
  
// Database configuration  
define('DB_HOST', 'munozgamboa.com');  
define('DB_USERNAME', 'munozgam_bran');  
define('DB_PASSWORD', 'CaballeroM0607G.,.');  
define('DB_NAME', 'munozgam_usuarios');  
  
// Change not required  
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");