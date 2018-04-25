<?php
/**
 * Created by PhpStorm.
 * User: Dinesh.Grandhi
 * Date: 4/13/2018
 * Time: 11:20 AM
 */?>
 
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url('css/productstyles.css')?>">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>
		/*function addtocart()
		{
			document.form1.action="cart_controller/show_cart";
			document.form1.target="_blank";
			document.form1.submit();
			return true;
		}
		function viewproduct()
		{
			document.form1.action="cart_controller/show_cart";
			document.form1.target="_blank";
			document.form1.submit();
			return true;
		}*/
	</script>
		
</head>
<body>

<?php
    /*if(!($_SESSION['totalitems']==0))
    {
        return true;
    }
    else
    {
        $_SESSION['totalitems']=0;
    };*/
    $cols = 3;
    $counter = 1;
    $container_class = 'container-fluid mainbox';
    $row_class = 'row rowbox';
    $col_class = 'col-sm-4';
        echo '<div class="'.$container_class.'" style="margin-left:100px;">';
        foreach($get_sub_category_products-> result() as $product)
        {
        if(($counter % $cols) == 1)
        {
            echo '<div class="'.$row_class.'">';
        }
        echo form_open('cart_controller/add');
        echo form_hidden('product_id',$product->product_id);
        echo form_hidden('price',$product->unit_price);
        echo form_hidden('name',$product->product_name);
        $img = base_url("/images/products/$product->picture");
        echo '<div class="'.$col_class.'"><img src="'.$img.'" width="250" height="260"/>';
        echo'<div> <h5>'.$product->product_name.'</h5></div>';
		echo'<div> <p>Rs.'.$product->unit_price.'</p></div>';
        /*echo"<input type='submit' value='View Product' onclick='return viewproduct();'>";*/
        /*<a href="<?php echo base_url()."home/showproduct/".$product->product_id ; ?>"> View Product </a>*/
        echo"<input type='submit' value='Add to Cart' name='submit'> ";
        echo"<input type='submit' value='View Product' name='submit'><br/><br/>";
        echo form_close();
        echo'</div>';
        if(($counter % $cols) == 0)
        {
            echo '</div>';
        }
        $counter++;
        }

    echo '</div>';

?>
</body>
</html>

