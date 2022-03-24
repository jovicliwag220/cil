<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Church in Lucena</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Garamond" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Gotu" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Cookie" rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/8ffa12d84c.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--   
  
░█████╗░░██████╗░██████╗
██╔══██╗██╔════╝██╔════╝
██║░░╚═╝╚█████╗░╚█████╗░
██║░░██╗░╚═══██╗░╚═══██╗
╚█████╔╝██████╔╝██████╔╝
░╚════╝░╚═════╝░╚═════╝░
-->
  <style>
  body {
    font: 400 15px Garamond, sans-serif;
    line-height: 1.8;
    color: #818181;
    /* Floating BG */
    margin: 2em auto;
    max-width: 90%;
  }

  @media screen and (max-width : 760px){
    body {
    /* Floating BG revert */
    margin: 0 auto;
    max-width: 100%;
  }
  
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron h6 {
    font: 400 5vw/0.8 'Cookie', Helvetica, sans-serif;
    /* color: #818181; */
    color: #FDC664;
    line-height: 5vw;
    text-shadow: 10px 10px 20px rgba(0,0,0,0.3); 
  }
  .jumbotron {
    background-color: #FDC664;
    /* color: #73607D; */
    color: #FDC664;
    padding: 100px 25px;
    font-family: Gotu, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  /* .bg-grey {
    background-color: #48FD8E;
  } */
  .bg-green {
    background-color: #48FD8E;
  }
  .bg-orange {
    background-color: #FDC664;
  }
  .logo-small {
    color: #73607D;
    font-size: 50px;
  }
  .logo {
    color: #73607D;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #73607D;
  }
  .carousel-indicators li {
    border-color: #73607D;
  }
  .carousel-indicators li.active {
    background-color: #73607D;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #73607D; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #73607D;
    background-color: #C1B9AE !important;
    color: #73607D;
  }
  .panel-heading {
    color: #73607D !important;
    background-color: #FDC664 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #73607D;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #FDC664;
    color: #73607D;
  }
  .panel-info {
    border: 1px transparent #73607D; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel-info:hover {
    box-shadow: 5px 0px 40px #8D5DFF77;
  }
  .container-hover {
    border: 1px transparent #73607D; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .container-hover:hover {
    box-shadow: 5px 0px 40px #c0c0c077;
  }


nav
{
  /* position: fixed;
  top: 0;
  width: 100%;
  height: 80px;
  background: #607d8b;
  padding: 0 100px;
  box-sizing: border-box; */
  transition: 0.5s;
}




  .navbar {
    margin-bottom: 0;
    background-color: #73607D;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Gotu, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #FDC664 !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #FDC664 !important;
    background-color: #fff !important;
  }
  .navbar-nav li ul li a:hover, .navbar-nav li ul li a.active {
    color: #FDC664 !important;
    background-color: #73607D !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #FDC664 !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #FB8C6F;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 760px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }

  .dropdown:hover .dropdown-menu {
    display: block;
    /* remove the gap so it doesn't close */
    margin-top: 0;
 }

       /* Hovering Picture Link */
.box {
    display: none;
    width: 100%;
}

a:hover + .box,.box:hover {
    display: block;
    position: relative;
    z-index: 100;
}



h1
{
  font-size: 400% !important;
}

h2
{
  font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;

    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}

@media screen and (max-width : 760px){
  .jumbotron.text-center {
    padding: 0 !important;
    max-width: 100% !important;
    padding-top: 60px !important;
    padding-bottom: 30px !important;
  }
}

#headerimage {
  text-align: center;
  background-attachment: fixed;
  background-position: top center;
  -webkit-background-size: auto;
  -moz-background-size: auto;
  -o-background-size: auto;
  background-size: 100%;
  opacity: 0.8;
}


@media screen and (max-width: 1024px){
  #headerimage {
  background-size: 180%;
}
}
  </style>



</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<!-- 
	
███╗░░██╗░█████╗░██╗░░░██╗██╗░██████╗░░█████╗░████████╗██╗░█████╗░███╗░░██╗  ██████╗░░█████╗░██████╗░
████╗░██║██╔══██╗██║░░░██║██║██╔════╝░██╔══██╗╚══██╔══╝██║██╔══██╗████╗░██║  ██╔══██╗██╔══██╗██╔══██╗
██╔██╗██║███████║╚██╗░██╔╝██║██║░░██╗░███████║░░░██║░░░██║██║░░██║██╔██╗██║  ██████╦╝███████║██████╔╝
██║╚████║██╔══██║░╚████╔╝░██║██║░░╚██╗██╔══██║░░░██║░░░██║██║░░██║██║╚████║  ██╔══██╗██╔══██║██╔══██╗
██║░╚███║██║░░██║░░╚██╔╝░░██║╚██████╔╝██║░░██║░░░██║░░░██║╚█████╔╝██║░╚███║  ██████╦╝██║░░██║██║░░██║
╚═╝░░╚══╝╚═╝░░╚═╝░░░╚═╝░░░╚═╝░╚═════╝░╚═╝░░╚═╝░░░╚═╝░░░╚═╝░╚════╝░╚═╝░░╚══╝  ╚═════╝░╚═╝░░╚═╝╚═╝░░╚═╝
 -->
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">CIL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#announcements">FELLOWSHIP & PRAYER</a></li>
        <li class="dropdown">
          <a href="#calendar" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CALENDAR <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#events">CHURCH EVENTS</a></li>
        </ul>
        </li>
          <li class="dropdown">
            <a href="#agegroups" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">AGE GROUPS <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#childrensection">CHILDREN SECTION</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#ypsection">YP SECTION</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#services">SERVICES</a></li>
          </ul>
          </li>
          <li>
          <a href="#downloads" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DOWNLOADS </a>
          <!-- <ul class="dropdown-menu">
            <li><a href="#downloads">DOWNLOADS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#NONE">NONE</a></li>
          </ul> -->
          </li>
        <!-- <li class="dropdown">
          <a href="#about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US(remove?)<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#statementoffaith">STATEMENT OF FAITH</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#testimonies">TESTIMONIES</a></li>
          </ul>
          </li> -->
        <li><a href="#contact">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Collapse Navbar when clicking outside the navbar -->
<script>$(document).click(function(e) {
  if (!$(e.target).is('a')) {
      $('.collapse').collapse('hide');        
  }
});</script>

<script>
  var lastScrollTop=0;
    navbar = document.getElementById("navbar");
  window.addEventListener("scroll", function(){
    var scrollTop = window.pageYOffest || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop){
      navbar.style.top="-50px";
    } else {
      navbar.style.top="0";
    }
    lastScrollTop = scrollTop;
  })
</script>

<!--
	
░█████╗░░█████╗░███╗░░██╗████████╗███████╗███╗░░██╗████████╗
██╔══██╗██╔══██╗████╗░██║╚══██╔══╝██╔════╝████╗░██║╚══██╔══╝
██║░░╚═╝██║░░██║██╔██╗██║░░░██║░░░█████╗░░██╔██╗██║░░░██║░░░
██║░░██╗██║░░██║██║╚████║░░░██║░░░██╔══╝░░██║╚████║░░░██║░░░
╚█████╔╝╚█████╔╝██║░╚███║░░░██║░░░███████╗██║░╚███║░░░██║░░░
░╚════╝░░╚════╝░╚═╝░░╚══╝░░░╚═╝░░░╚══════╝╚═╝░░╚══╝░░░╚═╝░░░
-->

