<?php

//logout after $timeoff in sec
//$timeoff=300;
//if (time()-$_SESSION['time']>$timeoff){
  //  header("location:logout.php");

//}
$_SESSION['time']=time();



$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="9670"; // Mysql password 
$db_name="cms"; // Database name 
$tbl_name="aboutPic"; // Table name


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
//$id=$_GET['edit'];
$tbl_name=$_GET['tbl_name'];
$idtmp=$_GET['del'];
//$id=mysql_real_escape_string($idtmp);
$id=mysql_real_escape_string($idtmp);

// Retrieve data from database 
$sql="DELETE FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);
//$rows=mysql_fetch_array($result);

// close connection 
mysql_close();
header("location:../../about.php");



?>
