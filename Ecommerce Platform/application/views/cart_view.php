<?php
/**
 * Created by PhpStorm.
 * User: Dinesh.Grandhi
 * Date: 4/13/2018
 * Time: 3:09 PM
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        function empty_cart()
        {
          var result=confirm('Are you sure to clear the cart');
            if(result)
            {
                window.location = "<?php echo base_url(); ?>index.php/cart_controller/remove/all";
            }
            else
            {
                return false;
            }
        }
    </script>

</head>
<body>
    <div class="container">
        <h2>Customer shopping cart</h2>
        <div>
            <?php
                $grand_total=0;
                $i=0;
                $cart=$this->cart->contents();
                if($cart)
                    { ?>
                        <table class="table table-striped">
                            <tr>
                                <th>Product Name</th>
                                <th>Product id</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>options</th>
                            </tr>
                            <?php
                                echo form_open('cart_controller/update_cart');
                                foreach($cart as $item)
                                {
                                    echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                                    echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                                    echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                                    echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                                    echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                                    echo"<tr>";
                                    echo"<td>".$item['name']."</td>";
                                    echo"<td>".$item['id']."</td>";
                                    echo"<td>".number_format($item['price'],2)."</td>";
                                    echo "<td>".form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"')."</td>";
                                    echo"<td>".anchor('cart_controller/remove/' . $item['rowid'],'Remove')."</td>";
                                    echo"</tr>";
                                    $grand_total=$grand_total+$item['subtotal'];
                                } ?>
                        </table>
                        <b>Order Total :<?php echo number_format($grand_total,2);?></b><br><br>
            <input type="button" class="btn-primary" value="Place order" onclick="window.location='show_billing'">
            <input type="submit" class="btn-info" value="Update cart">
            <input type="button" value="Clear cart" class="btn-warning" onclick="return empty_cart()">

            <?php   }
                else
                {
                    echo"<h4> cart is empty </h4>";
                }?>
        </div>
    </div>
</body>
</html>
