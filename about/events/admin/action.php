<?php

include ("connection.php");
$eid = $_GET['id'];
session_start();
$tt=$_SESSION['name'];


if(isset($_POST['submit'])){
$status=$_POST['Action'];
$comment=$_POST['comment'];

$comp=mysql_query("UPDATE eventsform SET status='$status' where Sno=$eid");
 if($comp){
 $res = mysql_query("insert into comments(comments,eventid,uid)values('$comment','$eid','$tt')");

 

 header("location:result.php");

 }



}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">



<body>
<head>
	<link rel="stylesheet" href="css/broker.css" type="text/css" media="all" />
    </head>
    <?php 
include ("menu.php");

?>




     

<div id="content">



<h1>Action for the Event</h1>





<form name="add" method="post" action="">

 <table class="policyTable">

  

<tr>

    <td>Action</td>

    <td><select name="Action">
	<option value="2">Onhold</option>
	<option value="1">Accept</option>
	<option value="3">Reject</option>
	</select>
	</td>

  </tr>

  

  <tr>

    <td>Comment</td>

    <td><textarea name ="comment"  cols="40" rows="5" ></textarea></td>

  </tr>

  
  

  <tr>

    <td>&nbsp;</td>

    <td><input name="submit" type="submit"  value="Update" /></td>

  </tr>

 </table>



</form>



</div>


</div>