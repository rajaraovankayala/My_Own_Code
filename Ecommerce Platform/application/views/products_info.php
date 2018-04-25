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


    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo.jpg" />

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/productdetails.css')?>">


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
<div class="slider-area">

    <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">

        <div class="slide-bulletz">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="carousel-indicators slide-indicators">
                            <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                            <li data-target="#slide-list" data-slide-to="1"></li>
                            <li data-target="#slide-list" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="single-slide">
                    <div class="slide-bg slide-one"></div>
                    <div class="slide-text-wrapper">
                        <div class="slide-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-6">
                                        <div class="slide-content">
                                            <h2>JD Sports</h2>
                                            <p>JD Sports Fashion plc, more commonly known as just JD, is a sports-fashion retail company based in Bury, Greater Manchester, England with shops throughout the United Kingdom </p>
                                            <a href="https://www.jdplc.com/company-information/history.aspx" " class="readmore">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-slide">
                    <div class="slide-bg slide-two"></div>
                    <div class="slide-text-wrapper">
                        <div class="slide-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-6">
                                        <div class="slide-content">
                                            <h2>Our Moto</h2>
                                            <p>The JD Group also has a significant branded young fashion offering following the acquisition of Scotts in December 2004 and Bank Fashion in December 2007.</p>
                                            <a href="https://www.jdplc.com/company-information/history.aspx" class="readmore">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-slide">
                    <div class="slide-bg slide-three"></div>
                    <div class="slide-text-wrapper">
                        <div class="slide-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-6">
                                        <div class="slide-content">
                                            <h2>We are superb</h2>
                                            <p>The JD Group now has well over 800 stores covering both sports and branded fashion but it all started when John David Sports was founded in 1981 with one shop in Bury.</p>

                                            <a href="" class="readmore">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> <!-- End slider area -->
</body>
<br/><br/>

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
        foreach($fetch_data->result() as $product)
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
        echo'<div> <p> Rs.'.$product->unit_price.'</p></div>';
        /*echo"<input type='submit' value='View Product' onclick='return viewproduct();'>";*/
        /*<a href="<?php echo base_url()."home/showproduct/".$product->product_id ; ?>"> View Product </a>*/
        echo"<input type='submit' value='Add to Cart' name='submit_cart'> ";
        echo"<input type='submit' value='View Product' name='submit_product'><br/><br/>";
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

</html>
