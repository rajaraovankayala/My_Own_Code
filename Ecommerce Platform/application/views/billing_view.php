<?php
    $grand_total = 0;
    if ($cart = $this->cart->contents())
    {
        foreach ($cart as $item)
        {
            $grand_total = $grand_total + $item['subtotal'];
        }
    }

?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="bill_info">
        <form name="billing" method="post" action="<?php echo base_url() . 'index.php/cart_controller/save_order' ?>" >
        <input type="hidden" name="command" />
        <div align="center">
            <h1 align="center">Billing Details</h1><br>
            <table class="table table-center" style="margin-left:-30px;width:50%;font-family:'verdana';font-size:18px;">
                <tr><td>Order Total:</td><td><strong>Rs.<?php echo number_format($grand_total, 2); ?></strong></td></tr>
                <tr><td>Your Name:</td><td><input type="text" name="name" required=""/></td></tr>
                <tr><td>Address:</td><td><input type="text" name="address" required="" /></td></tr>
                <tr><td>Email:</td><td><input type="text" name="email" required="" /></td></tr>
                <tr><td>Phone:</td><td><input type="text" name="phone" required="" /></td></tr>
            </table>
            <div style="float:left;margin-left:400px">
                <?php echo "<a  href=" . base_url() . "index.php/cart_controller/show_cart>Back</a>"; ?>
                <div style="margin-left:190px;margin-top:-22px;">
                   <?php echo"<input class='btn-info' type='submit' value='Proceed to pay'/>"; ?>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>