<div id="headerimage" class="jumbotron text-center" style="padding:100px;background-image: url(&quot;images/CIL.jpg&quot;);">
  <h1>The Church in Lucena City</h1>
  <br>
  <h6>“And I also say to you that you are Peter, and upon this rock I will build my church.”</h6>
  <h6>(Matthew 16:18)</h6>
</div>
<!--

░█████╗░███╗░░██╗███╗░░██╗░█████╗░██╗░░░██╗███╗░░██╗░█████╗░███████╗███╗░░░███╗███████╗███╗░░██╗████████╗░██████╗
██╔══██╗████╗░██║████╗░██║██╔══██╗██║░░░██║████╗░██║██╔══██╗██╔════╝████╗░████║██╔════╝████╗░██║╚══██╔══╝██╔════╝
███████║██╔██╗██║██╔██╗██║██║░░██║██║░░░██║██╔██╗██║██║░░╚═╝█████╗░░██╔████╔██║█████╗░░██╔██╗██║░░░██║░░░╚█████╗░
██╔══██║██║╚████║██║╚████║██║░░██║██║░░░██║██║╚████║██║░░██╗██╔══╝░░██║╚██╔╝██║██╔══╝░░██║╚████║░░░██║░░░░╚═══██╗
██║░░██║██║░╚███║██║░╚███║╚█████╔╝╚██████╔╝██║░╚███║╚█████╔╝███████╗██║░╚═╝░██║███████╗██║░╚███║░░░██║░░░██████╔╝
╚═╝░░╚═╝╚═╝░░╚══╝╚═╝░░╚══╝░╚════╝░░╚═════╝░╚═╝░░╚══╝░╚════╝░╚══════╝╚═╝░░░░░╚═╝╚══════╝╚═╝░░╚══╝░░░╚═╝░░░╚═════╝░
-->

<!-- Container (Announcements Section) -->
<div id="announcements" class="container-fluid text-center container-hover">
  <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="bullhorn" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-bullhorn fa-w-18 fa-3x"><g class="fa-group"><path fill="currentColor" d="M544 448c0 9.22-7.08 32-32 32a32 32 0 0 1-20-7l-85-68a242.82 242.82 0 0 0-119-50.79V125.84a242.86 242.86 0 0 0 119-50.79L492 7a31.93 31.93 0 0 1 20-7c25 0 32 23.26 32 32z" class="fa-secondary"></path><path fill="currentColor" d="M544 184.88v110.24a63.47 63.47 0 0 0 0-110.24zM0 192v96a64 64 0 0 0 64 64h33.7a243 243 0 0 0-2.18 32 253.32 253.32 0 0 0 25.56 110.94c5.19 10.69 16.52 17.06 28.4 17.06h74.28c26.05 0 41.69-29.84 25.9-50.56A127.35 127.35 0 0 1 223.51 384a121 121 0 0 1 4.41-32H256V128H64a64 64 0 0 0-64 64z" class="fa-primary"></path></g></svg>

  <h2>FELLOWSHIP & PRAYER</h2> 

  <h4>for <p id="date"></p></h4>

  <br>

  <div class="row slideanim">

    <!-- <div class="col-sm-4 panel-info">
      <a href="#downloads">
      <h4><svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="scroll-old" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-scroll-old fa-w-20 fa-3x"><g class="fa-group"><path fill="currentColor" d="M539.31 228.69L512 256l27.31 27.31a16 16 0 0 1 4.69 11.32V384h-89.37a16 16 0 0 0-11.32 4.69L416 416l-27.31-27.31a16 16 0 0 0-11.32-4.69H304a16 16 0 0 0-16 16v32a80 80 0 0 1-80.61 80c-44.11-.33-79.39-36.89-79.39-81V262.63a16 16 0 0 1 4.69-11.32L160 224l-27.31-27.31a16 16 0 0 1-4.69-11.32V65A65 65 0 0 0 63 0h385a96.1 96.1 0 0 1 95.68 88.2 16.15 16.15 0 0 1-4.63 12.8L512 128l27.31 27.31a16 16 0 0 1 4.69 11.32v50.74a16 16 0 0 1-4.69 11.32z" class="fa-secondary"></path><path fill="currentColor" d="M192 512h16c-2.59 0-5.14-.13-7.66-.37-2.75.24-5.53.37-8.34.37zM64 0A64 64 0 0 0 0 64v48a16 16 0 0 0 16 16h112V65A65 65 0 0 0 64 0zm560 384H454.63a16 16 0 0 0-11.32 4.69L416 416l-27.31-27.31a16 16 0 0 0-11.32-4.69H304a16 16 0 0 0-16 16v32a80 80 0 0 1-80 80h320a112 112 0 0 0 112-112.06A16 16 0 0 0 624 384z" class="fa-primary"></path></g></svg></h4>
      <h2>Prayer Items</h2>
      <span class="glyphicon glyphicon-asterisk logo-xsmall"></span>
      <p><strong>For MAY</strong></p></a>
    </div>


    <div class="col-sm-4 panel-info">
      <h1><span class="glyphicon glyphicon-facetime-video"></span></h1>
      <h2>MEMORIAL DAY CONFERENCE</h2>
      <p><strong>May 22-25, 2020</strong> </p>
    </div>

    <div class="col-sm-4 panel-info">
      <a href="#downloads">
      <h4><svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="scroll-old" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-scroll-old fa-w-20 fa-3x"><g class="fa-group"><path fill="currentColor" d="M539.31 228.69L512 256l27.31 27.31a16 16 0 0 1 4.69 11.32V384h-89.37a16 16 0 0 0-11.32 4.69L416 416l-27.31-27.31a16 16 0 0 0-11.32-4.69H304a16 16 0 0 0-16 16v32a80 80 0 0 1-80.61 80c-44.11-.33-79.39-36.89-79.39-81V262.63a16 16 0 0 1 4.69-11.32L160 224l-27.31-27.31a16 16 0 0 1-4.69-11.32V65A65 65 0 0 0 63 0h385a96.1 96.1 0 0 1 95.68 88.2 16.15 16.15 0 0 1-4.63 12.8L512 128l27.31 27.31a16 16 0 0 1 4.69 11.32v50.74a16 16 0 0 1-4.69 11.32z" class="fa-secondary"></path><path fill="currentColor" d="M192 512h16c-2.59 0-5.14-.13-7.66-.37-2.75.24-5.53.37-8.34.37zM64 0A64 64 0 0 0 0 64v48a16 16 0 0 0 16 16h112V65A65 65 0 0 0 64 0zm560 384H454.63a16 16 0 0 0-11.32 4.69L416 416l-27.31-27.31a16 16 0 0 0-11.32-4.69H304a16 16 0 0 0-16 16v32a80 80 0 0 1-80 80h320a112 112 0 0 0 112-112.06A16 16 0 0 0 624 384z" class="fa-primary"></path></g></svg></h4>
      <h2>Prayer Items</h2>
      <span class="glyphicon glyphicon-asterisk logo-xsmall"></span>
      <p><strong>For CO-VID19</strong></p></a>
      <a href="https://unceasinglypray.org">From <strong>unceasinglypray.org</strong></a>
    </div>

    <div class="col-sm-4 panel-info">
      <h4><svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="browser" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-browser fa-w-16 fa-3x"><g class="fa-group"><path fill="currentColor" d="M76 160h40a12 12 0 0 0 12-12v-40a12 12 0 0 0-12-12H76a12 12 0 0 0-12 12v40a12 12 0 0 0 12 12zM0 224v208a48 48 0 0 0 48 48h416a48 48 0 0 0 48-48V224z" class="fa-secondary"></path><path fill="currentColor" d="M464 32H48A48 48 0 0 0 0 80v144h512V80a48 48 0 0 0-48-48zM128 148a12 12 0 0 1-12 12H76a12 12 0 0 1-12-12v-40a12 12 0 0 1 12-12h40a12 12 0 0 1 12 12zm320 0a12 12 0 0 1-12 12H188a12 12 0 0 1-12-12v-40a12 12 0 0 1 12-12h248a12 12 0 0 1 12 12z" class="fa-primary"></path></g></svg></h4>
      <h2>Start</h2>
      <p><strong>April 6, 1:52am</strong> Website of Church in Lucena launched</p>
    </div> -->

    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM fnap";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                  $one = 1;
                                  $idplus1 = $row['id_fnap'] - $one;
                                  echo "<div class='col-sm-" . $row['width'] . " panel-info' id='" . $idplus1 . "' style='padding:10px;display:none;'>";
                                  echo "<h2>Prayer Items for Today</h2>";
                                  echo "<h3>" . $row['pday'] . "</h3>"; 
                                  echo "<p id='date" . $row['id_fnap'] . "'></p>";
                                  echo "<h6>*Updated every 3:00pm</h6>";
                                  echo "<a href='" . $row['plink'] . "'>";
                                  echo "<button class='btn btn-lg'>" . $row['pname'] . "</button></a>";
                                  echo "<div class='box'><img src=" . $row['plink'] . " alt='' width='100%'>";
                                  echo "</div></div>";
                                }
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            // echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    //mysqli_close($link);
                    ?>


