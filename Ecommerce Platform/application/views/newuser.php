 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ecommerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styleprofile.css">



    <style>
        .navbar{
            margin-left: 83px;
            margin-right: 83px;
            background-color:#755499;
        }
        .navbar-nav{color:white}
        body{
            background-color:#efe0ff;
        }
        .col-sm-3{
            background-color:white;
            border-radius:7px;
        }
        .incontainer1{
            width: 340px;
            height: 50%;
            background-color:#FEFFED;
            float:left;
            margin-left:-60px;
            margin-right: 45px;
            height: 300px;
            border-radius: 7px;
        }
        .incontainer2{
            width: 340px;
            height: 300px;
            background-color:#FEFFED;
            margin-left:20px;
            float: center;
            border-radius: 7px;
            display: inline-block;
            margin:0 auto;
        }
        .incontainer3{
            width: 340px;
            height: 50%;
            background-color:#FEFFED;
            float: right;
            margin-right:-50px;
            height: 300px;
            border-radius: 7px;
        }
        h4{
            background-color: lightgrey;
            width:90%;
            font-weight: bold;
        }
        .active{
            background-color: grey;
        }
        .box{
            margin-left:82px;
            width: 88%;
            height:100%;
            border: 2px solid lightgrey;
            border-radius: 15px;
        }
        .foot{
            float:left;
            margin-left: 120px;
            color: grey;
        }
        .aa{


            color:#000000;
            font-size: 19px;


        }



        .form-style-5{
            max-width: 500px;
            padding: 10px 20px;
            background: #f4f7f8;
            margin: 10px auto;
            padding: 20px;
            background: #f4f7f8;
            border-radius: 8px;
            font-family: Georgia, "Times New Roman", Times, serif;
        }
        .form-style-5 fieldset{
            border: none;
        }
        .form-style-5 legend {
            font-size: 1.4em;
            margin-bottom: 10px;
        }
        .form-style-5 label {
            display: block;
            margin-bottom: 8px;
        }
        .form-style-5 input[type="text"],
        .form-style-5 input[type="password"],
        .form-style-5 input[type="date"],
        .form-style-5 input[type="datetime"],
        .form-style-5 input[type="email"],
        .form-style-5 input[type="number"],
        .form-style-5 input[type="search"],
        .form-style-5 input[type="time"],
        .form-style-5 input[type="url"],
        .form-style-5 textarea,
        .form-style-5 select {
            font-family: Georgia, "Times New Roman", Times, serif;
            background: rgba(255,255,255,.1);
            border: none;
            border-radius: 4px;
            font-size: 16px;
            margin: 0;
            outline: 0;
            padding: 7px;
            width: 100%;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            background-color: #e8eeef;
            color:#8a97a0;
            -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            margin-bottom: 30px;

        }
        .form-style-5 input[type="text"]:focus,
        .form-style-5 input[type="password"]:focus,
        .form-style-5 input[type="date"]:focus,
        .form-style-5 input[type="datetime"]:focus,
        .form-style-5 input[type="email"]:focus,
        .form-style-5 input[type="number"]:focus,
        .form-style-5 input[type="search"]:focus,
        .form-style-5 input[type="time"]:focus,
        .form-style-5 input[type="url"]:focus,
        .form-style-5 textarea:focus,
        .form-style-5 select:focus{
            background: #d2d9dd;
        }
        .form-style-5 select{
            -webkit-appearance: menulist-button;
            height:35px;
        }
        .form-style-5 .number {
            background: #2874f0;
            color: #fff;
            height: 30px;
            width: 30px;
            display: inline-block;
            font-size: 0.8em;
            margin-right: 4px;
            line-height: 30px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(255,255,255,0.2);
            border-radius: 15px 15px 15px 0px;
        }

        .form-style-5 input[type="submit"],
        .form-style-5 input[type="button"]
        {
            position: relative;
            display: block;
            padding: 19px 39px 18px 39px;
            color: #FFF;
            margin: 0 auto;
            background: #2874f0;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            width: 100%;
            border: 1px solid #16a085;
            border-width: 1px 1px 3px;
            margin-bottom: 10px;
        }
        .form-style-5 input[type="submit"]:hover,
        .form-style-5 input[type="button"]:hover
        {
            background: #109177;
        }
        .w3-container
        {
            box-shadow:5px 10px #888888;
            height:300px;
            margin-top:-44px;

            -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        }

        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 1em 0;
            padding: 0;
        }

        .buttonsdiv
        {
            float:left;

            margin-top:20px;
            margin-left:20px;
            margin:6px;
        }




        .topbox
        {
            margin-top:-140px;
            margin-left:190px;
            font-family:newtimesroman;
            font-size:23px;
            font-weight:italic;
            color:black;


        }


 </style>
</head>
<br><br><br>
<body>
<div class="form-style-5">
    
        <div>

           <div>
                <legend><span class="number"></span> User Registration</legend>
			
			
			
<?php echo form_open('Newuser_controller/validate_user_credentials');?>
<?php echo validation_errors();?>
    <label>Username</label>
<?php echo form_input(array('name'=>'username'));?><br/>
    <label>Phone</label>
<?php echo form_input(array('name'=>'phone'));?><br/>
    <label>Email</label>
<?php echo form_input(array('name'=>'email'));?><br/>
    <label>House No</label>
<?php echo form_input(array('name'=>'house_no'));?><br/>
    <label>City</label>
<?php echo form_input(array('name'=>'city'));?><br/>
    <label>Country</label>
<?php echo form_input(array('name'=>'country'));?><br/>
    <label>Pincode</label>
<?php echo form_input(array('name'=>'pincode'));?><br/>
    <label>Password</label>
<?php echo form_password(array('name'=>'password'));?><br/>
<?php echo form_submit(array('name'=>'submit'),'Register');?>
<?php echo form_close();?>