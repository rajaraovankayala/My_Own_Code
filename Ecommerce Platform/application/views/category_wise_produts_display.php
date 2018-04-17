<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 4/13/2018
 * Time: 3:26 PM
 */
?>
<div>
        <?php
        if($get_sub_category_products->num_rows() > 0)
        {
            foreach($get_sub_category_products-> result() as $row)
            {
                ?>
                <?php $path = base_url("/images/products/$row->picture")?>
                <div style="display:inline-block;margin-left:15px;">
                    <?php echo "<img src='$path' alt='image'/>";?><br/><br/>
                    <center>Product Id:<?php echo $row->product_id;?> <?php echo $row->product_name;?></center>
                </div>

            <?php
            }
        }
        else
        {
            ?>

                <td colspan="2"><?php echo "No data found";?></td>

            <?php
        }
        ?>
    </div>