<?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM fna";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                  echo "<div class='col-sm-" . $row['width'] . " panel-info'><" . $row['ahyperlink'] . $row['link'] . ">";
                                  echo "<h4>" . $row['icon'] . "</h4>";
                                  echo "<h2>" . $row['title'] . "</h2>";
                                  echo $row['asterisk'];
                                  echo "<p><strong>" . $row['what'] . "</strong></p>";
                                  echo "</" . $row['ahyperlink'] . ">";
                                  echo "</div>";
                                }
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            // echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    //mysqli_close($link);
                    ?>
    

  </div>

</div>
<div><h6>*Indicates that the announcement has a link</h6></div>

<!-- 
 ███████╗██╗░░░██╗███████╗███╗░░██╗████████╗░██████╗
 ██╔════╝██║░░░██║██╔════╝████╗░██║╚══██╔══╝██╔════╝
 █████╗░░╚██╗░██╔╝█████╗░░██╔██╗██║░░░██║░░░╚█████╗░
 ██╔══╝░░░╚████╔╝░██╔══╝░░██║╚████║░░░██║░░░░╚═══██╗
 ███████╗░░╚██╔╝░░███████╗██║░╚███║░░░██║░░░██████╔╝
 ╚══════╝░░░╚═╝░░░╚══════╝╚═╝░░╚══╝░░░╚═╝░░░╚═════╝░
 -->

<div id="calendar" class="container-fluid text-center bg-green">
  <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="calendar-week" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-calendar-week fa-w-14 fa-3x"><g class="fa-group"><path fill="currentColor" d="M0 192v272a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V192zm384 144a16 16 0 0 1-16 16H80a16 16 0 0 1-16-16v-64a16 16 0 0 1 16-16h288a16 16 0 0 1 16 16zm-80-208h32a16 16 0 0 0 16-16V16a16 16 0 0 0-16-16h-32a16 16 0 0 0-16 16v96a16 16 0 0 0 16 16zm-192 0h32a16 16 0 0 0 16-16V16a16 16 0 0 0-16-16h-32a16 16 0 0 0-16 16v96a16 16 0 0 0 16 16z" class="fa-secondary"></path><path fill="currentColor" d="M448 112v80H0v-80a48 48 0 0 1 48-48h48v48a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16V64h128v48a16 16 0 0 0 16 16h32a16 16 0 0 0 16-16V64h48a48 48 0 0 1 48 48z" class="fa-primary"></path></g></svg>
  <h2>Calendar of Activities</h2>
  <!-- <h4>...</h4> -->

  <style>
.switch-toggle {
  width: 50vw;
}

.switch-toggle label:not(.disabled) {
  cursor: pointer;
}
  </style>

<link href="https://cdn.jsdelivr.net/css-toggle-switch/latest/toggle-switch.css" rel="stylesheet" />

<script>
function hideToggle1() {
document.getElementById('iframe1').style.display ='block';
document.getElementById('iframe2').style.display ='none';
document.getElementById('iframe3').style.display ='none';
}
function hideToggle2() {
document.getElementById('iframe1').style.display ='none';
document.getElementById('iframe2').style.display ='block';
document.getElementById('iframe3').style.display ='none';
}
function hideToggle3() {
document.getElementById('iframe1').style.display ='none';
document.getElementById('iframe2').style.display ='none';
document.getElementById('iframe3').style.display ='block';
}
</script>

<script>
function resize() {
    if ( $(window).width() < 760) {     
  document.getElementById("loc").innerHTML = "LOC";
  document.getElementById("prov").innerHTML = "PROV";
  document.getElementById("reg").innerHTML = "REG";
    }
    else {
  document.getElementById("loc").innerHTML = "LOCAL";
  document.getElementById("prov").innerHTML = "PROVINCIAL";
  document.getElementById("reg").innerHTML = "REGIONAL";
    }
}
$(window).on("resize", resize);
resize(); // call once initially
</script>

<div class="switch-toggle switch-3 switch-candy" style="margin:auto !important;">
  <input class="button1" id="on" name="state-d" type="radio" checked="checked" onclick="hideToggle1();"/>
  <label for="on" onclick="" id="loc">LOCAL</label>

  <input class="button2" id="na" name="state-d" type="radio" onclick="hideToggle2();"/>
  <label for="na"  onclick="" id="prov">PROVINCIAL</label>

  <input class="button3" id="off" name="state-d" type="radio" onclick="hideToggle3();"/>
  <label for="off" onclick="" id="reg">REGIONAL</label>

  <a></a>
</div>

<style>
.resp-iframe {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 30em;
    border: 0;
}
</style>

<div id="iframe1">
<iframe src="https://calendar.google.com/calendar/embed?height=500&amp;wkst=1&amp;bgcolor=%2348fd8e&amp;ctz=Asia%2FManila&amp;src=ZHB0Mzhua2ZuM3VpNDUxY2I3NGFkdTFyY2NAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23616161&amp;showTitle=1&amp;showNav=1&amp;showDate=1&amp;showPrint=0&amp;showTabs=1&amp;showCalendars=0&amp;title=Church in Lucena" style="border-width:0" width="800" height="500" frameborder="0" scrolling="no" class="resp-iframe" id="iframe1"></iframe>
</div>

<div id="iframe2" style="display:none;">
<iframe src="https://calendar.google.com/calendar/embed?height=500&amp;wkst=1&amp;bgcolor=%2348fd8e&amp;ctz=Asia%2FManila&amp;showCalendars=0&amp;showPrint=0&amp;title=Churches%20of%20Quezon&amp;src=MDE0MmQ3NDg4c2EyN2ZvYzQ0bTQ0aXVlcXNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23D81B60" style="border-width:0" width="800" height="500" frameborder="0" scrolling="no" class="resp-iframe" id="iframe2"></iframe>
</div>

<div id="iframe3" style="display:none;">
<iframe src="https://calendar.google.com/calendar/embed?height=500&amp;wkst=1&amp;bgcolor=%2348fd8e&amp;ctz=Asia%2FManila&amp;src=dm5sbWtsODIwbjM5YzYxaGMzcWZvZXZiczhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%238E24AA&amp;showCalendars=0&amp;showPrint=0&amp;title=Work" style="border-width:0" width="800" height="500" frameborder="0" scrolling="no" class="resp-iframe" id="iframe3"></iframe>
</div>

