<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 3/28/2018
 * Time: 10:45 AM
 */
?>


    <div>
    <?php
    if($fetch_data->num_rows() > 0)
    {
        foreach($fetch_data-> result() as $row)
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

            <?php echo "No data found";?>
        <?php
    }
    ?>
    </div>


