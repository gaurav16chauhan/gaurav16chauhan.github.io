<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <link rel="stylesheet" href="js/cstemp.css" >
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
     
    <link href="js/csstemp.css" rel="stylesheet">
    <link rel="stylesheet" href="js/font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/style2.css">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    
    <style type="text/css">

    li.show:hover {
  animation: bounce 1s;
}
      @keyframes bounce {
  0%, 20%, 60%, 100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  40% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
  }

  80% {
    -webkit-transform: translateY(-10px);
    transform: translateY(-10px);
  }
}
.btn-lg{
    font-size: 28px;
    align-self: center;
}
    </style>

</head>
<body data-spy="scroll" data-taregt=".navbar-collapse" >
<?php
define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'website1');
 
 $conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);

  if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['dob']))
{
$F= $_POST['fname'];
$L= $_POST['lname'];
$E= $_POST['email'];
$P= $_POST['pass'];
$D= $_POST['dob'];

 }
  $P=md5($P);
  $query="insert into logtb(fname,lname,email,password,dob) values('$F','$L','$E','$P','$D')";
    mysql_query("$query"); 
?>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
  
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">




<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/smoothscrool.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <script type="text/javascript" src="js/jstemp.js"></script>

<div class="bodybg" >

<div class="container">

<div class="navvbar">
    <nav class="navbar navbar-default no-margin navbar-fixed-top" >
    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header fixed-brand" id="navbar-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" id="menu-toggle">
                      <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                    </button>
                    <a class="navbar-brand" href="#jssor_1"><i class="fa fa-rocket fa-4"></i> BROWSE-ME</a>

                </div><!-- navbar-header-->
 
                <div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" data-target=".navbar-collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
                                <li class="show" id="ncc"><a class="navbar-brand" href="#heading-tag"><span class="fa-stack fa-2x "><i class="fa fa-sort-down fa-stack-1x "></i></span></a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-left">

    <li class="show" ><a href="#">WELCOME TO BROWSE ME</a></li>

    </ul>
    

    <ul class="nav navbar-nav navbar-right">
    
   
      <li class="show"><a href="index.html">Home</a></li>
       
      <li class="show"><a href="contact-us.html">About us</a></li>
      <li class="show"><a href="cate.html">Categories</a></li> 
      <li class="show"><a href="login.html">login</a></li>

    </ul>
                </div><!-- bs-example-navbar-collapse-1 -->
    </nav>
    
    </div>
    
    <div class="side">
    <div id="wrapper" class="toggled-2">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" >
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
 
                <li class="active">
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Home</a>
                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="../csst/index.html">link1</a></li>
                        <li><a href="../csst/index1.html">link2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span> Conatct us</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="../csst/contact.html"><span class="fa-stack fa-lg pull-left" ><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                        <li><a href="../csst/contact1.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>
 
                    </ul>
                </li>
                <li>
                    <a href="../csst/profile.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Profile</a>
                </li>
                <li>
                    <a href="../csst/logg.html"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x "></i></span>Login</a>
                </li>
                <li>
                    <a href="../csst/logg.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>Sign up</a>
                </li>
                <li>
                    <a href="../csst/contact.html"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>About us</a>
                </li>
                            </ul>
        </div>

</div>
</div>
</div>

<div class="container homepage3">
<div class="row">
<form method="post" autocomplete="off">
<div class="col-md-8">
  
  <p>Your First Name:</p>
  <div class="row">
  
  <div class="col-lg-4 input-group">
    
      <span class="input-group-btn">
        
      </span>
      <input type="text" name="fname" class="form-control" placeholder="First Name" >
    </div>


  </div>
<p>   </p>
<p>   </p>
<p>Your Last Name:</p>
<div class="row">
  <div class="col-lg-4 input-group">
    
      <span class="input-group-btn">
       
      </span>
      <input type="text" name="lname" class="form-control" placeholder="Last Name" >
    

    </div>
  </div>

  <p>   </p>
  <p>   </p>
  <p>Email:</p>
<div class="row">
  <div class="col-lg-4 input-group">
 
      <span class="input-group-btn">
        
      </span>
      <input type="text" name="email" class="form-control" placeholder="Email" >
    </div>

    
  </div>
<p>Password:</p>
<div class="row">
  <div class="col-lg-4 input-group">
 
      <span class="input-group-btn">
        
      </span>
      <input type="password" name="pass" class="form-control" placeholder="Min. 6 digits" >
    </div>

    
  </div>
  <p>Date-Of-Birth:</p>
  <div class="row">
  <div class="col-lg-4 input-group">
 
      <span class="input-group-btn">
        
      </span>
      <input type="date" name="dob" class="form-control" placeholder="DOB" >
    </div>

    
  </div>
  <p>   </p>
  <div class="loggin1">
  <button type="submit" class="btn btn-default" value="log">Sign-up</button>
</div>
</form>
<hr>
</div>

<div class="col-md-4 loggin">
<a href="login.html"><button type="button" class="btn btn-danger btn-lg">Login</button></a>
</div>
<div id="vert"></div>
</div>
</div>
<footer>


<p><div class="social-platforms" id="socially">


<a class="btn btn-icon btn-facebook" href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
<a class="btn btn-icon btn-twitter" href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a>
<a class="btn btn-icon btn-googleplus" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i><span>Google+</span></a>
<a class="btn btn-icon btn-pinterest" href="https://in.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
<a class="btn btn-icon btn-linkedin" href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a>
</div></p>


 
    <p><img src="img/home.gif"  > </p>

<div id="top-btn">
    <a href="#slidepic">
    <i class="fa fa-3x fa-chevron-circle-up"></i></a>
    </div>

  <!-- Button trigger modal -->
<p><a class="btn btn-danger btn-lg btn-font-size" role="button" data-toggle="modal" data-target="#myModal" >WATCH THIS &raquo;</a></p>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <button class="close btn btn-danger" data-dismiss="modal" aria-hidden="true">x</button>
     <iframe width="560" height="315" src="https://www.youtube.com/embed/Mu6VqsF" frameborder="0" allowfullscreen></iframe>
    </div>
  
</div>
</div>
</footer>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/sidebar_menu.js"></script>
  

</body>
</html>