</div>

<div id="events" class="container-fluid text-center bg-default container-hover">
  <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="calendar-star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-calendar-star fa-w-14 fa-3x"><g class="fa-group"><path fill="currentColor" d="M0 192v272a48 48 0 0 0 48 48h352a48 48 0 0 0 48-48V192zm324.13 141.91a11.92 11.92 0 0 1-3.53 6.89L281 379.4l9.4 54.6a12 12 0 0 1-17.4 12.6l-49-25.8-48.9 25.8a12 12 0 0 1-17.4-12.6l9.4-54.6-39.6-38.6a12 12 0 0 1 6.6-20.5l54.7-8 24.5-49.6a12 12 0 0 1 21.5 0l24.5 49.6 54.7 8a12 12 0 0 1 10.13 13.61zM304 128h32a16 16 0 0 0 16-16V16a16 16 0 0 0-16-16h-32a16 16 0 0 0-16 16v96a16 16 0 0 0 16 16zm-192 0h32a16 16 0 0 0 16-16V16a16 16 0 0 0-16-16h-32a16 16 0 0 0-16 16v96a16 16 0 0 0 16 16z" class="fa-secondary"></path><path fill="currentColor" d="M314 320.3l-54.7-8-24.5-49.6a12 12 0 0 0-21.5 0l-24.5 49.6-54.7 8a12 12 0 0 0-6.6 20.5l39.6 38.6-9.4 54.6a12 12 0 0 0 17.4 12.6l48.9-25.8 49 25.8a12 12 0 0 0 17.4-12.6l-9.4-54.6 39.6-38.6a12 12 0 0 0-6.6-20.5zM400 64h-48v48a16 16 0 0 1-16 16h-32a16 16 0 0 1-16-16V64H160v48a16 16 0 0 1-16 16h-32a16 16 0 0 1-16-16V64H48a48 48 0 0 0-48 48v80h448v-80a48 48 0 0 0-48-48z" class="fa-primary"></path></g></svg>
  <h2>Events</h2>
  <!-- <h4>...</h4> -->

<!-- FACEBOOK EVENTS -->

<?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM events";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                  echo "<div class='col-sm-12 col-xs-12'>";
                                  echo $row['econtent'];
                                  echo "</div>";
                                }
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    //mysqli_close($link);
                    ?>

</div>
</div>

<!-- PLACEHOLDER -->
<!-- <div class="HELLOWORLD" style="position:relative;bottom:132px;background-color:white;height:45px;z-index:1;"></div> -->

<!-- 
░██████╗███████╗░█████╗░████████╗██╗░█████╗░███╗░░██╗
██╔════╝██╔════╝██╔══██╗╚══██╔══╝██║██╔══██╗████╗░██║
╚█████╗░█████╗░░██║░░╚═╝░░░██║░░░██║██║░░██║██╔██╗██║
░╚═══██╗██╔══╝░░██║░░██╗░░░██║░░░██║██║░░██║██║╚████║
██████╔╝███████╗╚█████╔╝░░░██║░░░██║╚█████╔╝██║░╚███║
╚═════╝░╚══════╝░╚════╝░░░░╚═╝░░░╚═╝░╚════╝░╚═╝░░╚══╝
 -->

 <!-- Container (Sections) -->
<div id="agegroups" class="container-fluid text-center bg-orange"></div>

