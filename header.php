<?php
require_once "connect.php";

?>


<!DOCTYPE html>
<html lang="En">
<head>
<title>MB Independent Academy</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="refresh" content=""/>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist\css\bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="style/phone.css">
<link rel="stylesheet" type="text/css" href="style/desktop.css">
<link rel="stylesheet" type="text/css" href="style/tablet.css">

<link rel="stylesheet" type="text/css" href="style/mbi.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<meta name="google-site-verification" content="0xc1hmduGsCbgh3zZCgiZZMkgRz8X5-xhcxuyGBsFWA" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkua-gOE0rKNGYpT3mFfh56R0Wq8_5kbU&callback=initMap&libraries=&v=weekly&channel=2"
      async
    ></script>

<meta http-equiv="refresh" content="">

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/main.js"></script>
<script src="bootstrap-4.0.0-dist\js\popper.min.js"></script>
<script src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>

<noscript>Your device does not support javascript</noscript>

<meta name="author" content="Belmiro Mohlala"/>
<meta name="theme-color" content="#080861"/>
<meta name="description" content="MBI Academy Extra Lessons School for Grade 10 to 12 with both face-face and  Online Learning.......
Join today!!">
<meta name="keywords" content="MB Independent Academy, Grade 10 tutors,Grade 11 tutors,
Grade 12 tutors, Burgersfort Schools, Burgersfort private school  ">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="shortcut icon" href="img/WhatsApp Image 2022-01-15 at 12.36.18 (2).jpeg" />


</head>

<body onload="mbi()" onscroll="check()" class="m-0 p-0" style="height:100%; width:100%;">
    <div class="loading container-fluid m-0">
        <div class="spinning">
            <p class="animate__animated animate__flash animate__infinite"> Loading...</p>
            <i class="fas fa-sync-alt  fa-2x"></i>
        </div>
        
    </div>
    <div class="web_content">
    <?php

if(isset($_GET["results"])){
    $msg = $_GET["results"];
    $results = "<div class='container-fluid m-0 position-fixed top-0 z-index-10 animate__animated animate__pulse animate__infinite w-75'>
<div class='alert alert-success alert-dismissible' role='alert'>
<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
$msg
</div>

</div>";
    echo $results;
}
?>
<header class="header">

    <div class="menu_content pt-3 animate__animated animate__fadeInLeft">
        <div class="container position-absolute top-0 right-0 fs-3 text-danger float-right  w-25 mb-3 menu_close">
         <i class="fas fa-times"></i>
        </div>

        <div class="container-fluid  mt-3 p-0 col"> 
            <p class="text-warning"><b>Register Online Now!!</b></p>
            <hr class="border"/>
            <div class="fs-4 text-center font-weight-bold row m-0 p-0">
                <div class="float-left fs-4"><i class="fa fa-home"></i></div>
             <a href="#" class="text-white col menu_close">Home</a>
            </div>
            <hr class="border w-50 mt-0">
            <div class="fs-4 text-center font-weight-bold row  m-0 p-0">
                <div class="float-left fs-4 "><i class="fas fa-chalkboard-teacher"></i></div>
             <a href="#about" class="text-white col  menu_close">About Us</a>
            </div>
            <hr class="border w-50 mt-0">
           
           
            <div class="text-center font-weight-bold row m-0 p-0">
                <div class="float-left fs-6"><i class="fa fa-book"></i></div>
             <a href="#subjects" class="text-white col fs-4  menu_close"> Subjects</a>
            </div>
            <hr class="border w-50 mt-0">
             <div class="fs-4 text-center font-weight-bold row m-0 p-0">
                 <div class="float-left fs-4 "><i class="fas fa-wifi"></i></div>
             <a href="subscribe.php" class="text-white col  menu_close">Online Application</a>
            </div>
            <hr class="border w-50 mt-0">
             <div class="fs-4 text-center font-weight-bold row m-0 p-0">
                 <div class="float-left fs-4 "><i class="fas fa-school"></i></div>
             <a href="#campus" class="text-white col  menu_close">Our Campus</a>
            </div>
            <hr class="border w-50 mt-0">
            <div class="fs-4 text-center font-weight-bold row m-0 p-0">
                <div class="float-left fs-4 "><i class="fas fa-money-check-alt"></i></div>
            <a href="#fees" class="text-white col  menu_close">Fees</a>
           </div>
           <hr class="border w-50 mt-0">
           <div class="fs-4 text-center font-weight-bold row m-0 p-0">
            <div class="float-left fs-4 "><i class="fas fa-book-open"></i></div>
        <a href="testimonial.php" class="text-white col  menu_close">Testimonials</a>
       </div>


        </div>
       <div class="position-absolute bottom-0 w-100 text-center text-white">
            <hr class="border">
            

            <h4><i class="fas fa-wifi mr-2 text-warning"></i>Contact</h4>
            <div class="row">
                <div class="col fs-6"><i class="fab fa-whatsapp m-1 text-small"></i>0728208533</div>
                <div class="col fs-6"><i class="fas fa-phone m-1 text-small"></i>0728208533</div>
            </div>
            </div>
      
    </div>
