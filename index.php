<?php
/**
 * Created by Mahesh Kathiriya.
 * User: Mahesh Kathiriya
 * Product: payza-ipn-master-php
 * Date: 31.01.2018
 * Time: 16:21
 * All rights and copyrights are owned by Mahesh Kathiriya®
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payza Payment Form</title>
    <style>
        label {
            display: block;
            padding: 5px 0;
        }

        input {
            display: block;
        }
    </style>
</head>

<body>

<form method="post" action="https://secure.payza.com/checkout">
    
    <input type="hidden" name="ap_merchant" value="yourmerchantid@your.com"/>
     <input type="hidden" name="ap_testmode" value="1"/>
    <input type="hidden" name="ap_purchasetype" value="item"/>
    <input type="hidden" name="ap_itemname" value="Computer Player"/>
    <input type="hidden" name="ap_amount" value="2"/>
    <input type="hidden" name="ap_currency" value="USD"/>
    <input type="hidden" name="ap_description" value="Audio equipment"/>
    <input type="hidden" name="ap_itemcode" value="HIJ1233"/>
    <input type="hidden" name="ap_quantity" value="2"/>
    <input type="hidden" name="ap_additionalcharges" value="2.19"/>
    <input type="hidden" name="ap_shippingcharges" value="6.99"/>
    <input type="hidden" name="ap_taxamount" value="2.49"/>
    <input type="hidden" name="ap_discountamount" value="4.99"/>
    
    <input type="hidden" name="ap_returnurl" value="http://localhost/mk/payza-ipn-master/finish.php"/>
    <input type="hidden" name="ap_cancelurl" value="http://localhost/mk/payza-ipn-master/cancel.php"/>
    <input type="hidden" name="apc_1" value="Blue"/>
    <input type="hidden" name="apc_2" value="UE plug"/>
    <input type="hidden" name="apc_3" value="UE plug 2"/>
    <input type="hidden" name="apc_4" value="UE plug 4"/>
    <input type="hidden" name="apc_5" value="UE plug 5"/>
    <input type="hidden" name="apc_6" value="UE plug 6"/>
    <input type="hidden" name="ap_alerturl" value="http://localhost/mk/payza-ipn-master/ipn.php"/>
    <input type="hidden" name="ap_ipnversion" value="2"/>
    <input type="hidden" name="ap_test" value="1"/>
    <input type="image" src="https://www.payza.com/images/payza-buy-now.png"/>
    </form>
</body>
</html>