<!-- Container (Childen's Section) -->
<div id="childrensection" class="container-fluid text-center bg-default container-hover">
  <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="child" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-child fa-w-12 fa-3x"><g class="fa-group"><path fill="currentColor" d="M120 72a72 72 0 1 1 72 72 72 72 0 0 1-72-72z" class="fa-secondary"></path><path fill="currentColor" d="M9.37 118.63a32 32 0 0 1 45.26-45.26L141.25 160h101.5l86.62-86.63a32 32 0 0 1 45.26 45.26L280 213.25V480a32 32 0 0 1-32 32h-16a32 32 0 0 1-32-32V368h-16v112a32 32 0 0 1-32 32h-16a32 32 0 0 1-32-32V213.25z" class="fa-primary"></path></g></svg>
  <h2>Children's Section</h2>
  <h4>...</h4>
</div>

<!-- Container (YP Section) -->
<div id="ypsection" class="container-fluid text-center bg-green">
    <h2>Young People's Section</h2>
    <h4>...</h4>
</div>

<!-- 
██████╗░░█████╗░░██╗░░░░░░░██╗███╗░░██╗██╗░░░░░░█████╗░░█████╗░██████╗░░██████╗
██╔══██╗██╔══██╗░██║░░██╗░░██║████╗░██║██║░░░░░██╔══██╗██╔══██╗██╔══██╗██╔════╝
██║░░██║██║░░██║░╚██╗████╗██╔╝██╔██╗██║██║░░░░░██║░░██║███████║██║░░██║╚█████╗░
██║░░██║██║░░██║░░████╔═████║░██║╚████║██║░░░░░██║░░██║██╔══██║██║░░██║░╚═══██╗
██████╔╝╚█████╔╝░░╚██╔╝░╚██╔╝░██║░╚███║███████╗╚█████╔╝██║░░██║██████╔╝██████╔╝
╚═════╝░░╚════╝░░░░╚═╝░░░╚═╝░░╚═╝░░╚══╝╚══════╝░╚════╝░╚═╝░░╚═╝╚═════╝░╚═════╝░
 -->

<!-- Container (Download Section) -->

<style>
.heightbug
{
  height: 100%;
}
</style>

<div id="downloads" class="container-fluid text-center container-hover">
    <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-download fa-w-16 fa-3x"><g class="fa-group"><path fill="currentColor" d="M320 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3a19.37 19.37 0 0 1-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24a23.94 23.94 0 0 1 24-24h80a23.94 23.94 0 0 1 24 24z" class="fa-secondary"></path><path fill="currentColor" d="M488 352H341.3l-49 49a51.24 51.24 0 0 1-72.6 0l-49-49H24a23.94 23.94 0 0 0-24 24v112a23.94 23.94 0 0 0 24 24h464a23.94 23.94 0 0 0 24-24V376a23.94 23.94 0 0 0-24-24zm-120 96a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm64 0a16 16 0 1 1 16-16 16 16 0 0 1-16 16z" class="fa-primary"></path></g></svg>
    <h2>Download Section</h2>
    <h4>Download Materials Here!</h4>

  <div class="row slideanim">

    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM downloads";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                  echo "<div class='col-sm-" . $row['dwidth'] . " col-xs-12'>";
                                  echo "<div class='panel panel-default text-center'><div class='panel-heading'>";
                                  echo "<h2>" . $row['dtitle'] . "</h2>";
                                  echo "<div style='width: 30%; margin: 0 auto;'>" . $row['dicon'] . "</div></div>";
                                  echo "<div class='panel-body'><h5>" . $row['dbody'] . "</h5></div>";
                                  echo "<div class='panel-footer'>" . $row['dfooter'];
                                  echo "<h6>" . $row['dfooternote'] . "</h6>";
                                  echo "</div></div></div>";
                                }
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    // mysqli_close($link);
                    ?>

    <!-- <div class="col-sm-6 col-xs-12 heightbug">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>Prayer Items</h2>
          <div style="width: 30%; margin: 0 auto;">
            <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="scroll-old" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-scroll-old fa-w-20 fa-3x"><g class="fa-group"><path fill="currentColor" d="M539.31 228.69L512 256l27.31 27.31a16 16 0 0 1 4.69 11.32V384h-89.37a16 16 0 0 0-11.32 4.69L416 416l-27.31-27.31a16 16 0 0 0-11.32-4.69H304a16 16 0 0 0-16 16v32a80 80 0 0 1-80.61 80c-44.11-.33-79.39-36.89-79.39-81V262.63a16 16 0 0 1 4.69-11.32L160 224l-27.31-27.31a16 16 0 0 1-4.69-11.32V65A65 65 0 0 0 63 0h385a96.1 96.1 0 0 1 95.68 88.2 16.15 16.15 0 0 1-4.63 12.8L512 128l27.31 27.31a16 16 0 0 1 4.69 11.32v50.74a16 16 0 0 1-4.69 11.32z" class="fa-secondary"></path><path fill="currentColor" d="M192 512h16c-2.59 0-5.14-.13-7.66-.37-2.75.24-5.53.37-8.34.37zM64 0A64 64 0 0 0 0 64v48a16 16 0 0 0 16 16h112V65A65 65 0 0 0 64 0zm560 384H454.63a16 16 0 0 0-11.32 4.69L416 416l-27.31-27.31a16 16 0 0 0-11.32-4.69H304a16 16 0 0 0-16 16v32a80 80 0 0 1-80 80h320a112 112 0 0 0 112-112.06A16 16 0 0 0 624 384z" class="fa-primary"></path></g></svg>
        </div>
        </div>
        <div class="panel-body">
          <h3>For <strong>May</strong></h3>
        </div>
        <div class="panel-footer">
          <h5>For <strong>Week 1</strong></h5>
        </div>
        <div class="panel-footer">
          <a href="./files/Prayer-Item-MAY-WK1-2020.docx">
          <button class="btn btn-lg">Download</button></a>
          <div class="box">
            <img src="./files/May-wk1.png" alt="" width="100%">
        </div> 
        </div>

        <div class="panel-footer">
          <h5>For <strong>Week 3</strong></h5>
        </div>
        <div class="panel-footer">
          <a href="https://scontent.fmnl4-5.fna.fbcdn.net/v/t1.15752-9/p1080x2048/119748728_628543221196392_3060933131626791980_n.png?_nc_cat=111&_nc_sid=b96e70&_nc_ohc=Nzp3x307UTwAX-yeJ92&_nc_ht=scontent.fmnl4-5.fna&oh=d31b04be9b5efe3c5a8d98bbf95a35f1&oe=5F894F98">
          <button class="btn btn-lg">Download</button></a>
          <div class="box">
            <img src="https://scontent.fmnl4-5.fna.fbcdn.net/v/t1.15752-9/p1080x2048/119748728_628543221196392_3060933131626791980_n.png?_nc_cat=111&_nc_sid=b96e70&_nc_ohc=Nzp3x307UTwAX-yeJ92&_nc_ht=scontent.fmnl4-5.fna&oh=d31b04be9b5efe3c5a8d98bbf95a35f1&oe=5F894F98" alt="" width="100%">
        </div> 
        </div>

        </div>
      </div>      -->


    <!-- <div class="col-sm-6 col-xs-12 heightbug">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>Prayer Items</h2>
          <div style="width: 30%; margin: 0 auto;">
            <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="scroll-old" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-scroll-old fa-w-20 fa-3x"><g class="fa-group"><path fill="currentColor" d="M539.31 228.69L512 256l27.31 27.31a16 16 0 0 1 4.69 11.32V384h-89.37a16 16 0 0 0-11.32 4.69L416 416l-27.31-27.31a16 16 0 0 0-11.32-4.69H304a16 16 0 0 0-16 16v32a80 80 0 0 1-80.61 80c-44.11-.33-79.39-36.89-79.39-81V262.63a16 16 0 0 1 4.69-11.32L160 224l-27.31-27.31a16 16 0 0 1-4.69-11.32V65A65 65 0 0 0 63 0h385a96.1 96.1 0 0 1 95.68 88.2 16.15 16.15 0 0 1-4.63 12.8L512 128l27.31 27.31a16 16 0 0 1 4.69 11.32v50.74a16 16 0 0 1-4.69 11.32z" class="fa-secondary"></path><path fill="currentColor" d="M192 512h16c-2.59 0-5.14-.13-7.66-.37-2.75.24-5.53.37-8.34.37zM64 0A64 64 0 0 0 0 64v48a16 16 0 0 0 16 16h112V65A65 65 0 0 0 64 0zm560 384H454.63a16 16 0 0 0-11.32 4.69L416 416l-27.31-27.31a16 16 0 0 0-11.32-4.69H304a16 16 0 0 0-16 16v32a80 80 0 0 1-80 80h320a112 112 0 0 0 112-112.06A16 16 0 0 0 624 384z" class="fa-primary"></path></g></svg>
        </div>
        </div>
        <div class="panel-body">
          <h3>For <strong>May</strong></h3>
        </div>
        <div class="panel-footer">
          <h5>For <strong>Week 1</strong></h5>
        </div>
        <div class="panel-footer">
          <a href="./files/Prayer-Item-MAY-WK1-2020.docx">
          <button class="btn btn-lg">Download</button></a>
          <div class="box">
            <img src="./files/May-wk1.png" alt="" width="100%">
        </div> 
        </div>

        <div class="panel-footer">
          <h5>For <strong>Week 3</strong></h5>
        </div>
        <div class="panel-footer">
          <a href="./files/Prayer-Item-MAY-WK3-2020.docx">
          <button class="btn btn-lg">Download</button></a>
          <div class="box">
            <img src="./files/May-wk3.png" alt="" width="100%">
        </div> 
        </div>

        </div>
      </div>       -->

        <!-- <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>Important Points in Revelation</h2>
          <div style="width: 30%; margin: 0 auto;">
            <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="pen-fancy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-pen-fancy fa-w-16 fa-3x"><g class="fa-group"><path fill="currentColor" d="M163.25 249.87l98.88 98.88-33.07 84.07a32 32 0 0 1-20.24 20.24L32 512l-4.68-4.68 92.89-92.89c2.56.66 5 1.57 7.8 1.57a32 32 0 1 0-32-32c0 2.77.91 5.24 1.57 7.8L4.69 484.69 0 480l58.94-176.82a32 32 0 0 1 20.24-20.24z" class="fa-secondary"></path><path fill="currentColor" d="M483.48 142.55L284 325.66l-97.85-97.85 183.1-199.49c74.48-84.26 199.15 39.16 114.23 114.23z" class="fa-primary"></path></g></svg>
        </div>
        </div>

        <div class="panel-footer">
          <h5>For <strong>Week 1</strong></h5>
        </div>
        <div class="panel-footer">
          <a href="https://www.churchinmanila.org/wp-content/uploads/2020/04/2020-Rev-1-Summary.mp3">
          <button class="btn btn-lg">Download</button></a>
        </div>

        <div class="panel-footer">
          <h5>For <strong>Week 2</strong></h5>
        </div>
        <div class="panel-footer">
          <a href="https://www.churchinmanila.org/wp-content/uploads/2020/04/2020-Rev-2-Points.mp3">
          <button class="btn btn-lg">Download</button></a>
        </div>

        <div class="panel-footer">
          <h5>For <strong>Week 3</strong></h5>
        </div>
        <div class="panel-footer">
          <a href="https://www.churchinmanila.org/wp-content/uploads/2020/04/2020-Rev-3-Points.mp3">
          <button class="btn btn-lg">Download</button></a>
        </div>

        <div class="panel-footer">
          <h5>For <strong>Week 4-5</strong></h5>
        </div>
        <div class="panel-footer">
          <a href="https://www.churchinmanila.org/wp-content/uploads/2020/05/2020-Rev-4-Points.mp3">
          <button class="btn btn-lg">Download</button></a>
        </div>

        <div class="panel-footer">
          <h5>For <strong>Week 6-7</strong></h5>
        </div>
        <div class="panel-footer">
          <a href="https://www.churchinmanila.org/wp-content/uploads/2020/05/2020-Rev-6-Points.mp3">
          <button class="btn btn-lg">Download</button></a>
        </div>

      </div>      
    </div> -->
    
    <!-- <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>Morning Revival Materials</h2>
          <div style="width: 30%; margin: 0 auto;">
            <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="books" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-books fa-w-18 fa-3x"><g class="fa-group"><path fill="currentColor" d="M96 0H32A32 32 0 0 0 0 32v64h128V32A32 32 0 0 0 96 0zM0 384h128V128H0zm0 96a32 32 0 0 0 32 32h64a32 32 0 0 0 32-32v-64H0zm513.62-17.78L401.08 42.71l-60.26 16.14 112.35 418.8c.11.39.2.79.29 1.18l60.29-16.15c-.04-.15-.09-.3-.13-.46zM160 480a32 32 0 0 0 32 32h64a32 32 0 0 0 32-32v-64H160zM256 0h-64a32 32 0 0 0-32 32v64h124.79l-8-29.65a23.94 23.94 0 0 1 11.17-27V32A32 32 0 0 0 256 0zm-96 384h128V128H160z" class="fa-secondary"></path><path fill="currentColor" d="M0 416h128v-32H0zm0-288h128V96H0zm575.17 317.65L460.39 17.78a23.89 23.89 0 0 0-29.18-17h-.09L415.73 5a24 24 0 0 0-16.9 29.36l114.79 427.86a23.89 23.89 0 0 0 29.18 17h.09l15.38-4.22a24 24 0 0 0 16.9-29.35zM160 416h128v-32H160zM338.39 49.78a23.89 23.89 0 0 0-29.18-17h-.09L293.73 37a24 24 0 0 0-16.9 29.36l8 29.65H160v32h128V108l103.62 386.22a23.89 23.89 0 0 0 29.18 17h.09l15.38-4.22a24 24 0 0 0 16.9-29.33z" class="fa-primary"></path></g></svg>
        </div>
        </div>
        <div class="panel-body">
          <h5>For <strong>April 13 to June 6</strong></h5>
        </div>
        <div class="panel-footer">
            <a href="./files/Lockdown Period Morning Revival.pdf" download>
          <button class="btn btn-lg" download>Reference</button></a>
        </div>
        <div class="panel-footer">
          <h5>For <strong>Week 1 and 2</strong></h5>
        </div>
        <div class="panel-footer">
          <h5>No File</h5>
        <a href="./files/REVELATION-WKS-1-2.pdf" download>
          <button class="btn btn-lg" download>English</button></a>
          <a href="./files/MR-Apocalipsis-WKS-1-8-TAG.pdf" download>
            <button class="btn btn-lg" download>Tagalog</button></a>
            <h5>Tagalog is 1 to 8</h5>
          </div>
          <div class="panel-footer">
            <h5>For <strong>Week 3 to 8</strong></h5>
          </div>
          <div class="panel-footer">
          <a href="./files/MR-Revelation-WKS-3-8-ENG.pdf" download>
            <button class="btn btn-lg" download>English</button></a>
            </div>
      </div>      
    </div> -->

    <!-- <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>Wednesday Webcast Outlines</h2>
          <div style="width: 30%; margin: 0 auto;">
            <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="book-open" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-book-open fa-w-18 fa-3x"><g class="fa-group"><path fill="currentColor" d="M576 62.75v337.84c0 16.23-13.13 29.77-30 30.66-49.47 2.6-149.52 12.1-218.7 46.92-10.65 5.36-23.28-1.94-23.28-13.49V100.81a15.37 15.37 0 0 1 7.27-13.17c67.24-41.16 176.16-52.48 231-55.59C560.64 31 576 45 576 62.75z" class="fa-secondary"></path><path fill="currentColor" d="M264.73 87.64C197.5 46.48 88.58 35.17 33.78 32.05 15.36 31 0 45 0 62.75V400.6c0 16.24 13.13 29.78 30 30.66 49.49 2.6 149.59 12.11 218.77 46.95 10.62 5.35 23.21-1.94 23.21-13.46V100.63a15.05 15.05 0 0 0-7.25-12.99z" class="fa-primary"></path></g></svg>
        </div>
        </div>
        <div class="panel-body">
          <h5>For <strong>Fall 2019</strong></h5>
        </div>
        <div class="panel-footer">
          <h5>No File</h5>
            <a href="#" download>
          <button class="btn btn-lg" download>Download</button></a>

        </div>
      </div>      
    </div> -->

    <!-- <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>Morning Revival Outlines</h2>
          <div style="width: 30%; margin: 0 auto;">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="book-open" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-book-open fa-w-18 fa-3x"><path fill="currentColor" d="M542.22 32.05c-54.8 3.11-163.72 14.43-230.96 55.59-4.64 2.84-7.27 7.89-7.27 13.17v363.87c0 11.55 12.63 18.85 23.28 13.49 69.18-34.82 169.23-44.32 218.7-46.92 16.89-.89 30.02-14.43 30.02-30.66V62.75c.01-17.71-15.35-31.74-33.77-30.7zM264.73 87.64C197.5 46.48 88.58 35.17 33.78 32.05 15.36 31.01 0 45.04 0 62.75V400.6c0 16.24 13.13 29.78 30.02 30.66 49.49 2.6 149.59 12.11 218.77 46.95 10.62 5.35 23.21-1.94 23.21-13.46V100.63c0-5.29-2.62-10.14-7.27-12.99z" class=""></path></svg>
        </div>
        </div>
        <div class="panel-body">
          <h5>For <strong>ITERO-Spring Training 2020</strong></h5>
        </div>
        <div class="panel-footer">
            <a href="./files/2020-ITERO-S_Outlines.pdf" download>
          <button class="btn btn-lg" download>Download</button></a>
        </div>
      </div>      
    </div> -->

    <!-- <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>Files</h2>
          <div style="width: 30%; margin: 0 auto;">
            <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="file-download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file-download fa-w-12 fa-3x"><g class="fa-group"><path fill="currentColor" d="M384 128H272a16 16 0 0 1-16-16V0H24A23.94 23.94 0 0 0 0 23.88V488a23.94 23.94 0 0 0 23.88 24H360a23.94 23.94 0 0 0 24-23.88V128zm-83.55 219.36L204 443.06a17.06 17.06 0 0 1-24 0l-96.42-95.7C73.42 337.29 80.54 320 94.82 320H160v-80a16 16 0 0 1 16-16h32a16 16 0 0 1 16 16v80h65.18c14.28 0 21.4 17.29 11.27 27.36z" class="fa-secondary"></path><path fill="currentColor" d="M377 105L279.1 7a24 24 0 0 0-17-7H256v112a16 16 0 0 0 16 16h112v-6.1a23.9 23.9 0 0 0-7-16.9zm-87.82 215H224v-80a16 16 0 0 0-16-16h-32a16 16 0 0 0-16 16v80H94.82c-14.28 0-21.4 17.29-11.24 27.36l96.42 95.7a17.06 17.06 0 0 0 24 0l96.45-95.7c10.13-10.07 3.01-27.36-11.27-27.36z" class="fa-primary"></path></g></svg>
        </div>
        </div>
        <div class="panel-body">
          <h5> <strong>Test</strong></h5>
        </div>
        <div class="panel-footer">
          <h5>No Files</h5>
            <a href="#" download>
          <button class="btn btn-lg" download>Index</button></a>
        </div>
      </div>      
    </div> -->

    <!-- <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>Test</h2>
          <div style="width: 30%; margin: 0 auto;">
            <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="compact-disc" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-compact-disc fa-w-16 fa-3x"><g class="fa-group"><path fill="currentColor" d="M248,8C111,8,0,119,0,256S111,504,248,504,496,393,496,256,385,8,248,8ZM88,256H56C56,150.1,142.1,64,248,64V96C159.8,96,88,167.8,88,256Zm160,96a96,96,0,1,1,96-96A96,96,0,0,1,248,352Z" class="fa-secondary"></path><path fill="currentColor" d="M248,160a96,96,0,1,0,96,96A96,96,0,0,0,248,160Zm0,128a32,32,0,1,1,32-32A32,32,0,0,1,248,288Z" class="fa-primary"></path></g></svg>
        </div>
        </div>
        <div class="panel-body">
          <h5> <strong>Nyaw</strong></h5>
        </div>
        <div class="panel-footer">
          <h5>No Files</h5>
            <a href="#" download>
          <button class="btn btn-lg" download>Open Index</button></a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h2>Audio Messages</h2>
          <div style="width: 30%; margin: 0 auto;">
            <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="file-audio" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file-audio fa-w-12 fa-3x"><g class="fa-group"><path fill="currentColor" d="M384 128H272a16 16 0 0 1-16-16V0H24A23.94 23.94 0 0 0 0 23.88V488a23.94 23.94 0 0 0 23.88 24H360a23.94 23.94 0 0 0 24-23.88V128zM160 404a12 12 0 0 1-20.5 8.5L104 376H76a12 12 0 0 1-12-12v-56a12 12 0 0 1 12-12h28l35.5-36.48A12 12 0 0 1 160 268zm33.24-51.13a24.05 24.05 0 0 0 0-33.57c-22.08-22.91 12.2-56.48 34.38-33.66a72.64 72.64 0 0 1 0 100.9c-21.78 22.38-56.86-10.48-34.38-33.7zm86.2 83.66c-21.67 22.4-56.66-10.31-34.19-33.52a96.39 96.39 0 0 0 0-133.85c-22-22.81 12.22-56.32 34.19-33.51 54.08 55.87 54.08 144.94 0 200.85z" class="fa-secondary"></path><path fill="currentColor" d="M377 105L279.1 7a24 24 0 0 0-17-7H256v112a16 16 0 0 0 16 16h112v-6.1a23.9 23.9 0 0 0-7-16.9zM148 256a12 12 0 0 0-8.53 3.53L104 296H76a12 12 0 0 0-12 12v56a12 12 0 0 0 12 12h28l35.5 36.48A12 12 0 0 0 160 404V268a12 12 0 0 0-12-12zm79.59 29.61c-22.18-22.82-56.46 10.75-34.38 33.66a24.05 24.05 0 0 1 0 33.57c-22.48 23.22 12.6 56.08 34.38 33.67a72.64 72.64 0 0 0 .03-100.9zm51.82-50c-22-22.81-56.16 10.7-34.19 33.51a96.39 96.39 0 0 1 0 133.85c-22.47 23.21 12.52 55.92 34.19 33.52 54.08-55.91 54.08-145 0-200.88z" class="fa-primary"></path></g></svg>
        </div>
        </div>
        <div class="panel-body">
          <h5> <strong>Nyaw</strong></h5>
        </div>
        <div class="panel-footer">
          <h5>No Files</h5>
            <a href="#" download>
          <button class="btn btn-lg" download>Open Index</button></a>
        </div>
      </div>      
    </div> -->

  </div>
