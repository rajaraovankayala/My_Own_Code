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
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
</head>
<body>
<?php foreach($items as $item)
    {
        echo form_open('cart_controller/add');
        echo form_hidden('product_id',$item->product_id);
        echo form_hidden('price',$item->unit_price);
        echo form_hidden('name',$item->product_name); ?>
	<div class="container">
		<div class="row">
		    <div class="col-xs-4 item-photo" style="margin-top:30px;">
				<img src="<?php echo base_url().'images/products/'.$item->picture;?>" width="350" height="350"/>
			</div>
			<div class="col-xs-5" style="border:0px solid gray">
				<h3><?php echo $item->product_name ; ?></h3>
				<h4 style="color:#337ab7"> <a href="#">Men's t-shirts</a> </h4>
	
				
				<h4 class="title-price"><small>Price</small></h4>
				<h3 style="margin-top:0px;"><?php echo "Rs.".$item->unit_price ; ?></h3>
	
				
				<div class="section">
					<h4 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h4>
					<div>
						<div class="attr" style="width:25px;background:#5a5a5a;"></div>
						<div class="attr" style="width:25px;background:white;"></div>
					</div>
				</div>
				<div class="section" style="padding-bottom:5px;">
					<h4 class="title-attr"><small>Size</small></h4>
					<div>
						<div class="attr2">M</div>
						<div class="attr2">L</div>
					</div>
				</div>   
				<div class="section" style="padding-bottom:20px;">
					<h6 class="title-attr"><small>Quantity</small></h6>                    
					<div>
						<div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
						<input value="1" />
						<div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
					</div>
				</div>                
				<div class="section" style="padding-bottom:20px;">
					<!--<button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Add to cart</button>-->
					<input type='submit' value='Add to Cart' name='submit'>
					<h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span>favourite this one</a></h6>
				</div>                                        
			</div>                              
	
			<div class="col-xs-9">
				<ul class="menu-items">
					<li class="active">Product Information</li>
				</ul>
				<div class="form-control" style="border:1px solid black;height:100px;width:1200px">
                    <h4><?php echo $item->product_description; ?></h4>
                </div>
                </div>		
        </div>
    </div>
<?php } ?>
    </body>
</html>
