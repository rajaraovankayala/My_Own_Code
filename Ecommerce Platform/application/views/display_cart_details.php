<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 4/19/2018
 * Time: 3:52 PM
 */


?>
<h4 style="text-align:right;"><?=anchor('Payment_process/payment_methods', 'Proceed to pay');?></h4>
    <h1>Cart Items</h1>

<?php
foreach($cart->result() as $row)
{

    echo "product id:".$row->product_id."           ";
    echo "product name:".$row->product_name;
    $path = base_url("/images/products/$row->picture");

    echo "<img src='$path' alt='image'/>";
    echo "<br/>";
}