</div>

<!-- 
░█████╗░██████╗░░█████╗░██╗░░░██╗████████╗
██╔══██╗██╔══██╗██╔══██╗██║░░░██║╚══██╔══╝
███████║██████╦╝██║░░██║██║░░░██║░░░██║░░░
██╔══██║██╔══██╗██║░░██║██║░░░██║░░░██║░░░
██║░░██║██████╦╝╚█████╔╝╚██████╔╝░░░██║░░░
╚═╝░░╚═╝╚═════╝░░╚════╝░░╚═════╝░░░░╚═╝░░░
 -->

<!-- Container (About Section) -->
<!-- <div id="about"></div>
<div id="statementoffaith" class="container-fluid bg-orange">
  <div class="row">
    <div class="col-sm-8" id="aboutsof">
      <h2>Statement of Faith</h2><br>
      <h4>Holding the Bible as the complete and only divine revelation, we strongly believe that God is eternally one and also eternally the Father, the Son, and the Spirit, the three being distinct but not separate. </h4><br>
      <h4>We hold that Christ is both the complete God and the perfect man. Without abandoning His divinity, He was conceived in the womb of a human virgin, lived a genuine human life on earth, and died a vicarious and all-inclusive death on the cross. After three days He resurrected bodily and has ascended to the heavens. He is now in glory, fully God but still fully man. We look to His imminent return with the kingdom of God, by which He will reign over the earth in the millennium and in eternity. We confess that the third of the Trinity, the Spirit, is equally God. All that the Father has and is, is expressed by the Son; and all that the Son has and is, is realized as the Spirit. We further believe that mankind is in need of God's salvation. Though we were absolutely unable to fulfill the heavy demands of God's righteousness, holiness, and glory, Christ fulfilled all the requirements through His death on the cross. Because of Christ's death, God has forgiven us of our sins, justified us by making Christ our righteousness and reconciled us to Himself. Based on Christ's redemption, God regenerates the redeemed with His Spirit to consummate His salvation, that they may become His children. Now possessing God's life and nature, the believers enjoy a daily salvation in His Body in this age and the eternal salvation in the coming age and in eternity. In eternity we will dwell with God in the New Jerusalem, the consummation of God's salvation of His elect.</h4>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    
    
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-eye-open logo slideanim"></span>
    </div>
  </div>
