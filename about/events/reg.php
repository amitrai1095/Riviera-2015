<?php

include ("connection.php");

if(isset($_POST['submit'])){


	$password =  $_POST['password'];

	$cpassword =  $_POST['cpassword'];


	$email =  $_POST['email'];

	if($password==$cpassword){

 $res = mysql_query("insert into user(username,password)values('$email',MD5('$password'))");

 if($res){

 header("location:index.php");

 }
 

}

else

{

echo "Password Does not match";

}

}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


</head>



<body>





     

<div id="content">



<h1>Register New User</h1>





<form name="add" method="post" action="">

 <table class="policyTable">

  

<tr>

    <td>Email <span class="astric">*</span></td>

    <td><input name="email" type="text" id="email" /></td>

  </tr>

  

  <tr>

    <td>Password <span class="astric">*</span></td>

    <td><input name="password" type="password" id="password" /></td>

  </tr>

  <tr>

    <td>Confirm Password <span class="astric">*</span></td>

    <td><input name="cpassword" type="password" id="cpassword" /></td>

  </tr>

  
  

  <tr>

    <td>&nbsp;</td>

    <td><input name="submit" type="submit"  value="Signup" /></td>

  </tr>

 </table>



</form>



</div>


</div>