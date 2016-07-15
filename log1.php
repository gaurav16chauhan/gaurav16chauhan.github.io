
<?php

define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'website1');
 
 $conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);

  if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['dob']))
{
$F = $_POST['fname'];
$L = $_POST['lname'];
$E = $_POST['email'];
$P = $_POST['pass'];
$D = $_POST['dob'];

 }
  $P=md5($P);
  $query="insert into logtb(fname,lname,email,password,dob) values('$F','$L','$E','$P','$D')";
    mysql_query("$query");  
  ?>