</div>

<div class="container-fluid container-hover">
  <div class="row">
    <div class="col-sm-4">
      <span class="	glyphicon glyphicon-certificate logo slideanim"></span>
    </div>
    <div class="col-sm-8" id="aboutsof">
      <h2>...</h2>
      <br>
      <h4><strong></strong>We hold the faith which is common to all the believers (Titus 1:4, Jude 3):
        </h4><br>
      <h4><li>The Bible is the complete divine revelation inspired word by word by God through the Holy Spirit (2 Pet. 1:21, 2 Tim. 3:16)</li>
        <li>God is uniquely one, yet triune — the Father, the Son, and the Spirit (1 Tim. 2:5a, Matt. 28:19)</li>
        <li>The Son of God, even God Himself, was incarnated to be a man by the name of Jesus Christ (John 1:1, John 1:14)</li>
        <li>Christ died on the cross for our sins, shedding His blood for our redemption (1 Pet. 2:24, Eph. 1:7a)</li>
        <li>Christ resurrected from among the dead on the third day (1 Cor. 15:4)</li>
        <li>Christ ascended to the right hand of God to be Lord of all (Acts 1:9, Acts 2:33, Acts 2:36)</li>
        <li>Whenever any person repents to God and believes in the Lord Jesus Christ, he is regenerated (born again) and becomes a living member of the one Body of Christ (Acts 20:21, John 3:3, Eph. 1:22-23, Rom. 12:5)</li>
        <li>Christ is coming again to receive His believers to Himself (1 Thes. 2:19)</li></h4>
    </div>
  </div>
