<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 4/12/2018
 * Time: 11:52 AM
 */
?>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sliderstyle.css">
</head>
<body>
    <div class="slideshow-container"style="max-width:100%">

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="<?php echo base_url('/images/offers/img1.jpg');?>" alt="jd" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="<?php echo base_url('/images/offers/img2.jpg');?>" alt="jd" style="width:100%">
            <div class="text"></div>
        </div>



        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="<?php echo base_url('/images/offers/img3.jpg');?>" alt="jd" style="width:100%">
            <div class="text"></div>
        </div>

    </div>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>
<br/>
</html>