<div id="top_news1">
<div class="top_news container-fluid text-white  bg-dark" id="top_news">Coronavirus (Covid-19) Updates |
 <a href="https://sacoronavirus.co.za/" target="_blank"> South African Covid-19 Resource Portal</a>
 | <a href="https://www.wits.ac.za/covid19/" target="_blank"> MBI Academy Covid-19 Resource Portal</a></div>
</div>

<div class="task_bar">
    <div class="menu_bar">
       

        <div class="menu" id="d_hide">
            <div class="bars"></div>
            <div class="bars"></div>
            <div class="bars"></div>
        </div>
        
        <div class="menu ml-2" id="d-hide">
            <strong>Menu</strong>
        </div>
        <!--Search Icon -->
       
       

        <!--This is for desktop only-->
        <div class="content2 hoverr" id="p-hide">
            <div class="animate__animated animate__bounceInRight check2" style="animation-delay: 0.5s;"><a href="subscribe.php"><i class="fas fa-wifi mr-2"></i>Apply Online</a></div>
            <div class="animate__animated animate__bounceInRight check2" style="animation-delay: 1s;"><a href="#about"><i class="fa fa-book mr-2"></i>About Us</a></div>
            <div class="animate__animated animate__bounceInRight check2" style="animation-delay: 1.5s;"><a href="#campus"><i class="fas fa-school mr-2"></i>Our Campus</a></div>
            <div class="animate__animated animate__bounceInRight check2" style="animation-delay: 2s;"><a href="#fees"><i class="fas fa-money-check-alt mr-2"></i>Fees</a></div>
            <div class="animate__animated animate__bounceInRight check2" style="animation-delay: 2s;"><a href="testimonial.php"><i class="fas fa-book-open mr-2"></i>Testimonials</a></div>

          
        </div>
        <!--End of desktop menu-->
        <div class=" mr-0 w-100 float-right d-flex flex-row mt-2" id="d-hide">
            <div ><a href="subscribe.php" class="search rounded border text-white p-1 ">Apply Online</a></div>  
            <div><span class="search rounded border text-white p-1 ">Search<i class="fa fa-search p-1"></i></span></div>
    </div>

    </div>

    <div class="container-fluid d-flex flex-wrap slides">
        <div class="logo">
            <div class="float-left text-pri animation1">
                <strong>MB Independent Academy,</strong><br>
                <span class="normal_font">Road To 100% Pass Rate</span>
            </div>  
            <img class="animate__animated animate__flipInX mx-auto d-block float-left check1" src="img/WhatsApp Image 2022-01-15 at 12.36.18 (2).jpeg" alt="Logo MBI"/>
            <div class="float-left animation1">
                <p class="text-dark"><strong>Grade 10 to 12:
                   <blockquote class="streams_font">Science and commerce streams<blockquote>
                </strong></p>
                <hr class="line">
            </div>
            
        </div>
      <!--  -->
    
      
       
       </div>
      
        
</div>
<br class="p-hide">
<br class="p-hide">
<hr class="line d-hide " style="width: 100%;">
</header>