</div> -->

<script>
jQuery(document).ready(function() {

$('#aboutsof').find('h4').hide().end().find('h2').click(function(){
$(this).next().slideToggle();});

// $('#story2').find('p').hide().end().find('h3').click(function(){
// $(this).next().slideToggle();});

});</script>

<!-- 
████████╗███████╗░██████╗████████╗██╗███╗░░░███╗░█████╗░███╗░░██╗██╗███████╗░██████╗
╚══██╔══╝██╔════╝██╔════╝╚══██╔══╝██║████╗░████║██╔══██╗████╗░██║██║██╔════╝██╔════╝
░░░██║░░░█████╗░░╚█████╗░░░░██║░░░██║██╔████╔██║██║░░██║██╔██╗██║██║█████╗░░╚█████╗░
░░░██║░░░██╔══╝░░░╚═══██╗░░░██║░░░██║██║╚██╔╝██║██║░░██║██║╚████║██║██╔══╝░░░╚═══██╗
░░░██║░░░███████╗██████╔╝░░░██║░░░██║██║░╚═╝░██║╚█████╔╝██║░╚███║██║███████╗██████╔╝
░░░╚═╝░░░╚══════╝╚═════╝░░░░╚═╝░░░╚═╝╚═╝░░░░░╚═╝░╚════╝░╚═╝░░╚══╝╚═╝╚══════╝╚═════╝░
 -->

<!-- Container (Testimonies Section) -->
<!-- <div id="testimonies" class="container-fluid text-center bg-orange">
  <h2>Testimonies</h2><br> -->


  <!-- <h4>Brothers and Sisters, you can send me your testimonies <a href="https://www.messenger.com/t/Veigar220">here.</a></h4> -->


  <!-- <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="#" alt="Testimonies1" width="400" height="300">
        <p><strong>Lucena</strong></p>
        <p>Hello</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="#" alt="Testimonies2" width="400" height="300">
        <p><strong>Pagbilao</strong></p>
        <p>Hi</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="#" alt="Testimonies3" width="400" height="300">
        <p><strong>Lucban</strong></p>
        <p>Nyaw</p>
      </div>
    </div>
  </div><br>
  
  <h2>Testimonies</h2> -->
  <!-- <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    Indicators
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>

    Wrapper for slides
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"..."<br><span>...</span></h4>
      </div>
      <div class="item">
        <h4>"One word... AMEN!!"<br><span>...</span></h4>
      </div>
      <div class="item">
        <h4>"..."<br><span>...</span></h4>
      </div>
      <div class="item">
        <h4>"Be filled in the spirit always"<br><span>...</span></h4>
      </div>
      <div class="item">
        <h4>"..."<br><span>...</span></h4>
      </div>
      <div class="item">
        <h4>"Test"<br><span>...</span></h4>
      </div>
      <div class="item">
        <h4>"..."<br><span>...</span></h4>
      </div>
      <div class="item">
        <h4>"Test"<br><span>...</span></h4>
      </div>
    </div>

    Left and right controls
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> -->

<!-- 
░█████╗░░██��██╗░███╗░░██╗████████╗░█████╗░░█████╗░████████╗  ██╗░░░██╗░██████╗
██╔═��██╗██╔══██╗████╗░██║╚══██╔══╝██╔══██╗██╔══██╗╚══██╔══╝  ██║░░░██║██╔════╝
██║░░╚═╝██║░░██║██╔██╗██║░░░██║░░░███████║██║░░╚═╝░░░██║░░░  ██║░░░██║╚█████╗░
██║░░██╗██║░░██║██║╚████║░░░██║░░░██╔══██║██║░░██╗░░░██║░░░  ██║░░░██║░╚═══██╗
╚█████╔╝╚█████╔╝██║░╚███║░░░██║░░░██║░░██║╚█████╔╝░░░██║░░░  ╚██████╔╝██████╔╝
░╚════╝░░╚════╝░╚═╝░░╚══╝░░░╚═╝░░░╚═╝░░╚═╝░╚════╝░░░░╚═╝░░░  ░╚═════╝░╚═════╝░
 -->

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-green">
  <h2 class="text-center">CONTACT US</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> 24 Camia St., Zaballero Subd., Lucena City</p>
      <p><span class="glyphicon glyphicon-phone"></span> +639 47 600 5703</p>
      <p><span class="glyphicon glyphicon-envelope"></span> churchesinquezon.activities@gmail.com</p>
      <h3>Follow Us</h3>
      <a href="https://www.facebook.com/quezonprovince.activities/" target="_blank">
        <div style="width: 30%;"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-facebook-square fa-w-14 fa-3x"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" class=""></path></svg></div>
      </a>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <!-- <p>Subscribe to our Newsletter</p> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form> -->
</div>

<!-- Image of location/map -->
<!-- <embed src="https://www.google.com/maps/@13.9435106,121.6121959,3a,75y,88.17h,88.55t/data=!3m6!1e1!3m4!1sDQ0OwdhlUZox5d4wCPVXKg!2e0!7i13312!8i6656" class="w3-image w3-greyscale-min" style="width:100%"> -->
<!-- https://www.google.com/maps/@13.9435106,121.6121959,3a,75y,88.17h,88.55t/data=!3m6!1e1!3m4!1sDQ0OwdhlUZox5d4wCPVXKg!2e0!7i13312!8i6656 -->



<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d968.0635566909938!2d121.61166302918629!3d13.943462699388984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd4ca747214fdd%3A0x12f08fff3bf619a2!2sCamia%20St.%2C%20Lucena%2C%204301%20Quezon!5e0!3m2!1sen!2sph!4v1586192578974!5m2!1sen!2sph" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->

<!--The div element for the map -->
<div id="map" class="w3-image w3-greyscale-min" style="width:100%; height:400px;"></div>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuvbN6CLsqzhiwv6kAcRPN2go3CvZLoTM&callback=initMap">
</script>
<script>
// Initialize and add the map
function initMap() {
  // The location of CIL
  var CIL = {lat: 13.943484, lng: 121.6123216};
  // The map, centered at CIL
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 17, center: CIL});
  // The marker, positioned at CIL
  var marker = new google.maps.Marker({position: CIL, map: map});
}
</script>


  
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <!-- <p>Made By <a href="https://www.facebook.com/Veigar220" title="Visit Red">Red</a></p> -->
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>

<div id="fb-root"></div>

<!-- Put this if hosting is in 000webhostapp -->
<script src="./files/rb.js"></script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=238679923942887&autoLogAppEvents=1" nonce="jlYgQIJ1"></script>

<!-- DATE SCRIPT -->

<script>
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var n = new Date();
var y = n.getFullYear();
var m = n.getMonth();
var d = n.getDate();
// document.getElementById("date").innerHTML = d + " " + months[m] + " " + y;
document.getElementById("date").innerHTML = months[m] + " " + y;
document.getElementById("date1").innerHTML = months[m] + " " + d;
document.getElementById("date2").innerHTML = months[m] + " " + d;
document.getElementById("date3").innerHTML = months[m] + " " + d;
document.getElementById("date4").innerHTML = months[m] + " " + d;
document.getElementById("date5").innerHTML = months[m] + " " + d;
document.getElementById("date6").innerHTML = months[m] + " " + d;
document.getElementById("date7").innerHTML = months[m] + " " + d;
</script>

<!-- Show Div on today's date -->

<script>
function showhide() {
    var d = new Date();
    var s = document.getElementById(d.getDay());
    s.style.display = (s.style.display == 'block') ? 'none' : 'block';
}
showhide();
</script>
</html>
